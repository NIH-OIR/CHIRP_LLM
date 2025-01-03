<?php

// Parse the configuration file
$fn = '/var/lib/chat/chat_config.ini';
$config = parse_ini_file($fn,true);

#print_r($config);

// Get the database configuration from the config array
$host = $config['database']['host'];
$dbname = $config['database']['dbname'];
$username = $config['database']['username'];
$password = trim($config['database']['password'], '"');

try {
    // Connect to the database using PDO (PHP Data Objects)
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    
    // Set the PDO error mode to exception to enable error handling
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // If the database connection fails, output an error message
    error_log('Database connection failed: ' . $e->getMessage());
    die('Database connection failed. Please contact the site administrator.');
}

global $pdo;
$stmt = $pdo->prepare("update users set is_active = false where DATEDIFF(NOW(), last_logon) > 14 and is_in_whitelist = false");
$stmt->execute();
error_log("cron.php update user active status");
?>