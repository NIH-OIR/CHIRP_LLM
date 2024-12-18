<?php
require_once 'get_config.php';
require_once 'process_registration.php';

$availableSpots = availableSpots();
session_start();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
session_unset();

// Finally, destroy the session.
session_destroy();
?>
<!DOCTYPE html>
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
    <div class="row header d-flex align-items-center" style="max-height: 102px;"> <!-- Header Row -->
        <!-- <div class="col d-flex justify-content-start">
            <img src="images/<?php echo $config['app']['app_logo']; ?>" class="logo" alt="<?php echo $config['app']['app_logo_alt']; ?>">
        </div> -->
        <div class="col d-flex col-1"></div>
        <div class="col d-flex justify-content-center  chirp_header">
            <img class ="chirp_log" src="images/chirp-logo.png" alt="Chirp Log" title="Chirp">'
        </div>
        <div class="col d-flex col-1">          
        </div>
    </div> <!-- End Header Row -->
    <div class="row" style="margin-top:50px;">
        <div class="col-md-2 columns">
        </div>
        <div id="registration" class="col-md-8 columns">
            <h4>Register Now - First Come, First Served!</h4>
            <p>We're excited to have you experience Chirp! Please note that registrations are limited and will be accepted on a first-come, first-served basis. There are <?php echo $availableSpots; ?> available spots now. To secure your spot, make sure to register as soon as possible before the user limit is reached.</p>
            <p id="registrationError" style="color:red;">Error occurs in saving registration information. Please fill out the form and re-submit the form.</p>
            <form id="registrationForm"  method="POST">
                <div class="row">
                    <div class="col-md-2 columns">
                        <label for="first_name">First Name:</label>
                    </div>
                    <div class="col-md-4 columns">
                        <input type="text" id="first_name" name="first_name" required minlength="2" maxlength="50">
                    </div>
                    <div class="col-md-5 columns">
                        <div id="first_name_error" class="error"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 columns">
                        <label for="last_name">Last Name:</label>
                    </div>
                    <div class="col-md-4 columns">
                        <input type="text" id="last_name" name="last_name" required  minlength="2" maxlength="50">
                    </div>
                    <div class="col-md-5 columns">
                        <div id="last_name_error" class="error"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 columns">
                        <label for="user_id">NIH Username:</label>
                    </div>
                    <div class="col-md-4 columns">
                        <input type="text" id="user_id" name="user_id" required minlength="2" maxlength="50" pattern="[a-zA-Z0-9_]+">
                    </div>
                    <div class="col-md-5 columns">
                        <div id="user_id_error" class="error"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 columns">
                        <label for="email">NIH Email:</label>
                    </div>
                    <div class="col-md-4 columns">
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="col-md-5 columns">
                        <div id="email_error" class="error"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 columns"></div>
                    <div class="col-md-2 columns">
                        <input type="button" value="Register" id="regitrationBtn" class ="regitrationBtn"  onclick="submitRegistration()"/>
                    </div>
                    <div class="col-md-2 columns">
                        <input type="button" value="Cancel" id="cancelRegistrationBtn" class ="cancelRegistrationBtn" onclick="cancelRegistration()"/>
                    </div>
                </div>
            </form>
        </div>
        <div id="registrationSuccess" class="col-md-8 columns" >
            <p>Thank you for registering Chirp!<p>
        </div>
        <div id="registrationExist" class="col-md-8 columns" >
            <p>You've registered in Chirp. Registration infomation has been updated.<p>
        </div>
        <div class="col-md-3 columns">
    </div>
<script>
$(document).ready(function(){
    $("#registrationSuccess").hide();
    $("#registrationError").hide();
    $("#registrationExist").hide();

    var reachUserLimit = <?php checkIfReachUserLimit(); ?>;
    if (reachUserLimit) {
        $("#registrationSuccess").append("<p>The user limit in Chirp has been reached. Please visit our site frequently to check if spots are opened.</p>");
    } else {
        $("#registrationSuccess").append('<p>Please visit <a href="index.php">Chirp</a></p>.');
    }

});
function validateForm() {
        // Reset previous error messages
        $('.error').each(function(){
            $(this).text('');
        });

        // Validation flags
        var isValid = true;

        const nameRegex = /^[a-zA-Z\s-]+$/;
        // First Name Validation
        if ($('#first_name').val().trim().length < 2) {
            $('#first_name_error').text('First name must be at least 2 characters long');
            isValid = false;
        } else if (!nameRegex.test($('#first_name').val())) {
            $('#first_name_error').text('Please enter a valid name');
            isValid = false;
        }

        // Last Name Validation
        if ($('#last_name').val().trim().length < 2) {
            $('#last_name_error').text('Last name must be at least 2 characters long');
            isValid = false;
        } else if (!nameRegex.test($('#last_name').val())) {
            $('#last_name_error').text('Please enter a valid name');
            isValid = false;
        }

        // User ID Validation
        const userId = $('#user_id');
        const userIdRegex = /^[a-zA-Z0-9]+$/;
        if ($('#user_id').val().trim().length < 2) {
            $('#user_id_error').text('NIH NED ID must be at least 2 characters long');
            isValid = false;
        } else if (!userIdRegex.test($('#user_id').val())) {
            $('#user_id_error').text('Please enter a valie NIH NED ID');
            isValid = false;
        }

        // Email Validation
        //const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        //const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]*nih\.gov$/;
        const emailRegex = /^[^\s@]+@[^\s@]*nih\.gov$/;
        if (!emailRegex.test($('#email').val())) {
            $('#email_error').text('Please enter a valid NIH email address');
            isValid = false;
        }

        return isValid;

}
function submitRegistration() {
    if (validateForm()) {
        var firstName = $('#first_name').val();
        var lastName = $('#last_name').val();
        var userId = $('#user_id').val();
        var email = $('#email').val();
        // Send an AJAX request to a PHP script to insert registration info
        $.ajax({
            type: "POST",
            url: "process_registration.php",  // PHP script to edit the chat
            data: {
                first_name: firstName,
                last_name: lastName,
                user_id: userId,
                email: email
            },
            success: function(response) {
                if (response == "success") {
                    $("#registration").hide();
                    $("#registrationSuccess").show();
                    var reachUserLimit = <?php checkIfReachUserLimit(); ?>;
                    if (!reachUserLimit) {
                        setTimeout(function() {
                            window.location.href = "/index.php";
                        }, 5000); //after 10 sec it redirects to index page
                    }
                } else if (response == "existed") {
                    $("#registration").hide();
                    $("#registrationExist").show();
                } else if (response == "error") {
                    $("#registrationError").show();
                    cancelRegistration();
                }
            }
        });

    }
}

function cancelRegistration() {
    $('#first_name').val('');
    $('#last_name').val('');
    $('#user_id').val('');
    $('#email').val('');
    $('.error').each(function(){
        $(this).text('');
    });
}
</script>
</body>
</html>

<?php

?>
