<?php
// require_once 'get_config.php';
require_once 'db.php';

error_log("process_registration.php");
if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['user_id']) && isset($_POST['email']) ) {
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $user_id = htmlspecialchars($_POST['user_id']);
    $email = htmlspecialchars($_POST['email']);
    error_log("process_registration.php user_id: ".$user_id);

    if (!$first_name || !$last_name || !$user_id || !$email) {
        die("invalid input");
    }
    
    $response = '';
    if (!isRegistered($user_id, $email)) {
        $is_registration_success = create_registration($first_name, $last_name, $user_id, $email);
        error_log("process_registration.php is_registration_success: ".$is_registration_success);
        if ($is_registration_success) {
            $response = "success";
        } else {
            $response = "error";
        }
    } else {
        update_registration($user_id, $email);
        $response = "existed";
    }
    echo $response;
}

function checkIfReachUserLimit() { //count active users
    global $config;
    if (totalActiveUserCount() < $config['app']['user_count_cap']) {
        echo "false"; 
    } else {
        echo "true";
    }
}


?>