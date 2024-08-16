<?php
// Include the library functions and the database connection
require_once 'lib.required.php'; 
require_once 'db.php'; 

$username = $_SESSION['user_data']['name'];

$emailhelp = $config['app']['emailhelp'];

$deployments_json = array();
foreach(array_keys($models) as $m) {
    $deployments_json[$m] = $config[$m];
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['app']['app_title']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.v1.02.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/styles/default.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/highlight.min.js"></script>
    <script>
        var application_path = "<?php echo $application_path; ?>";
        var deployments = <?php echo json_encode($deployments_json); ?>;
        var sessionTimeout = <?php echo $sessionTimeout * 1000; ?>; // Convert seconds to milliseconds
        var deployment = "<?php echo $deployment; ?>";
        var temperature = "<?php echo $_SESSION['temperature']; ?>";
    </script>
</head>
<body>

<!-- Navbar for Hamburger Menu -->
<nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" id="toggleMenu" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>

<div class="container-fluid"> <!-- start the Container-fluid -->
    <!-- <a href="#main-content" class="skip-link">Skip to main content</a> -->
    

    <div class="row header d-flex align-items-center"> <!-- Header Row -->
        <div class="col d-flex justify-content-start">
            <img src="images/<?php echo $config['app']['app_logo']; ?>" class="logo" alt="<?php echo $config['app']['app_logo_alt']; ?>">
        </div>
        <div class="col d-flex justify-content-center">
            <h1><?php echo $config['app']['app_title']; ?></h1>
        </div>
        <div class="col d-flex justify-content-end">
            <p id="username"><span class="greeting">Hello </span><span class="user-name"><?php echo $username; ?></span> <a title="Log out of the chat interface" href="logout.php" class="logout-link" style="display:inline-block;">Logout</a></p>
        </div>
    </div> <!-- End Header Row -->



    <div class="row flex-grow-1"> <!-- Begin the Content Row -->
        <!-- Start the menu column -->
        <nav class="col-12 col-md-2 d-flex align-items-start flex-column menu">

             <!-- Start Menu top content -->
            <div class="left-nav-top">
                <button type="button" class="btn btn-secondary" data-tip="about-content" data-toggle="tooltip" data-placement="right" style="width:100%;" id="aboutBtn" title="">
                    About
                </button>
                <span class="newchat"><a title="Create new chat" href="javascript:void(0);" onclick="startNewChat()">+&nbsp;&nbsp;New Chat</a></span>
            </div> <!-- End Menu top content -->
            <!-- Chat List in Left Nav -->
            <div class="left-nav-chat-list">
                <?php
                $path = get_path();
                foreach ($all_chats as $chat) {
                    $class= '';
                    if (!empty($chat_id) && $chat['id'] == $chat_id) {
                        $class = 'current-chat';  // This is the currently active chat
                        $chatTitle = htmlspecialchars($chat['title']);
                    }
                    echo '<div class="chat-item '.$class.'" id="chat-' . htmlspecialchars($chat['id']) . '">';

                    echo '<a class="chat-link chat-title" title="Load chat into context window" href="' . htmlspecialchars($chat['id']) . '">' . htmlspecialchars($chat['title']) . '</a>';
                    echo '<img class="chat-icon edit-icon" src="images/chat_edit.png" alt="Edit this chat" title="Edit this chat">';
                    echo '<img class="chat-icon delete-icon" src="images/chat_delete.png" alt="Delete this chat" title="Delete this chat">';
                    echo '</div>';
                }
                ?>
            </div>
    
            <!-- Start Menu bottom content -->
            <div class="mt-auto left-nav-bottom">
                <!-- Adding the feedback link -->
                <p class="feedback"><?php echo $config['app']['feedback_text']; ?>
            </div><!-- End Menu bottom content -->


        </nav> <!-- End the menu column -->

        <main id="main-content" class="col-12 col-md-10 d-flex align-items-start flex-column main-content">
            <h1 class="print-title"><?php print isset($chatTitle) ?  $chatTitle : "";?></h1>



            <!-- Main content here -->
            <div id="messageList" class="p-2 maincolumn maincol-top chat-container"><!-- Flex item chat body top -->
                    <!-- Chat messages will be added here -->
           </div><!-- End Flex item chat body top -->
           <div id="thumbnails"></div>
           <form id="messageForm" class="messageBox">
                <textarea class="form-control" id="userMessage" aria-label="Main chat textarea" placeholder="Type your message..." rows="4" ></textarea>
            </form>
            <div class="maincol-bottom"><!-- Chat body bottom -->

                <form onsubmit="saveMessage()" id="model_select" action="" method="post" style="display: inline-block; margin-left: 20px; margin-right: 10px; margin-top: 15px; border-top: 1px solid white; ">
                    <label for="model" title="">Select Model</label>: <select title="Choose between available chat models" id="model" name="model" onchange="document.getElementById('model_select').submit();">
                        <?php
                        foreach ($models as $m => $modelconfig) {
                            #echo '<pre>'.print_r($modelconfig,1).'</pre>';
                            $label = $modelconfig['label'];
                            $tooltip = (!empty($modelconfig['tooltip'])) ? $modelconfig['tooltip'] : "";
                            $sel = ($m == $_SESSION['deployment']) ? 'selected="selected"' : '';
                            echo '<option value="'.$m.'"'.$sel.' title="'.$tooltip.'">'.$label.'</option>'."\n";
                        }
                        ?>
                    </select>
                </form>
                <form onsubmit="saveMessage()" id="temperature_select" action="" method="post" style="display: inline-block; margin-left: 20px; margin-right: 10px; margin-top: 15px; border-top: 1px solid white; ">
                    <label for="temperature">Temperature</label>: <select title="Choose a temperature setting between 0 and 2. A temperature of 0 means the responses will be very deterministic (meaning you almost always get the same response to a given prompt). A temperature of 2 means the responses can vary substantially." name="temperature" onchange="document.getElementById('temperature_select').submit();">
                        <?php
                        foreach ($temperatures as $t) {
                            $sel = ($t == $_SESSION['temperature']) ? 'selected="selected"' : '';
                            echo '<option value="'.$t.'"'.$sel.'>'.$t.'</option>'."\n";
                        }
                        ?>
                    </select>
                </form>
                <form id="fileUpload" method="post" action="upload.php" id="document-uploader" enctype="multipart/form-data" style="display: inline-block; margin-top: 15px; margin-left: 30px;">
                    <!-- Hidden input for chat_id -->
                    <input type="hidden" name="chat_id" aria-label="Hidden field with Chat ID" value="<?php echo htmlspecialchars($_GET['chat_id']); ?>">

                    <?php if (!empty($_SESSION['document_name'])): ?>
                        <p>Uploaded file: <span style="color: salmon;"><?php echo htmlspecialchars($_SESSION['document_name']); ?></span>
                            <a href="upload.php?remove=1&chat_id=<?php echo htmlspecialchars($_GET['chat_id']); ?>" style="color: blue">Remove</a>
                        </p>
                    <?php else: ?>
                        <input title="Document types accepted include PDF, XML, JSON, Word, PowerPoint, Text, and Markdown. At this time we do not support Excel or CSV files." type="file" name="uploadDocument" aria-label="File upload button" accept=".pdf,.docx,.pptx,.txt,.md,.json,.xml" style="width:15em;" required onchange="javascript:fileUpload();" />
                    <?php endif; ?>
                </form>
<?php 
                    if(!empty($_SESSION['error'])) {
                        echo "<script>alert('Error: ".$_SESSION['error']."');</script>";
                        $_SESSION['error']="";
                        unset($_SESSION['error']);
        
                    }
?>


                    <input type="button" value="Print" title="Print the existing chat session" aria-label="Print button" onClick="printChat()" 
                            id="printButton" style = "width: 80px;margin-left: 100px;"/>

            </div><!-- End Chat body bottom -->
        </main> <!-- End the main-content column -->

    </div> <!-- end the Content Row -->

</div> <!-- end the Container-fluid -->
    <div class="waiting-indicator" style="display: none;">
        <img src="images/Ripple-1s-59px.gif" alt="Loading...">
    </div>

<!-- Tooltip Content -->
<div class="tooltip bs-tooltip-top" role="tooltip" id="about-content" style="width:600px">
  <div class="tooltip-content" style="max-width: 100%;text-align: left;">
        <p>The Large Language Model (LLM) pilot, funded by the Office of Data Science and Strategy and led by the Office of Intramural Research (OIR), aims to establish a secure LLM environment for NIH Staff. The focus is primarily on IRP programs, allowing exploration of Generative Artificial Intelligence (GenAI) technology specifically LLMs, and their potential impact on our biomedical research enterprise. Ethical and responsible use of LLMs in support of NIH missions is a key consideration to balance the innovation and protection aspects of the technology. The pilot is governed by the IRP AI Task Force, chaired by Dr. Richard Scheuermann.
        </p>
        <p>To achieve its objectives, the pilot will collect limited demographic information, including IC (Institute/Center), user roles, and user prompts and responses from each LLM. This data will inform policy decisions and guide future implementations of similar technologies. Importantly, the collected information will be used solely for usage and statistical reporting purposes.   
        </p>
        <p>For more information on GenAI technology and resources at NIH, please reference to:</p>
        <ul>
            <li><a href="https://teams.microsoft.com/l/team/19%3awtMbBDK8XbVfyehH9C9tTJI6Sm7QPb5m_SLm9aeMiM41%40thread.tacv2/conversations?groupId=00b270d4-5cb5-4523-b7e6-352797cbcb85&tenantId=14b77578-9773-42d5-8507-251ca2dc2b06">NIH GenAI Community</a></li>
            <li><a href="https://cloud.nih.gov/">NIH STRIDES Initiative</a></li>
            <li>NIH OD <a href="https://nih.sharepoint.com/sites/OD-CDATechnologyAvailabilityGuideCTAG/SitePages/AIGuidance_FoundationalInformationGenerativeAIRisks.aspx?xsdata=MDV8MDJ8YWxpY2lhLmxpbGxpY2hAbmloLmdvdnw0YzU5YjczN2ExZTc0YjAwMTc2ODA4ZGM4NGQ0OGU3N3wxNGI3NzU3ODk3NzM0MmQ1ODUwNzI1MWNhMmRjMmIwNnwwfDB8NjM4NTMxMjk1NjU5NjY1MTE3fFVua25vd258VFdGcGJHWnNiM2Q4ZXlKV0lqb2lNQzR3TGpBd01EQWlMQ0pRSWpvaVYybHVNeklpTENKQlRpSTZJazFoYVd3aUxDSlhWQ0k2TW4wPXwwfHx8&sdata=eU1FclhNRERXbU9wVWVSekRDSDBUcHU3RHlSTUlRVEZvR1pBRUgwYnFDZz0%3d&clickparams=eyAiWC1BcHBOYW1lIiA6ICJNaWNyb3NvZnQgT3V0bG9vayIsICJYLUFwcFZlcnNpb24iIDogIjE2LjAuMTY3MzEuMjA2NzQiLCAiT1MiIDogIldpbmRvd3MiIH0%3d&SafelinksUrl=https%3a%2f%2fnih.sharepoint.com%2fsites%2fOD-CDATechnologyAvailabilityGuideCTAG%2fSitePages%2fAIGuidance_FoundationalInformationGenerativeAIRisks.aspx">AI Guidance - Foundational Information, Generative AI and Risks</a></li>
        </ul>
        <p>Any question, please contact <a href="mailto:CRISPI-LLM@od.nih.gov">CRISPI-LLM@od.nih.gov</a> via email. </p>
        <p>Notes: The following NIH and HHS <a href="https://www.hhs.gov/sites/default/files/rules-of-behavior.pdf">Rules of Behavior for General Users</a> are applied to all resources provided in this pilot.</p>
  </div>
</div>
<!-- End Tooltip Content -->
<!-- Include Bootstrap JS and its dependencies-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('toggleMenu').addEventListener('click', function() {
            document.querySelector('.menu').classList.toggle('active');
        });
        var chatId = <?php echo json_encode(isset($_GET['chat_id']) ? $_GET['chat_id'] : null); ?>;
        var user = <?php echo json_encode(isset($user) ? $user : null); ?>;

    </script>
    <script type="module" src="gemini_handler.js"></script>
    <script src="script.v1.02.js"></script>
    <script>
        //document.addEventListener('DOMContentLoaded', function() {
            var sessionTimer = setTimeout(logoutUser, sessionTimeout);
        //});

        $(document).ready(function(){
            $("#aboutBtn").prop("title", )
            $('[data-toggle="tooltip"]').tooltip({
                html : true,
                placement : "right",
                trigger : "click",
                title : $('#about-content').html()
            });
        });
    </script>
<script>
function printChat() {
window.print();
}

// When the page is loaded, check if there's a saved userMessage and display it
/*document.addEventListener('DOMContentLoaded', (event) => {
var savedMessage = localStorage.getItem('userMessage');
if (savedMessage) {
document.getElementById('userMessage').value = savedMessage;
}
});

// Each time the userMessage is updated, save it in the local storage
document.getElementById('userMessage').addEventListener('input', (event) => {
localStorage.setItem('userMessage', event.target.value);
});

// After the form is submitted, clear the saved message
document.getElementById('messageForm').addEventListener('submit', function() {
localStorage.removeItem('userMessage');
});
 */
</script>

</body>
</html>


