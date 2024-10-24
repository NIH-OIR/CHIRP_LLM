<?php

$_SESSION['splash'] = true;
$error = '';

#file_put_contents("mylog.log", "\$_SESSION in Splash.php BEFORE changes = ".print_r($_SESSION,1)."\n\n\n", FILE_APPEND);
#error_log("\$_SESSION in Splash.php BEFORE changes = ".print_r($_SESSION,1));

if (!empty($_SESSION['user_data']['userid']) && (empty($_SESSION['authorized']) || $_SESSION['authorized'] !== true)){
    $error = '<br>The user ' . $_SESSION['user_data']['userid'] . " is not athorized to use this tool<br>\n";
    $_SESSION['splash'] = false;
}

#file_put_contents("mylog.log", "\$_SESSION in Splash.php AFTER changes = ".print_r($_SESSION,1)."\n\n\n", FILE_APPEND);
#file_put_contents("mylog.log", "- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - \n\n\n\n\n\n\n", FILE_APPEND);

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['app']['app_title']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.v1.02.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.14.0/themes/base/jquery-ui.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.14.0/jquery-ui.min.js"></script>
    
</head>
<body>
    <div class="container">
        <div class="header row align-items-center">
            <!-- <div class="col-sm-4">
            <img src="images/<?php echo $config['app']['app_logo']; ?>" class="logo" alt="<?php echo $config['app']['app_logo_alt']; ?>">
            </div>
            <div class="col-sm-4 text-center">
                <h1><?php echo $config['app']['app_title']; ?></h1>
            </div> -->
            <div class="col d-flex justify-content-center" style="padding-left: 3px;">
                <img width="100%" src="images/chirp-logo.png" alt="Chirp Log" title="Chirp">'
            </div>
            <div class="col-sm-2 text-end">
<?php

if (!empty($_SESSION['user_data']['name'])) echo '<p id="username">Hello '.$_SESSION['user_data']['name'].'</p>'."\n";
?>
            </div>
        </div>
        <div id="roleSelectionDlg" style="display:hidden">
            <div>
            Welcome to Chirp (Chat for IRP), a secure Large Language Models (LLMs) Environment Pilot.<br>
            Please indicate your main responsibility (functional role) at NIH:</br>
            <table style="width: 80%;text-align: center;"><tr>
            <td style="width: 33%;">
                <label for="administrative">Administrative</label>
                <input type="radio" id="administrative" name="userRole" value="Administrative">
            </td>
            <td >
                <label for="research">Research</label>
                <input type="radio" id="research" name="userRole" value="Research">
            </td>
            <td >
                <label for="other">Other</label>
                <input type="radio" id="other" name="userRole" value="Other">
            </td>
            </tr></table>
            <br>
            By clicking the “Accept” button, you agree to allow us to collect your data entries (prompts) and responses from each LLM tool for aggregated usage analysis and statistical reporting purposes. If you do not wish to participate, click “Cancel” to be removed from this pilot.
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 columns">
                <div>
                    <p class="newchat" style="text-align: center;">
                    Chirp is a secure chatbot enabling NIH staff to use generative AI for their day-to-day work.
                    </p>
                </div>
                <div id="scrollContent">
                    <p>Chirp stores all data locally in the NIH data center and uses a secure NIH STRIDES cloud account to host AI models. This enables staff to use NHLBI Chat for sensitive data workloads including:</p>
                    <ul>
                        <li>De-identified and anonymized clinical data</li>
                        <li>Pre-decisional and draft policy</li>
                        <li>Nonpublic data including scientific data and draft manuscripts</li>
                    </ul>
                    <p>
                        Currently, PII and identifiable clinical data is not permitted in Chirp. Please us de-identified and anonymized data. We are actively working with HHS security to enable this use-case.
                    </p>
                    <p>
                        Please note that these use cases are specific to Chirp, which is different than public AI tooling like ChatGPT, Meta.AI, and Google Gemini. When using any public AI tooling, please follow OCIO Guidance, which prohibits these sensitive workloads. Unlike the public tooling, data entered into Chirp is not shared with Microsoft or OpenAI. This enables the sensitive workloads described above.
                    </p>
                    <p>When using Chirp, you must abide by these following guidelines:</p>
                    <ol type="1">
                        <li>
                            <b>Human Oversight:</b> Always review and validate outputs generated by Chirp. Do not base decision-making or policymaking solely on generated outputs. Do not include any patient identifiable information with genomic data.
                        </li>
                        <li>
                            <b>Limitations and Biases:</b> AI models are only as powerful as its training data. Generative AI may generate biased results and may not always generate accurate responses. Generative AI may perform poorly in certain applications. Always validate outputs generated by Chirp.
                        </li>
                        <li>
                            <b>Ethical use:</b> Follow HHS and NIH policies including <a target="_blank" href="https://wiki.ocio.nih.gov/wiki/index.php/NIH_Artificial_Intelligence_(AI)_Cybersecurity_Guidance">OCIO Guidance</a>, 
                            <a target="_blank" href="https://intranet.hhs.gov/policy/hhs-policy-securing-artificial-intelligence-technology">HHS policy for Securing Artificial Intelligence (AI) Technology</a>, 
                            <a target="_blank" href="https://grants.nih.gov/grants/guide/notice-files/NOT-OD-23-149.html">NOT-OD-23-149 prohibiting Generative AI for NIH Peer Review</a>, and any specific guidance related to your intended use case., and any specific guidance related to your intended use case.
                        </li>
                        <li> 
                            <b>No PII:</b> PII and identifiable clinical data is currently not permitted in Chirp. Only use de-identified and anonymized data. This includes but not limited to genomic data, passport information, social security numbers, driver's license numbers, Military status, bank account information, photographic identifiers, & date of birth.
                        </li>
                        <li> 
                            <b>Training Data:</b> Chirp uses commercial models. It is not fine-tuned on NIH, OD, or biomedical topics. Do not expect Chirp to have any internal knowledge of the NIH or OD.
                        </li>
                    </ol>
                    <p>
                        You are accessing a U.S. Government information system, which includes (1) this computer, (2) this computer network, (3) all computers connected to this network, and (4) all devices and storage media attached to this network or to a computer on this network. This information system is provided for U.S. Government-authorized use only.
                    </p>
                    <p>
                        Unauthorized or improper use of this system may result in disciplinary action, as well as civil and criminal penalties.
                    </p>
                    <p>
                        By using this information system, you understand and consent to the following.
                    </p>
                    <p>
                        You have no reasonable expectation of privacy regarding any communications or data transiting or stored on this information system. At any time, and for any lawful Government purpose, the government may monitor, intercept, record, and search and seize any communication or data transiting or stored on this information system.
                    </p>
                    <p>
                        Any communication or data transiting or stored on this information system may be disclosed or used for any lawful Government purpose.
                    </p>
<?php

//if (!empty($error)) echo '<span style="color:red">'.$error.'</span></p>'."\n";

//echo $config['app']['disclaimer_text'];

?>                


                </div>
                <div class="footer" style="margin-top: 10px;">
                    <p style="margin-bottom:5px;">
                        <a title="Open the training video in a new window" href="<?php echo $config['app']['video_link']; ?>" target="_blank">Training Video</a><br>
                        <span>By clicking on Proceed you are agreeing to the above terms and conditions.</span>
                    </p>
                    <p id="proceedContainer" class="newchat" style="text-align: center;display: inline-block;background-color: #f8f9fa;">
                    <a title="Click here to go to proceed" href="index.php" id="proceedLink" >Proceed</a></p>
                    <!-- Chat messages will be added here -->
                    <p><a title="Open the disclosure information in a new window" href="<?php echo $config['app']['disclosure_link']; ?>" target="_Blank" title="Vulnerability Disclosure">Vulnerability Disclosure</a></p>
                </div>
            </div>
            <div class="col-md-2 columns">
            </div>
        </div>
    </div>
</body>
</html>
<script>
    $(document).ready(function(){
        $('#roleSelectionDlg').dialog({
            width: 960,
            autoOpen: false,
            title: '',
            open: function( event, ui ) {
                $(".ui-dialog-titlebar-close").hide();
                $("input[type='radio']").each(function(){
                    $(this).blur();
                });
            },
            buttons: [
                {
                    text: "Accept",
                    click: function() {
                        var selectedRole = $("input[name=userRole]:checked").val();
                        var firstName = "<?php if (!empty($_SESSION['user_data']['first_name'])) echo $_SESSION['user_data']['first_name']; else echo ""; ?>";
                        var lastName = "<?php if (!empty($_SESSION['user_data']['last_name'])) echo $_SESSION['user_data']['last_name']; else echo ""; ?>";
                        var preferredUsername = "<?php if (!empty($_SESSION['user_data']['preferred_username'])) echo $_SESSION['user_data']['preferred_username']; else echo ""; ?>";
                        var userid = "<?php if (!empty($_SESSION['user_data']['userid'])) echo $_SESSION['user_data']['userid']; else echo ""; ?>";
                        var ic = "<?php if (!empty($_SESSION['user_data']['department'])) echo $_SESSION['user_data']['department']; else echo ""; ?>";
                        var email = "<?php if (!empty($_SESSION['user_data']['email'])) echo $_SESSION['user_data']['email']; else echo ""; ?>";

                        $.ajax({
                            url: "db.php",
                            type: 'POST',
                            data: {"callInsertUserData": "1", 
                                    "selectedRole": selectedRole,
                                    "first_name": firstName,
                                    "last_name": lastName,
                                    "preferred_username": preferredUsername,
                                    "userid": userid,
                                    "ic": ic,
                                    "email": email
                                  },
                            success: function(response) {                              
                                if (response) {
                                    // console.log("insert user data ajax response: "+response);
                                    // $("#proceedLink")[0].click();
                                }
                            }
                        }); 
                        
                        $( this ).dialog( "close" );
                    }
                },
                {
                    text: "Cancel",
                    click: function() {
                        $( this ).dialog( "close" );
                    }
                },
            ]
        });
        var userExist = <?php isUserExist($_SESSION['user_data']); ?>;
        // console.log("userExist: "+userExist);
        if (!userExist) {
            $('#roleSelectionDlg').dialog("open");

            $("#proceedLink").removeAttr("href").addClass("proceedDisabled");
            $('div#scrollContent').on('scroll', function() {
                var elem = $(this);
                if (elem.scrollTop() > 0 && 
                    ((elem[0].scrollHeight - elem.scrollTop()) <= (elem.outerHeight() + 1))) {
                    console.log("scroll to the bottom");
                    $("#proceedLink").prop("href", "index.php").removeClass("proceedDisabled").addClass("proceedEnabled");
                }
            });
        } 

    });
</script>
