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
            <div class="col-sm-4">
            <img src="images/<?php echo $config['app']['app_logo']; ?>" class="logo" alt="<?php echo $config['app']['app_logo_alt']; ?>">
            </div>
            <div class="col-sm-4 text-center">
                <h1><?php echo $config['app']['app_title']; ?></h1>
            </div>
            <div class="col-sm-4 text-end">
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
            <div class="col-md-2 columns">
            </div>
            <div class="col-md-8 columns">
                <div>
                    <p class="newchat" style="text-align: center;">
                    <?php echo $config['app']['help_text1']; ?>
<?php

if (!empty($error)) echo '<span style="color:red">'.$error.'</span></p>'."\n";

echo $config['app']['disclaimer_text'];

?>                    

                    <p class=""><a title="Open the training video in a new window" href="<?php echo $config['app']['video_link']; ?>" target="_blank">Training Video</a></p>
                    <p class="newchat" style="text-align: center;">
                    <a title="Click here to go to authentication" href="index.php" id="proceedLink">Proceed</a></p>
                    <!-- Chat messages will be added here -->
                </div>
                <div class="footer">
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
                event.preventDefault();
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

                        $.ajax({
                            url: "db.php",
                            type: 'POST',
                            data: {"callInsertUserData": "1", 
                                    "selectedRole": selectedRole,
                                    "first_name": firstName,
                                    "last_name": lastName,
                                    "preferred_username": preferredUsername,
                                    "userid": userid
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
        var userExist = <?php if (user_exists($_SESSION['user_data']['userid'])) echo "true"; else echo "false"; ?>;
        console.log("userExist: "+userExist);
        if (!userExist) {
            $('#roleSelectionDlg').dialog("open");
        } 

    });
</script>
