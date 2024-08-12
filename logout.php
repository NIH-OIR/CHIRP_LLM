<?php
// Include required files and database connection
require_once 'lib.required.php';

$idToken = $_SESSION['tokens']['id_token']; // Retrieve the ID token from session

// Clear local session and cookies
/*
session_start();
session_unset();
session_destroy();
*/

logout(); 

// header("Location: index.php");
echo "<script>myWin = window.open('','_self'); window.close();</script>";

exit();

