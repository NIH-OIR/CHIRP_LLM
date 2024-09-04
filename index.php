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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['app']['app_title']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/styles/default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.3/themes/base/jquery-ui.min.css"/>

    <!-- Select2 plugin -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">

    <!-- datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.1.4/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/2.0.5/css/select.dataTables.css">

    <link href="style.v1.02.css" rel="stylesheet">

    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/highlight.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.3/jquery-ui.min.js"></script>

    <script>
        var application_path = "<?php echo $application_path; ?>";
        var deployments = <?php echo json_encode($deployments_json); ?>;
        var sessionTimeout = <?php echo $sessionTimeout * 1000; ?>; // Convert seconds to milliseconds
        var deployment = "<?php echo $deployment; ?>";
        var temperature = "<?php echo $_SESSION['temperature']; ?>";
    </script>

    <!-- datatable css and js -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/2.1.4/js/dataTables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/select/2.0.5/js/dataTables.select.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/select/2.0.5/js/select.dataTables.js"></script>


	<!-- Select2 plugin -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


<!--     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script> -->

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
        <nav class="col-12 col-md-2 align-items-start flex-column menu">

             <!-- Start Menu top content -->
            <div class="left-nav-top">
                <button type="button" class="btn btn-secondary" data-tip="about-content" data-toggle="tooltip" data-placement="right" style="width:100%; padding: 0;" id="aboutBtn" title="">
                    About Chirp
                </button>
                <button type="button" class="btn btn-secondary" data-tip="announcement-content" data-toggle="tooltip" data-placement="right" style="width:100%; padding: 0; margin-top: 7px;" id="announcementBtn" title="">
                    Announcement
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
                <button type="button" class="btn btn-secondary" data-tip="trainingSupport-content" data-toggle="tooltip" data-container="body" data-placement="right" style="width:100%; padding: 0; margin-top: 7px;" id="trainingSupportBtn" title="">
                    Training & Support
                </button>
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
                <img id="chatBubbleIcon" src="images/chat-bubble.png" width="5%">
                <textarea class="form-control" id="userMessage" style="width: 92%;float: right; margin-right: 20px;"
                    aria-label="Main chat textarea" placeholder="Type your message..." rows="4" ></textarea>
                <span>
                    <img id="attachmentIcon" src="images/attachment.png" alt="Upload File" class="message-icon" 
                        title="Document types accepted include PDF, XML, JSON, Word, Text, and Markdown. At this time we do not support Excel or CSV files.">
                </span>
            </form>
            <div class="maincol-bottom"><!-- Chat body bottom -->
                <table style = "width:100%">
                <tr>
                <td style="width: 30%;">
                <form onsubmit="saveMessage()" id="model_select" action="" method="post" style="margin: 5px 0 10px 20px;">
                    <label for="model" title="Choose between available chat models">Select Model:</label>
                    <select  id="model" name="model" onchange="document.getElementById('model_select').submit();">
                        <?php
                        foreach ($models as $m => $modelconfig) {
                            #echo '<pre>'.print_r($modelconfig,1).'</pre>';
                            $label = $modelconfig['label'];
                            $tooltip = (!empty($modelconfig['tooltip'])) ? $modelconfig['tooltip'] : "";
                            $sel = ($m == $_SESSION['deployment']) ? 'selected="selected"' : '';
                            if (isAdminUser($_SESSION['user_data']['userid'])) {
                                echo '<option value="'.$m.'"'.$sel.' title="'.$tooltip.'">'.$label.'</option>'."\n";
                            } else if (!isAdminUser($_SESSION['user_data']['userid']) && $m != 'gemini-1.5-pro') {
                                echo '<option value="'.$m.'"'.$sel.' title="'.$tooltip.'">'.$label.'</option>'."\n";
                            }
                        }
                        ?>
                    </select>
                </form>
                </td>
                <td style="width: 25%;">
                <form onsubmit="saveMessage()" id="temperature_select" action="" method="post" style="margin: 5px 0 10px 0;">
                    <label for="temperature" title="Choose a temperature setting between 0 and 2. A temperature of 0 means the responses will be very deterministic (meaning you almost always get the same response to a given prompt). A temperature of 2 means the responses can vary substantially.">
                        Select Temperature:
                    </label> 
                    <select  name="temperature" style="width:70px;" onchange="document.getElementById('temperature_select').submit();">
                        <?php
                        foreach ($temperatures as $t) {
                            $sel = ($t == $_SESSION['temperature']) ? 'selected="selected"' : '';
                            echo '<option value="'.$t.'"'.$sel.'>'.$t.'</option>'."\n";
                        }
                        ?>
                    </select>
                </form>
                </td>
                <td>
                <form id="fileUpload" method="post" action="upload.php" id="document-uploader" enctype="multipart/form-data" style="margin: 5px 0 10px 0;">
                    <!-- Hidden input for chat_id -->
                    <input type="hidden" name="chat_id" aria-label="Hidden field with Chat ID" value="<?php echo htmlspecialchars($_GET['chat_id']); ?>">

                    <?php if (!empty($_SESSION['document_name'])): ?>
                        <p>Uploaded file: <span class="uploadFileSpan" title="<?php echo htmlspecialchars($_SESSION['document_name']); ?>">
                                                <?php echo htmlspecialchars($_SESSION['document_name']); ?>
                                         </span>
                            <a href="upload.php?remove=1&chat_id=<?php echo htmlspecialchars($_GET['chat_id']); ?>" style="color: blue">Remove</a>
                        </p>
                    <?php else: ?>
                        <input id="fileUploadInput" style="display: none"  type="file" name="uploadDocument" aria-label="File upload button" accept=".pdf,.docx,.txt,.md,.json,.xml" style="width:15em;" required onchange="javascript:fileUpload();" />
                    <?php endif; ?>
                </form>
                </td>
<?php 
                    if(!empty($_SESSION['error'])) {
                        echo "<script>alert('Error: ".$_SESSION['error']."');</script>";
                        $_SESSION['error']="";
                        unset($_SESSION['error']);
        
                    }
?>

                <td style="width: 10%;">
                    <input type="button" value="Print" title="Print the existing chat session" aria-label="Print button" onClick="printChat()" 
                            id="printButton" style = "width: 80px; margin: 5px 0 10px 10px;"/>
                </td>
                </tr>
                <tr class="contactAcknowledgeTr">
                <td>
                    <div class="contactAcknowledgeDiv">
                        <span data-toggle="tooltip" data-placement="right" data-bs-custom-class="acknowledgement-tooltip"
                                style="color: blue;" id="acknowledgement" >
                            Acknowledgement
                        </span>
                    </div>

                </td><td></td>
                <td colspan="2">
                    <div class="contactAdminToolDiv">
                        <div id="adminToolDiv" class="adminToolDiv" style="display:inline-block;">
                        <input type="button" value="Admin Tool" aria-label="Admin Tool button" id="adminToolBtn" class ="adminToolBtn" 
                            title = "Tool for admin to review user information"/>
                            |
                        </div>
                        <input type="button" value="Contact" aria-label="Contact button" id="contactBtn" class ="contactBtn" onClick = "javascript:sendToContact();" 
                            title = "Email to CRISPI-LLM@od.nih.gov"/> 
                    </div>
                </td>
                </tr>
                </table>
            </div><!-- End Chat body bottom -->
        </main> <!-- End the main-content column -->

    </div> <!-- end the Content Row -->

</div> <!-- end the Container-fluid -->
    <div class="waiting-indicator" style="display: none;">
        <img src="images/Ripple-1s-59px.gif" alt="Loading...">
    </div>

<!-- Tooltip Content -->
<div class="tooltip bs-tooltip-top" role="tooltip" id="about-content">
  <div class="tooltip-content" style="max-width: 100%;text-align: left;">
        <p>The Large Language Model (LLM) pilot, funded by the Office of Data Science and Strategy and led by the Office of Intramural Research (OIR), aims to establish a secure LLM environment for NIH Staff. The focus is primarily on IRP programs, allowing exploration of Generative Artificial Intelligence (GenAI) technology specifically LLMs, and their potential impact on our biomedical research enterprise. Ethical and responsible use of LLMs in support of NIH missions is a key consideration to balance the innovation and protection aspects of the technology. The pilot is governed by the IRP AI Task Force, chaired by Dr. Richard Scheuermann.
        </p>
        <p>To achieve its objectives, the pilot will collect limited demographic information, including IC (Institute/Center), user roles, and user prompts and responses from each LLM. This data will inform policy decisions and guide future implementations of similar technologies. Importantly, the collected information will be used solely for usage and statistical reporting purposes.   
        </p>
        <p>For more information on GenAI technology and resources at NIH, please reference to:</p>
        <ul>
            <li><a target="_blank" href="https://teams.microsoft.com/l/team/19%3awtMbBDK8XbVfyehH9C9tTJI6Sm7QPb5m_SLm9aeMiM41%40thread.tacv2/conversations?groupId=00b270d4-5cb5-4523-b7e6-352797cbcb85&tenantId=14b77578-9773-42d5-8507-251ca2dc2b06">NIH GenAI Community</a></li>
            <li><a target="_blank" href="https://cloud.nih.gov/">NIH STRIDES Initiative</a></li>
            <li>NIH OD <a target="_blank" href="https://nih.sharepoint.com/sites/OD-CDATechnologyAvailabilityGuideCTAG/SitePages/AIGuidance_FoundationalInformationGenerativeAIRisks.aspx?xsdata=MDV8MDJ8YWxpY2lhLmxpbGxpY2hAbmloLmdvdnw0YzU5YjczN2ExZTc0YjAwMTc2ODA4ZGM4NGQ0OGU3N3wxNGI3NzU3ODk3NzM0MmQ1ODUwNzI1MWNhMmRjMmIwNnwwfDB8NjM4NTMxMjk1NjU5NjY1MTE3fFVua25vd258VFdGcGJHWnNiM2Q4ZXlKV0lqb2lNQzR3TGpBd01EQWlMQ0pRSWpvaVYybHVNeklpTENKQlRpSTZJazFoYVd3aUxDSlhWQ0k2TW4wPXwwfHx8&sdata=eU1FclhNRERXbU9wVWVSekRDSDBUcHU3RHlSTUlRVEZvR1pBRUgwYnFDZz0%3d&clickparams=eyAiWC1BcHBOYW1lIiA6ICJNaWNyb3NvZnQgT3V0bG9vayIsICJYLUFwcFZlcnNpb24iIDogIjE2LjAuMTY3MzEuMjA2NzQiLCAiT1MiIDogIldpbmRvd3MiIH0%3d&SafelinksUrl=https%3a%2f%2fnih.sharepoint.com%2fsites%2fOD-CDATechnologyAvailabilityGuideCTAG%2fSitePages%2fAIGuidance_FoundationalInformationGenerativeAIRisks.aspx">AI Guidance - Foundational Information, Generative AI and Risks</a></li>
            <li><a target="_blank" href="https://nih.sharepoint.com/sites/OD-CDATechnologyAvailabilityGuideCTAG/SitePages/Prompt-Engineering.aspx">Prompt Engineering Guide</a></li>
        </ul>
        <p>Any question, please contact <a href="mailto:CRISPI-LLM@od.nih.gov">CRISPI-LLM@od.nih.gov</a> via email. </p>
        <p>Notes: The following NIH and HHS <a target="_blank" href="https://www.hhs.gov/sites/default/files/rules-of-behavior.pdf">Rules of Behavior for General Users</a> are applied to all resources provided in this pilot.</p>
        <p class="feedback"><b><?php echo $config['app']['feedback_text']; ?></b></p>
    </div>
</div>
<div class="acknowledgement-tooltip bs-tooltip-top" role="tooltip" id="acknowledgement-content">
  <div class="acknowledgement-tooltip-content" style="max-width: 100%;text-align: left;">
        <p>acknowledgement content
        </p>
  </div>
</div>
<div class="tooltip bs-tooltip-top" role="tooltip" id="announcement-content">
  <div class="tooltip-content" style="max-width: 100%;text-align: left;">
        <p>Current Limitations of Document Upload Function:</p>
        <ul>
        <li>Files that work: .pdf, .json, .docx, .txt, .md, .xml</li>
        <li>Files that do not work: .pptx</li>
        <li>Can not upload: .xlsx, images, .csv</li>
        </ul>
        <p>This will be patched in future iterations. Please contact us if any additional issues arise.</p>
  </div>
</div>
<div class="tooltip bs-tooltip-top" role="tooltip" id="trainingSupport-content">
  <div class="tooltip-content" style="max-width: 100%;text-align: left;">
        <ul>
        <li><a href="https://nih.sharepoint.com/sites/OD-CDATechnologyAvailabilityGuideCTAG/SitePages/Prompt-Engineering.aspx" target="_blank">
                Prompt Engineering Guide
            </a>
        </li>
        <li><a href="https://nih.sharepoint.com/sites/OD-CDATechnologyAvailabilityGuideCTAG/SitePages/AIGuidance_FoundationalInformationGenerativeAIRisks.aspx?xsdata=MDV8MDJ8fGJmNTVmZTFkZGEyNTRiZTFhYjk3MDhkY2MyZWYyYjI0fDE0Yjc3NTc4OTc3MzQyZDU4NTA3MjUxY2EyZGMyYjA2fDB8MHw2Mzg1OTk1Nzk2NTY1NjM2MDd8VW5rbm93bnxWR1ZoYlhOVFpXTjFjbWwwZVZObGNuWnBZMlY4ZXlKV0lqb2lNQzR3TGpBd01EQWlMQ0pRSWpvaVYybHVNeklpTENKQlRpSTZJazkwYUdWeUlpd2lWMVFpT2pFeGZRPT18MXxMMk5vWVhSekx6RTVPamszTXprek9XUXdMV1F3TW1JdE5HWXpOQzA0TlRJM0xURTFZbVZtWVRFMFpXVm1NVjltWXpFMU16ZzJZUzB3TlRKakxUUmxNMk10WWpreE15MDNOV1JoTURoak5qYzFObUZBZFc1eExtZGliQzV6Y0dGalpYTXZiV1Z6YzJGblpYTXZNVGN5TkRNMk1URTJORFUwT1E9PXxhZGY4ZTkzOGEzODM0NTNmNDk0NzA4ZGNjMmVmMmIyMnw0YTc4MDk2N2Y0NjM0YWZhODJhMmNjYmJmNDExNWRmYw%3D%3D&sdata=Qkk0R09aYzFsOWgyWUlsQzdEc083U0w0Y0tjaGxoaFIxNWRVRU1zZ1E3Yz0%3D&ovuser=14b77578-9773-42d5-8507-251ca2dc2b06%2Cjenb2%40nih.gov&OR=Teams-HL&CT=1724945444026&clickparams=eyJBcHBOYW1lIjoiVGVhbXMtRGVza3RvcCIsIkFwcFZlcnNpb24iOiIxNDE1LzI0MDcxMTI4ODI1IiwiSGFzRmVkZXJhdGVkVXNlciI6ZmFsc2V9"
                target="_blank">
                AI Guidance
            </a>
        </li>

            
        </ul>
  </div>
</div>
<!-- End Tooltip Content -->
<!-- Include Bootstrap JS and its dependencies-->
<script src="script.v1.02.js"></script>
<script>
    document.getElementById('toggleMenu').addEventListener('click', function() {
        document.querySelector('.menu').classList.toggle('active');
    });
    var chatId = <?php echo json_encode(isset($_GET['chat_id']) ? $_GET['chat_id'] : null); ?>;
    var user = <?php echo json_encode(isset($user) ? $user : null); ?>;

</script>
    <script>
        //document.addEventListener('DOMContentLoaded', function() {
            var sessionTimer = setTimeout(logoutUser, sessionTimeout);
        //});
        var isAdminUser = <?php if (isAdminUser($_SESSION['user_data']['userid'])) echo "true"; else echo "false"; ?>;
        if (isAdminUser) {
            $("#adminToolDiv").show();
        } else {
            $("#adminToolDiv").hide();
        }
        $(document).ready(function(){
            $('#attachmentIcon').click(function() {
                $("input[type='file']").click();
            });
            $('#aboutBtn').tooltip({
                html : true,
                placement : "right",
                trigger : "click",
                title : $('#about-content').html()
            });
            $('#acknowledgement').tooltip({
                html : true,
                placement : "top",
                title : $('#acknowledgement-content').html()
            });
            $('#announcementBtn').tooltip({
                html : true,
                placement : "right",
                trigger : "click",
                title : $('#announcement-content').html(),
            });
            var trainingSupportTooltip = $('#trainingSupportBtn').tooltip({
                html : true,
                placement : "right",
                trigger : "click",
                title : function() {
                    return $('#trainingSupport-content').html()
                },
                customClass: "trainingSupport-tooltip"
            });
            $('body > div:not(.tooltip)').on("click", function(){
                $('#aboutBtn').tooltip("hide");
                $('#announcementBtn').tooltip("hide");
                $('#trainingSupportBtn').tooltip("hide");
            });
            $('#aboutBtn').on("click", function(){
                $('#announcementBtn').tooltip("hide");
                $('#trainingSupportBtn').tooltip("hide");
            });
            $('#announcementBtn').on("click", function(){
                $('#aboutBtn').tooltip("hide");
                $('#trainingSupportBtn').tooltip("hide");
            });
            $('#trainingSupportBtn').on("click", function(){
                $('#announcementBtn').tooltip("hide");
                $('#aboutBtn').tooltip("hide");
            });

            $('#adminToolDlg').dialog({
                width: 1060,
                height: 500,
                autoOpen: false,
                title: 'View All Users Information',
                open: function( event, ui ) {
                    $(this).closest(".ui-dialog").find(".ui-dialog-titlebar-close")
                            .addClass("ui-button ui-corner-all ui-widget ui-button-icon-only")
                            .html("<span class='ui-button-icon-primary ui-icon ui-icon-closethick'></span><span class='ui-button-icone-space'></span");
                },
            });
            $("#adminToolBtn").click(function() {
                $('#adminToolDlg').dialog("open");
            })            
        });

        function sendToContact() {
            window.location.href = "mailto:CRISPI-LLM@od.nih.gov";
        }
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
<script>
function saveAdminUser() {
    var userid = $("#selectedUserId").val();
    var checkedIsAmin = $("input[name=isAdminUser]:checked").val();
    $.ajax({
        url: "db.php",
        type: 'POST',
        data: {"callUpdateAdminUser": "1", 
                "userid": userid,
                "isAdmin": checkedIsAmin
                },
        success: function(response) {
            console.log("save admin user successfully");
            var oTable = $('#usersTable').DataTable();
            var selectedRowIndx = oTable.rows('.selected').indexes()[0];
            var updatedSelectedRowData = oTable.rows('.selected').data()[0];
            if (checkedIsAmin == 1) {
                updatedSelectedRowData.isAdmin = "Yes";
            } else {
                updatedSelectedRowData.isAdmin = "No";
            }
            oTable.row(selectedRowIndx).data(updatedSelectedRowData).draw();
            /*
            if (checkedIsAmin == 1) {
                oTable.cell({row:selectedRowIndx, column:5}).data("Yes").draw(false);   
            } else {
                oTable.cell({row:selectedRowIndx, column:5}).data("No").draw(false);
            }                    
            if (response) {
                
            } */
        }
    }); 
}
function cancelAdminUser() {
    var oTable = $('#usersTable').DataTable();
    var selectedRowData = oTable.rows('.selected').data()[0];
    var selectedIsAdmin = selectedRowData.isAdmin;
    if (selectedIsAdmin == "Yes") {
        $("input[name=isAdminUser][value='1']").prop('checked', true);
    } else {
        $("input[name=isAdminUser][value='0']").prop('checked', true);
    } 
    oTable.rows('.selected').nodes().to$().removeClass( 'selected' );
    $("#userInfoForm").hide();
}
</script>
    <div id="adminToolDlg" style="font-size: 13px;">
        <div id="userInfoForm" style="display:none">
            <h6>Edit Admin User</h6>
            <div class="row">
                <div class="col-md-2 columns">
                    <label for="userFullName">User's Name:</label>
                </div>
                <div class="col-md-4 columns">
                    <input id="selectedUserId" type="hidden"/>
                    <div id="userFullNameInput" /></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 columns">
                <label for="isAdminUser">Is Admin User?:</label>
                </div>
                <div class="col-md-1 columns">
                    <label for="isAdminUserYes">Yes</label>
                    <input type="radio" id="isAdminUserYes" name="isAdminUser" value="1">
                </div>
                <div class="col-md-1 columns">
                    <label for="isAdminUserNo">No</label>
                    <input type="radio" id="isAdminUserNo" name="isAdminUser" value="0">
                </div>
            </div>
            <div class="row">
            <div class="col-md-4 columns"></div>
            <div class="col-md-1 columns">
                <input type="button" value="Save" id="saveAdminUserBtn" class ="saveAdminUserBtn" style="width: 65px;" onclick="saveAdminUser()"/>
            </div>
            <div class="col-md-1 columns">
                <input type="button" value="Cancel" id="cancelAdminUserBtn" class ="cancelAdminUserBtn" style="width: 65px;" onclick="cancelAdminUser()"/>
            </div>
            </div>
        </div>
        <div id="usersTable_container" style="width:100%;">
            <table id="usersTable" style="width:100%;">
            <thead>
          <tr>
            <th class="filterhead"></th>
            <th class="filterhead dtNameCol"></th> <!--Name -->
            <th class="filterhead dtEmailCol"></th> <!--Email -->
            <th class="filterhead"></th><!--Role -->
            <th class="filterhead"></th><!--IC -->
            <th class="filterhead"></th><!--Is Admin -->
            <th class="filterhead"></th><!--API Keys -->
            <th class="filterhead"></th><!--LLMs Permitted -->
            <th class="filterhead dtDateCol"></th><!--Accepted Date -->
          </tr>
          <tr>
            <th class="select-checkbox"></th><!--checkbox -->
            <th></th><!--Name -->
            <th></th><!--Email -->
            <th></th><!--Role -->
            <th></th><!--IC -->
            <th></th><!--Is Admin -->
            <th></th><!--API Keys -->
            <th></th><!--LLMs Permitted -->
            <th></th><!--Accepted Date -->
          </tr>

        </thead>
            </table>
        </div>
    </div>
</body>
</html>


