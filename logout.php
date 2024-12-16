<?php
require_once 'get_config.php';
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
        <div class="col d-flex justify-content-center chirp_header" >
            <img class ="chirp_log" src="images/chirp-logo.png" alt="Chirp Log" title="Chirp">'
        </div>
        <div class="col d-flex col-1">          
        </div>
    </div> <!-- End Header Row -->
    <div class="row" style="margin-top:50px;">
        <div class="col-md-3 columns">
        </div>
        <div class="col-md-6 columns">
            <div style="text-align:center">
                <p>Thank you for using <a id="domainUrl" href="/">CHIRP</a>!</p> 
                <p>Any question, please contact <a href="mailto:CRISPI-LLM@od.nih.gov">CRISPI-LLM@od.nih.gov</a> via email. </p>
            </div>
        </div>
        <div class="col-md-3 columns">
    </div>
</body>
<?php

session_start();
// Unset all session variables
//$_SESSION = array();

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

// header("Location: index.php");
echo "<script>myWin = window.open('','_self'); window.close();</script>";

exit();

?>
