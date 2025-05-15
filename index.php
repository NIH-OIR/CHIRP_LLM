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

    <!-- Highlight.js CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/styles/github-dark.min.css">
    <!-- Highlight.js Library -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/highlight.min.js"></script>
    <!-- Include marked.js for Markdown parsing -->
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/3.2.0/css/buttons.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/3.2.0/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/3.2.0/js/buttons.flash.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/3.2.0/js/buttons.html5.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/3.2.0/js/buttons.print.min.js"></script>
    
<!--custom js files -->
    <script src="session_handler.js"></script>
    <script src="script.v1.02.js"></script>
</head>
<body>

<!-- Navbar for Hamburger Menu -->
<nav class="navbar bg-dark">
    <button class="navbar-toggler" type="button" id="toggleMenu" aria-label="Toggle navigation" style=" background-color: #efe6e6;">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>

<div class="container-fluid"> <!-- start the Container-fluid -->
    <!-- <a href="#main-content" class="skip-link">Skip to main content</a> -->
    <div id="loadingDiv" style="display: none; background: url(/images/loading.gif) no-repeat center center;background-size: 55px 55px; background-color:#f4f5f7;">
	    <p id="processTxt" style="text-align: center; margin-bottom: 10px;">Uploading.....</p>
    </div>

    <div class="row header d-flex align-items-center" style="max-height: 102px;"> <!-- Header Row -->
        <div class="col d-flex justify-content-center chirp_header" >
            <img class ="chirp_log" src="images/chirp-logo.png" alt="ChIRP Log" title="ChIRP">
            <div id="username"><span class="greeting">Hello </span><span class="user-name"><?php echo $username; ?></span> <a title="Log out of the chat interface" href="logout.php" class="logout-link" style="display:inline-block;">Logout</a></div>
        </div>
        <!-- <div class="col d-flex col-2">
            <p id="username"><span class="greeting">Hello </span><span class="user-name"><?php echo $username; ?></span> <a title="Log out of the chat interface" href="logout.php" class="logout-link" style="display:inline-block;">Logout</a></p>
        </div> -->
    </div> <!-- End Header Row -->

    <div class="row ui-tabs" id="tabs" style="display:none;">
        <ul class="topNav ui-tabs-nav">
            <li><a href="#tabs-chat" id ="chatAnchor">My Chat</a></li>
            <li><a href="#tabs-about" id ="aboutAnchor">About ChIRP</a></li>
            <li><a href="#tabs-announcement" id ="announcementAnchor">Announcement</a></li>
            <li><a href="#tabs-trainingSupport" id ="trainingSupportAnchor">Training & Support</a></li>
            <li><a href="#tabs-contactAcknowledgement" id ="tabs-contactAcknowledgementAnchor">Contact & Acknowledgement</a></li>
            <!-- <li id ="adminToolTabList"><a href="#tabs-adminTool" >Admin Tool</a></li> -->
            <li id ="adminToolTabList"><a href="#tabs-adminTool" id="adminToolAnchor" >Admin Tool</a></li>
        </ul>
    


    <div class="col d-flex" id="tabs-chat"> <!-- Begin the Content Row Chat tab -->
        <!-- Start the menu column -->
        <nav class="col-12 col-md-2 align-items-start flex-column menu">

             <!-- Start Menu top content -->
            <div class="left-nav-top">
                <!-- <button type="button" class="btn btn-secondary" data-tip="about-content" data-toggle="tooltip" data-placement="right" style="width:100%; padding: 0;" id="aboutBtn" title="">
                    About Chirp
                </button>
                <button type="button" class="btn btn-secondary" data-tip="announcement-content" data-toggle="tooltip" data-placement="right" style="width:100%; padding: 0; margin-top: 7px;" id="announcementBtn" title="">
                    Announcement
                </button> -->
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

                    echo '<a class="chat-link chat-title" title="'.htmlspecialchars($chat['title']).'" href="' . htmlspecialchars($chat['id']) . '">' . htmlspecialchars($chat['title']) . '</a>';
                    //echo '<img class="chat-icon edit-icon" src="images/chat_edit.png" alt="Edit this chat" title="Edit this chat">';
                    echo '<svg class="chat-icon edit-icon" title="Rename" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.2929 4.29291C15.0641 2.52167 17.9359 2.52167 19.7071 4.2929C21.4784 6.06414 21.4784 8.93588 19.7071 10.7071L18.7073 11.7069L11.6135 18.8007C10.8766 19.5376 9.92793 20.0258 8.89999 20.1971L4.16441 20.9864C3.84585 21.0395 3.52127 20.9355 3.29291 20.7071C3.06454 20.4788 2.96053 20.1542 3.01362 19.8356L3.80288 15.1C3.9742 14.0721 4.46243 13.1234 5.19932 12.3865L13.2929 4.29291ZM13 7.41422L6.61353 13.8007C6.1714 14.2428 5.87846 14.8121 5.77567 15.4288L5.21656 18.7835L8.57119 18.2244C9.18795 18.1216 9.75719 17.8286 10.1993 17.3865L16.5858 11L13 7.41422ZM18 9.5858L14.4142 6.00001L14.7071 5.70712C15.6973 4.71693 17.3027 4.71693 18.2929 5.70712C19.2831 6.69731 19.2831 8.30272 18.2929 9.29291L18 9.5858Z" fill="currentColor"></path></svg>';
                    echo '<svg class="chat-icon delete-icon" title="Delete" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.5555 4C10.099 4 9.70052 4.30906 9.58693 4.75114L9.29382 5.8919H14.715L14.4219 4.75114C14.3083 4.30906 13.9098 4 13.4533 4H10.5555ZM16.7799 5.8919L16.3589 4.25342C16.0182 2.92719 14.8226 2 13.4533 2H10.5555C9.18616 2 7.99062 2.92719 7.64985 4.25342L7.22886 5.8919H4C3.44772 5.8919 3 6.33961 3 6.8919C3 7.44418 3.44772 7.8919 4 7.8919H4.10069L5.31544 19.3172C5.47763 20.8427 6.76455 22 8.29863 22H15.7014C17.2354 22 18.5224 20.8427 18.6846 19.3172L19.8993 7.8919H20C20.5523 7.8919 21 7.44418 21 6.8919C21 6.33961 20.5523 5.8919 20 5.8919H16.7799ZM17.888 7.8919H6.11196L7.30423 19.1057C7.3583 19.6142 7.78727 20 8.29863 20H15.7014C16.2127 20 16.6417 19.6142 16.6958 19.1057L17.888 7.8919ZM10 10C10.5523 10 11 10.4477 11 11V16C11 16.5523 10.5523 17 10 17C9.44772 17 9 16.5523 9 16V11C9 10.4477 9.44772 10 10 10ZM14 10C14.5523 10 15 10.4477 15 11V16C15 16.5523 14.5523 17 14 17C13.4477 17 13 16.5523 13 16V11C13 10.4477 13.4477 10 14 10Z" fill="currentColor"></path></svg>';
                    //echo '<img class="chat-icon delete-icon" src="images/chat_delete.png" alt="Delete this chat" title="Delete this chat">';

                    echo '</div>';
                }
                ?>
            </div>
    
            <!-- Start Menu bottom content -->
            <!-- <div class="mt-auto left-nav-bottom">
                <button type="button" class="btn btn-secondary" data-tip="trainingSupport-content" data-toggle="tooltip" data-container="body" data-placement="right" style="width:100%; padding: 0; margin-top: 7px;" id="trainingSupportBtn" title="">
                    Training & Support
                </button>
            </div> --><!-- End Menu bottom content -->


        </nav> <!-- End the menu column -->

        <main id="main-content" class="col-12 col-md-10 d-flex align-items-start flex-column main-content">
            <h1 class="print-title"><?php print isset($chatTitle) ?  $chatTitle : "";?></h1>



            <!-- Main content here -->
            <div id="messageList" class="p-2 maincolumn maincol-top chat-container"><!-- Flex item chat body top -->
                    <!-- Chat messages will be added here -->
            </div><!-- End Flex item chat body top -->
            <div class="maincol-bottom"><!-- Chat body bottom -->
                <div id="thumbnails"></div>
                <form id="messageForm" class="messageBox">
                    <img id="chatBubbleIcon" src="images/chat-bubble.png" width="5%">
                    <textarea class="form-control" id="userMessage" style="width: 92%;float: right; margin-right: 20px;"
                        aria-label="Main chat textarea" placeholder="Type your message..." rows="4" ></textarea>
                    <span>
                        <!-- <img id="attachmentIcon" src="images/attachment.png" alt="Upload File" class="message-icon" 
                            title="Document types accepted include PDF, XML, JSON, Word, Text, JPG, JPEG, PNG, GIF, and Markdown. At this time we do not support Excel or CSV files."> -->
                        <button type="button" id="attachmentIcon" class="fileUpload-icon" aria-label="Upload File"
                            data-tip="document-uploader" data-toggle="tooltip" data-container="body" data-placement="bottom" 
                            title="Document types accepted for GPT-4o include PDF, XML, JSON, Word, Text, JPG, JPEG, PNG, GIF, and Markdown. GPT-4o does not support Excel or CSV files.">
                            <!-- Icon (paper clip) -->
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8v8a5 5 0 1 0 10 0V6.5a3.5 3.5 0 1 0-7 0V15a2 2 0 0 0 4 0V8"/>
                            </svg>
                        </button>
                        <button type="submit" class="submit-button" aria-label="Send message">
                            <!-- Icon (paper plane) -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="send-icon">
                                <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
                            </svg>
                        </button>
                    </span>
                </form>
                <table style = "width:100%">
                <tr>
                <td style="width: 30%;">
                <form id="model_select" action="" method="post" style="margin: 5px 0 10px 20px;">
                    <label for="model">Select Model:</label>
                    <select  id="model" name="model">
                        <?php
                        $retiredModels = array("azure-llama3", "mistral-nemo", "gemini-1.5-pro");
                        foreach ($models as $m => $modelconfig) {
                            #echo '<pre>'.print_r($modelconfig,1).'</pre>';
                            $label = $modelconfig['label'];
                            $tooltip = (!empty($modelconfig['tooltip'])) ? $modelconfig['tooltip'] : "";
                            if (in_array($m, $retiredModels)) {
                                $m == 'azure-gpt4';
                            }
                            $sel = ($m == $_SESSION['deployment']) ? 'selected="selected"' : '';
                            #error_log("DEBUG indx.php  session deployment: ".$_SESSION['deployment']);
                            #error_log("DEBUG indx.php  selected model: ".$m ." is selected: ".$sel);
                            if (isAdminUser($_SESSION['user_data']['userid'])) {
                                echo '<option value="'.$m.'"'.$sel.' title="'.$tooltip.'">'.$label.'</option>'."\n";
                            } else if (!isAdminUser($_SESSION['user_data']['userid']) 
                                        && $m != 'gemini-1.5-pro' && $m != 'azure-gpt4-1') {
                                echo '<option value="'.$m.'"'.$sel.' title="'.$tooltip.'">'.$label.'</option>'."\n";
                            }
                        }
                        ?>
                    </select>
                    <div style="display:inline;">
                        <img id="modelQIcon" src="images/question_icon.svg" width="15px" title="Please note that selecting DALL-E will disable the drop-down menu. To re-gain access to the menu, you will need to create a New Chat. Please refer to the user guide and the DALL-E training demonstration video for more information."/>
                    </div>
                </form>
                </td>
                <td style="width: 25%;">
                <form id="temperature_select" action="" method="post" style="margin: 5px 0 10px 0;">
                    <label for="temperature" >
                        Select Temperature:
                    </label> 
                    <select  name="temperature" style="width:70px;">
                        <?php
                        foreach ($temperatures as $t) {
                            $sel = ($t == $_SESSION['temperature']) ? 'selected="selected"' : '';
                            echo '<option value="'.$t.'"'.$sel.'>'.$t.'</option>'."\n";
                        }
                        ?>
                    </select>
                    <div style="display:inline;">
                        <img id="temperatureQIcon" src="images/question_icon.svg" width="15px"
                            title="Choose a temperature setting between 0 and 2. A temperature of 0 means the responses will be very deterministic (meaning you almost always get the same response to a given prompt). A temperature of 2 means the responses can vary substantially."
                        />
                    </div>
                </form>
                </td>
                <td>
                <!-- File Upload Form -->
                <form id="fileUpload" method="post" action="upload.php" id="document-uploader" enctype="multipart/form-data">
                    <!-- Hidden input for chat_id -->
                    <input type="hidden" id="chat_id" name="chat_id" aria-label="Hidden field with Chat ID" value="<?php echo htmlspecialchars($_GET['chat_id']); ?>">
                    <input type="hidden" id="uploadedFilename"  aria-label="Hidden field for uploaded file name" value="">
                    <?php if (!empty($_SESSION['document_name'])){ ?>
                          
                        <p id="uploadeFilePElem" style="font-size: small; margin-bottom:0;">Uploaded file: 

                        <?php if (!empty($_SESSION['document_type']) && strpos($_SESSION['document_type'], 'image/') === 0){ ?>
                            <img src="<?php echo $_SESSION['document_text']; ?>" alt="Uploaded Image Thumbnail" style="max-width: 60px; max-height: 60px;margin-top: -10px;" />
                        <?php } else{ ?>  
                            <span class="uploadFileSpan" title="<?php echo htmlspecialchars($_SESSION['document_name']); ?>">
                                <?php echo htmlspecialchars($_SESSION['document_name']); ?>
                            </span>
                        <?php } ?>
                            <a href="upload.php?remove=1&chat_id=<?php echo htmlspecialchars($_GET['chat_id']); ?>" style="color: blue">Remove</a>
                            <!-- <a href="javascript:removeUploadedFile();" style="color: blue">Remove</a> -->
                        </p>                    
                    <?php } else { 
                        if ($_SESSION['deployment'] == 'azure-gpt4' || $_SESSION['deployment'] == 'azure-gpt4-1') {
                    ?>
                            <input id="fileUploadInput" style="display: none"  type="file" name="uploadDocument" aria-label="File upload button" accept=".pdf,.docx,.txt,.md,.json,.xml,.png,.jpg,.jpeg,.gif" style="width:15em;" required onchange="javascript:fileUpload();" />        
                    <?php } else if ($_SESSION['deployment'] == 'aws-claude2') { ?>
                        <input id="fileUploadInput" style="display: none"  type="file" name="uploadDocument" aria-label="File upload button" accept=".csv,.pdf,.docx,.txt,.xlsx" style="width:15em;" required onchange="javascript:fileUpload();" />
                    <?php }
                     } ?>
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
                </table>
            </div><!-- End Chat body bottom -->
        </main> <!-- End the main-content column -->

    </div> <!-- end the Content Row Chat tab-->
    <!-- about tab-->
    <div id="tabs-about" >
    <div class="tabsContainer tabsText">
        <p>The Large Language Model (LLM) pilot, funded by the Office of Data Science and Strategy and led by the Office of Intramural Research (OIR), aims to establish a secure LLM environment for NIH Staff. The focus is primarily on IRP programs, allowing exploration of Generative Artificial Intelligence (GenAI) technology specifically LLMs, and their potential impact on our biomedical research enterprise. Ethical and responsible use of LLMs in support of NIH missions is a key consideration to balance the innovation and protection aspects of the technology. The pilot is governed by the IRP AI Task Force, chaired by Dr. Richard Scheuermann.
        </p>
        <p>To achieve its objectives, the pilot will collect limited demographic information, including IC (Institute/Center), user roles, and user prompts and responses from each LLM. This data will inform policy decisions and guide future implementations of similar technologies. Importantly, the collected information will be used solely for usage and statistical reporting purposes.   
        </p>

        <h6><b>User Guide</b></h6>
        <p><a href="ChIRP_User_Guide.pdf" target="_blank" title="Open the user guide in a new window">User Guide<a></p>
        <h6><b>Terms and Conditions</b></h6>
        <p>Chat for Intramural Research Program (ChIRP) stores all data locally in the NIH data center and uses a secure NIH STRIDES cloud account to host AI models. This enables staff to use ChIRP Chat for sensitive data workloads including:</p>
        <ul>
            <li>De-identified and anonymized clinical data</li>
            <li>Pre-decisional and draft policy</li>
            <li>Nonpublic data including scientific data and draft manuscripts</li>
        </ul>
        <p>
            Please note that these use cases are specific to ChIRP, which is different than public AI tooling like ChatGPT, Meta.AI, and Google Gemini. When using any public AI tooling, please follow <a target="_blank" href="https://wiki.ocio.nih.gov/wiki/index.php/NIH_Artificial_Intelligence_(AI)_Cybersecurity_Guidance">OCIO Guidance</a>, which prohibits these sensitive workloads. Unlike the public tooling, data entered into ChIRP is not shared with Microsoft or OpenAI. This enables the sensitive workloads described above. Any questions, please contact <a href="mailto:CRISPI-LLM@od.nih.gov">CRISPI-LLM@od.nih.gov</a> via email.
        </p>
        <p>When using ChIRP, you must abide by these following guidelines:</p>
        <ol type="1">
            <li>
                <b>Output Validation:</b> Review and validate outputs generated by ChIRP to ensure the application remains reliable, ethical, and valuable.
            </li>
            <li>
                <b>Limitations and Biases:</b> Identify and report unfair, discriminatory, or inaccurate output patterns by the ChIRP.
            </li>
            <li>
                <b>Ethical use:</b> Follow HHS and NIH policies including <a target="_blank" href="https://wiki.ocio.nih.gov/wiki/index.php/NIH_Artificial_Intelligence_(AI)_Cybersecurity_Guidance">OCIO Guidance</a>, 
                <a target="_blank" href="https://intranet.hhs.gov/policy/hhs-policy-securing-artificial-intelligence-technology">HHS policy for Securing Artificial Intelligence (AI) Technology</a>, 
                <a target="_blank" href="https://grants.nih.gov/grants/guide/notice-files/NOT-OD-23-149.html">NOT-OD-23-149 prohibiting Generative AI for NIH Peer Review</a>, and any other federal requirements.
            </li>
            <li> 
                <b>No PII:</b> PII is not permitted for use but not limited to genomic data, passport information, social security numbers, driver's license numbers, Military status, bank account information including credit card numbers, photographic identifiers, medical record numbers, & date of birth.
            </li>
            <li> 
                <b>Training Data:</b> ChIRP uses commercial models. It is not fine-tuned on NIH, OD, or biomedical topics. Do not expect ChIRP to have any internal knowledge of the NIH or OD.
            </li>
            <li> 
                <b>Incident Response:</b> Report any malicious use or activity during the use of ChIRP immediately.
            </li>
        </ol>
    </div>
    </div>
    <!-- end about tab-->
    <!-- announcement tab-->
    <div id="tabs-announcement">
    <div class="tabsContainer tabsText">
        <p>All accounts that are inactive for <b>14</b> calendar days will be deactivated.</p>
        <p>Current Limitations of Document Upload Function:</p>
            <ul>
            <li>Files that work: .pdf, .json, .docx, .txt, .md, .xml, .png, .jpg, .jpeg, .gif</li>
            <li>Files that do not work: .pptx</li>
            <li>Can not upload: .xlsx, .csv, and all other image formats</li>
            </ul>
        <p>This will be patched in future iterations. Please contact us if any additional issues arise.</p>
        <?php 
            require_once 'faq.php';
        ?>
    </div>
    </div>
    <!-- end announcement tab-->
    <!-- training tab-->
    <div id="tabs-trainingSupport">
    <div class="tabsContainer tabsText">
        <?php 
            require_once 'trainingSupport.php';
        ?>
    </div>
    </div>
    <!-- end training tab-->
    <!-- contact acknowledge tab-->
    <div id="tabs-contactAcknowledgement">
    <div class="tabsContainer tabsText">
        <h5>Contact</h5>
        For all questions, please contact <a href="mailto:CRISPI-LLM@od.nih.gov">CRISPI-LLM@od.nih.gov</a>. 
        <hr>
        <h5>Acknowledgement</h5>
        <table>
            <tr>
                <td colspan="3"><h6><b>Office of the Director (OD)</b></h6></td>
            </tr>
            <tr>
                <td width="20%">Nick Andrade</td><td width="20%">| nick.andrade@nih.gov</td><td>| Training Specialist, Office of Data Science Strategy</td>
            </tr>
            <tr>
                <td>Evelyn Botchway</td><td>| botchwaye@od.nih.gov</td><td>| Program Analyst, Office of Data Science Strategy</td>
            </tr>
            <tr>
                <td>Philip Chiang</td><td>| chiangpt@od.nih.gov</td><td>| Program Officer, Office of Intramural Research</td>
            </tr>
            <tr>
                <td>Bryant Jen</td><td>| jenb2@od.nih.gov</td><td>| Program Officer, Office of Intramural Research</td>
            </tr>
            <tr>
                <td>Nitin Kumar</td><td>| kumarn6@od.nih.gov</td><td>| Infrastructure Systems officer, Office of Intramural Research</td>
            </tr>
            <tr>
                <td>Dr. Alison Lin</td><td>| alison.lin@nih.gov</td><td>| Program Director, Office of Data Science Strategy</td>
            </tr>
            <tr>
                <td>Dr. Steevenson Nelson</td><td>| nelsons2@od.nih.gov</td><td>| Program Director, Executive Office</td>
            </tr>
            <tr>
                <td>Etan Kuperberg</td><td>| etan.kuperberg@nih.gov</td><td>| Program Officer, Executive Office</td>
            </tr>
            <tr>
                <td>Rashod Qaim</td><td>| qaimra@od.nih.gov</td><td>| Program Officer, Executive Office</td>
            </tr>
            <tr>
                <td>Carlos Sanchez</td><td>| sanchezc3@od.nih.gov</td><td>| Program Officer, Executive Office</td>
            </tr> 
            <tr>
                <td>Chris Sowards</td><td>| chris.sowards@nih.gov</td><td>| Program Officer, Executive Office</td>
            </tr>            
            <tr>
                <td>Ylang Tsou</td><td>| tsouyh@od.nih.gov</td><td>| Program Officer, Executive Office</td>
            </tr>
            <tr>
                <td>Honghou Zhou</td><td>| zhouh5@od.nih.gov</td><td>| Program Officer, Executive Office</td>
            </tr>
            <tr>
                <td  colspan="3"><h6><b>Center for Information Technology (CIT)</b></h6></td>
            </tr>
            <tr>
                <td>Olanrewaju Balogun</td><td>| balogunog@cit.nih.gov</td><td>	| Cloud Computing Services Officer</td>
            </tr>
            <tr>
                <td>Ben Richmond</td><td>| ben.richmond@nih.gov</td><td>| Cloud Computing Services Officer</td>
            </tr>
            <tr>
                <td>Jonny Coleman</td><td>| jonny.coleman@nih.gov</td><td>| Cloud Computing Services Officer</td>
            </tr>
            <tr>
                <td>Wayne Chen</td><td>| chenwae@cit.nih.gov</td><td>| Cloud Computing Services Officer</td>
            </tr>
            <tr>
                <td>Ted Edwards</td><td>| edwardswt@cit.nih.gov</td><td>| Cloud Computing Services Officer</td>
            </tr>
            <tr>
                <td>Henrique Ludwig</td><td>| ludwighd@cit.nih.gov</td><td>| Cloud Computing Services Officer</td>
            </tr>          
            <tr>
                <td>Warren Mattocks</td><td>| mattockswa@cit.nih.gov</td><td>| Cloud Computing Services Officer</td>
            </tr>
            <tr>
                <td colspan="3"><h6><b>National Heart Lung and Blood Institute (NHLBI)</b></h6></td>
            </tr>
            <tr>
                <td>Dr. Nick Asendorf</td><td>| asendorfna@nhlbi.nih.gov</td><td>| Scientific Information Director</td>
            </tr>
            <tr>
                <td>Robyn Wyrick</td><td>| wyrickrv@nhlbi.nih.gov</td><td>| System Administrator and Application Developer</td>
            </tr>
            <tr>
                <td colspan="3"><h6><b>National Institutes of Aging (NIA)</b></h6></td>
            </tr>
            <tr>
                <td>Dr. Faraz Faghri</td><td>| faraz.faghri@nih.gov</td><td> | Computer Science Lead Scientist, Center for Alzheimer's and Related</td>
            </tr>
            <tr>
                <td>Dr. Michael Nalls</td><td>| nallsm@nih.gov</td><td>| Project Lead, Advanced Analytics, Center for Alzheimer's and Related Dementias</td>
            </tr>
            <tr>
                <td colspan="3"><h6><b>National Institutes of Neurological Disorders and Stroke (NINDS)b></h6></td>
            </tr>
            <tr>
                <td>Linpei Fan</td><td>| linpei.fan@nih.gov</td><td>| Program Officer, Informatics Management Section</td>
            </tr>
        </table>
    </div>
    </div>
    <!-- end contact acknowledge tab-->
    <!-- admin tool tab-->
    <div id="tabs-adminTool">
        <div class="tabsContainer">
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
                <!-- <th class="filterhead"></th> --><!-- API Keys -->
                <!-- <th class="filterhead"></th>--><!-- LLMs Permitted -->
                <th class="filterhead dtDateCol"></th><!--Accepted Date -->
                <th class="filterhead dtDateCol"></th><!--Last Logon Date -->
                <th class="filterhead"></th><!--Is Active -->
                <th class="filterhead"></th><!--Is In Whitelist -->
            </tr>
            <tr>
                <th class="select-checkbox"></th><!--checkbox -->
                <th class="dtNameCol"></th><!--Name -->
                <th class="dtEmailCol"></th><!--Email -->
                <th style="width: 10%;"></th><!--Role -->
                <th style="width: 10%;"></th><!--IC -->
                <th style="width: 10%;"></th><!--Is Admin -->
                <!-- <th></th> --><!-- API Keys -->
                <!-- <th></th> --><!-- LLMs Permitted -->
                <th></th><!--Accepted Date -->
                <th></th><!--Last Logon Date -->
                <th></th><!--Is Active -->
                <th></th><!--Is In Whitelist -->
            </tr>
            </thead>
            </table>
        </div>
        </div>
    </div>
    <!-- admin tool tab-->
</div> <!--end tab-->
</div> <!-- end the Container-fluid -->

<div class="waiting-indicator" style="display: none;">
    <img src="images/Ripple-1s-59px.gif" alt="Loading...">
</div>


<script>
    document.getElementById('toggleMenu').addEventListener('click', function() {
        document.querySelector('.menu').classList.toggle('active');
    });
    var chatId = <?php echo json_encode(isset($_GET['chat_id']) ? $_GET['chat_id'] : null); ?>;
    var user = <?php echo json_encode(isset($user) ? $user : null); ?>;

    var isAdminUser = <?php if (isAdminUser($_SESSION['user_data']['userid'])) echo "true"; else echo "false"; ?>;
    if (isAdminUser) {
        $("li#adminToolTabList").show();
    } else {
        $("li#adminToolTabList").hide();
    }
    $(document).ready(function(){
        $( "#tabs" ).tabs().show();
        
        $( "#tabs" ).tabs().bind("click", function(event) {
            if (event.target.id == "adminToolAnchor") {
                if (!$.fn.DataTable.isDataTable('#usersTable')) {
                    loadUsers();
                }
            }
        });


        $(".ui-tabs-anchor").click(function(){
            //if ($(this).text() != "My Chat") {
            if($(this).attr("id") != "chatAnchor"){
                $("#tabs-chat").attr('style', 'display: none !important');
            } else {
                $("#tabs-chat").removeAttr("style");
            }
        });

        $('#attachmentIcon').click(function() {
            $("input[type='file']").click();
        });
        if ($(".current-chat").length > 0) {
            var scrollTopPos = ($(".current-chat").position().top - $('.left-nav-chat-list').position().top);
            console.log("current chat position"+ scrollTopPos);
            $('.left-nav-chat-list').animate({
                scrollTop: !isScrolledIntoView($('.current-chat')) ? scrollTopPos : 0
            }, 2000);
        }

        $('#modelQIcon, #temperatureQIcon, #attachmentIcon').tooltip({
            html : true,
            placement : "top",
        });
        $('.edit-icon, .delete-icon, #printButton').tooltip({
            html : true,
            placement : "bottom",
        });

    }); // end $(document).ready()
    document.addEventListener('DOMContentLoaded', (event) => {
        hljs.highlightAll();
    });
    
function printChat() {
    window.print();
}

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

</body>
</html>

