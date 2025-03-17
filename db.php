<?php
// db.php

// Parse the configuration file
$fn = '/var/lib/chat/chat_config.ini';
$config = parse_ini_file($fn,true);
#if (file_exists($fn)) echo "got the file: $fn\n";
#else echo "don't have the file: $fn\n";

#print_r($config);

// Get the database configuration from the config array
$host = $config['database']['host'];
$dbname = $config['database']['dbname'];
$username = $config['database']['username'];
$password = trim($config['database']['password'], '"'); // trim the quotes around the password

#die( "INFO: " . $host . "\n" . $dbname . "\n" . $username . "\n" . $password . "\n\n\n");

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

function createGUID() {    
    if (function_exists('com_create_guid') === true) { 
        return trim(com_create_guid(), '{}');
    }

    return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', 
        mt_rand(0, 65535), mt_rand(0, 65535), 
        mt_rand(0, 65535), mt_rand(16384, 20479), 
        mt_rand(32768, 49151), mt_rand(0, 65535), 
        mt_rand(0, 65535), mt_rand(0, 65535));
}


// Create a new chat in the database with the given user, title, and summary
function create_chat($user, $title, $summary, $deployment, $document_name, $document_text) {
    error_log("db.php create_chat deployment line 47: ".$deployment);
    global $pdo;
    $guid = createGUID();
    $guid = str_replace('-','',$guid);
    $temperature= $_SESSION['temperature'];
    $stmt = $pdo->prepare("INSERT INTO chat (id, user, title, summary, deployment, temperature, document_name, document_text, timestamp) VALUES (:id, :user, :title, :summary, :deployment, :temperature, :document_name, :document_text, NOW())");
    $stmt->execute(['id' => $guid, 'user' => $user, 'title' => $title, 'summary' => $summary, 'deployment' => $deployment, 'temperature'=>$temperature, 'document_name' => $document_name, 'document_text' => $document_text]);
    return $guid;
    #return $pdo->lastInsertId();
}

// Create a new exchange in the database with the given chat ID, prompt, and reply
function create_exchange($chat_id, $prompt, $reply) {
    global $pdo;
    $deployment = $_SESSION['deployment'];
    $temperature= $_SESSION['temperature'];
    $stmt = $pdo->prepare("INSERT INTO exchange (chat_id, deployment, temperature, prompt, reply, timestamp) VALUES (:chat_id, :deployment, :temperature, :prompt, :reply, NOW())");
    $stmt->execute(['chat_id' => $chat_id, 'deployment' => $deployment, 'temperature'=>$temperature, 'prompt' => $prompt, 'reply' => $reply]);
    return $pdo->lastInsertId();
}

// Get all exchanges for a given chat ID from the database, ordered by timestamp
function get_all_exchanges($chat_id, $user) {
    #echo "in get_all_exchanges\n";
    global $pdo;
    //*
    $sql = "SELECT e.* FROM exchange AS e 
        JOIN chat AS c ON c.id = e.chat_id 
        WHERE c.user = :user AND e.chat_id = :chat_id
        AND c.deleted = 0
        AND e.deleted = 0
        AND e.prompt IS NOT NULL
        AND e.reply IS NOT NULL
        ORDER BY e.timestamp ASC
        ";

    #echo $sql . "\n";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['chat_id' => $chat_id, 'user' => $user]);
    $output = $stmt->fetchAll(PDO::FETCH_ASSOC);
    #echo "this is the output: " . print_r($output,1) . "\n";
    return $output;
}

// Get all chats for a given user from the database, ordered by timestamp
function get_all_chats($user) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM chat WHERE user = :user AND deleted = 0 ORDER BY timestamp DESC");
    $stmt->execute(['user' => $user]);
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $output = [];
    foreach($rows as $r) {
        #echo "<pre>".print_r($r,1)."</pre>";
        $output[$r['id']] = $r;
    }
    return $output;
    #return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Verify that there is a chat at this id for this user
function verify_user_chat($user, $chat_id) {
    global $pdo;
    if (empty($chat_id)) return true; 
    
    $stmt = $pdo->prepare("SELECT COUNT(*) AS count FROM chat WHERE user = :user AND id = :chat_id");
    $stmt->execute(['chat_id' => $chat_id, 'user' => $user]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $output = ($result[0]['count'] > 0) ? true : false;
    return $output;
}

// Update the deployment in the database
function update_deployment($user, $chat_id, $deployment) {
    global $pdo;

    if (!verify_user_chat($user, $chat_id)) {
        die("unauthorized");
    }
    
    // prepare a sql statement to update the deployment of a chat where the id matches the $chat_id
    $stmt = $pdo->prepare("update chat set deployment = :deployment where id = :id");
    $stmt->execute(['deployment' => $deployment, 'id' => $chat_id]);
}

// Update the temperature in the chat table
function update_temperature($user, $chat_id, $temperature) {
    global $pdo;

    if (!verify_user_chat($user, $chat_id)) {
        die("unauthorized");
    }
    
    // prepare a sql statement to update the deployment of a chat where the id matches the $chat_id
    $stmt = $pdo->prepare("update chat set temperature = :temperature where id = :id");
    $stmt->execute(['temperature' => $temperature, 'id' => $chat_id]);
}

// Update the document in the database
function update_chat_document($user, $chat_id, $deployment, $document_name, $document_type, $document_text) {
    error_log("db.php update_chat_document deployment line 146: ".$deployment);
    global $pdo;

    if (!verify_user_chat($user, $chat_id)) {
        die("unauthorized");
    }
    
    // prepare a sql statement to update the deployment of a chat where the id matches the $chat_id
    $stmt = $pdo->prepare("update chat set deployment = :deployment, document_name = :document_name, document_type = :document_type, document_text = :document_text where id = :id");
    $stmt->execute(['deployment' => $deployment, 'document_name' => $document_name, 'document_type' => $document_type, 'document_text' => $document_text, 'id' => $chat_id]);
}

// Check if a user with the given userid exists in the users table
function user_exists($userid, $userEmail) {
    global $pdo;

    try {
        // Prepare the SQL statement to check if the user exists
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE userid = :userid or email = :userEmail");
        
        // Execute the statement with the provided userid
        $stmt->execute(['userid' => $userid, 'userEmail' => $userEmail]);
        
        // Fetch the result
        $count = $stmt->fetchColumn();
        
        // Return true if the user exists, false otherwise
        return $count > 0;
    } catch (PDOException $e) {
        error_log('Failed to check if user exists: ' . $e->getMessage());
        return false;
    }
}
//update user ic and email if ic changed or ic didn't catched before
function update_user($userData) {
    global $pdo;
    $userid = $userData['userid'];
    $userIc = $userData['department']; 
    $userEmail = $userData['email'];
    $first_name = $userData['first_name'];
    $last_name = $userData['last_name'];
    $preferred_username = $userData['preferred_username'];
    $stmt = $pdo->prepare("update users set ic = :ic1, email = :email1, first_name = :first_name, last_name = :last_name, 
                                  preferred_username = :preferred_username, userid = :userid1, updated_at = NOW() 
                            where (userid = :userid2 or email = :email2) and (ic = '' or ic != :ic2)");
    $stmt->execute(['ic1' => $userIc, 
                    'email1' => $userEmail,
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'preferred_username' => $preferred_username,
                    'userid1' => $userid, 
                    'userid2' => $userid,
                    'email2' => $userEmail,
                    'ic2' => $userIc                   
                   ]);
}

function update_user_last_logon($userid) {
    global $pdo;
    $stmt = $pdo->prepare("update users set last_logon = NOW(), is_active = true where userid = :userid");
    $stmt->execute(['userid' => $userid]);
}


// Insert user data into the users table
function insert_user_data($first_name, $last_name, $preferred_username, $userid, $role, $ic, $email) {
    global $pdo;

    // Check if the user data exists in the session
    if (empty($first_name) || empty($last_name) || empty($preferred_username) || empty($userid) || empty($role) ) {
        error_log("User data not found in session.");
        return false;
    }

    $pilot_api_keys = ''; // Placeholder, can be modified based on your logic
    $llms_permitted = ''; // Placeholder, can be modified based on your logic

    try {
        // Prepare the SQL statement to insert the user data
        $stmt = $pdo->prepare("INSERT INTO users (first_name, last_name, preferred_username, userid, role, ic, pilot_api_keys, llms_permitted, updated_at, email, last_logon, is_active) 
                                VALUES (:first_name, :last_name, :preferred_username, :userid, :role, :ic, :pilot_api_keys, :llms_permitted, NOW(), :email, NOW(), true)");

        // Execute the statement with the session data
        $stmt->execute([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'preferred_username' => $preferred_username,
            'userid' => $userid,
            'role' => $role,
            'ic' => $ic,
            'pilot_api_keys' => $pilot_api_keys,
            'llms_permitted' => $llms_permitted,
            'email' => $email
        ]);

        return true; // Indicate success
    } catch (PDOException $e) {
        error_log('Failed to insert user data: ' . $e->getMessage());
        return false;
    }
}

if (isset($_POST['callInsertUserData'])) {
    error_log("Calling function insert_user_data().");
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $preferred_username = $_POST['preferred_username'];
    $userid = $_POST['userid'];
    $role = $_POST['selectedRole']; 
    $ic = $_POST['ic'];
    $email = $_POST['email'];
    $returnData = insert_user_data($first_name, $last_name, $preferred_username, $userid, $role, $ic, $email);
    update_registration($userid, $email);
    echo $returnData;
}

function get_all_users() {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM users");
    $stmt->execute([]);
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $output = [];
    foreach($rows as $r) {
        $output[] = $r;
    }
    #error_log("db.php->get_all_users() row: " . print_r($output,1));
    return $output;
}

function get_all_active_users() {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM users where is_active = true");
    $stmt->execute([]);
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $output = [];
    foreach($rows as $r) {
        $output[] = $r;
    }
    #error_log("db.php->get_all_active users() row: " . print_r($output,1));
    return $output;
}

function isAdminUser($userid) {
    global $pdo;
    try {
        $stmt = $pdo->prepare("SELECT count(*) FROM users WHERE userid = :userid and is_admin = true");
        $stmt->execute(['userid' => $userid]);
        $count = $stmt->fetchColumn();
        return $count > 0;
    } catch (PDOException $e) {
        error_log('Failed to check if user is an admin user: ' . $e->getMessage());
        return false;
    }

}
if (isset($_POST['callGetUsersData'])) {
    error_log("Calling function get_all_active_users().");
    //$returnData = get_all_active_users();
    $returnData = get_all_active_users();
    echo json_encode(array($returnData));
}

function update_admin_user($userid, $isAdmin) {
    global $pdo;
    
    // prepare a sql statement to update the deployment of a chat where the id matches the $chat_id
    $stmt = $pdo->prepare("update users set is_admin = :is_admin where userid = :userid");
    $stmt->execute(['is_admin' => $isAdmin, 'userid' => $userid]);
}

if (isset($_POST['callUpdateAdminUser'])) {
    error_log("Calling function update_admin_user().");
    $userid = $_POST['userid'];
    $isAdmin = $_POST['isAdmin']; 
    update_admin_user($userid, $isAdmin);
}

function get_new_title_status($user, $chat_id) {
    global $pdo;
    if (empty($chat_id)) return false;
    
    $stmt = $pdo->prepare("SELECT new_title FROM chat WHERE user = :user AND id = :chat_id");
    $stmt->execute(['chat_id' => $chat_id, 'user' => $user]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result[0]['new_title'];
}

// Update the chat title in the database
function update_chat_title($user, $chat_id, $updated_title) {
    global $pdo;
    if (!verify_user_chat($user, $chat_id)) {
        die("Unauthorized access.");
    }
    // Prepare a SQL statement to update the title
    $stmt = $pdo->prepare("UPDATE chat SET title = :title, new_title = :new_title WHERE id = :id");
    $stmt->execute(['title' => $updated_title, 'new_title' => '0', 'id' => $chat_id]);
}

function totalActiveUserCount() {
    global $pdo;
    $count = 0;
    try {
        $stmt = $pdo->prepare("SELECT count(*) FROM users where is_active = true");
        $stmt->execute();
        $count = $stmt->fetchColumn();       
    } catch (PDOException $e) {
        error_log('Failed to check if user is an admin user: ' . $e->getMessage());
    }
    #error_log("db.php -> totalActiveUserCount: ".$count);
    return $count;
}

function isActiveUser($userid, $userEmail) {
    global $pdo;
    $isActive = true;
    try {
        $stmt = $pdo->prepare("SELECT is_active FROM users where userid = :userid or email = :email");
        $stmt->execute(['userid' => $userid,
                        'email' => $userEmail]);
        $isActive = $stmt->fetchColumn();       
    } catch (PDOException $e) {
        error_log('Failed to check if user is an admin user: ' . $e->getMessage());
    }
    #error_log("db.php -> isActiveUser ".$isActive);
    return $isActive;
}

function create_registration($first_name, $last_name, $user_id, $email) {
    global $pdo;
    error_log("Insert data into registration table");
    try {
        // Prepare the SQL statement to insert the registration data
        $stmt = $pdo->prepare("INSERT INTO registration (first_name, last_name, user_id, email, registration_date, is_moved_to_users) 
                                VALUES (:first_name, :last_name, :user_id, :email, NOW(), false)");

        // Execute the statement with the session data
        $stmt->execute([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'user_id' => $user_id,
            'email' => $email
        ]);

        return true; // Indicate success
    } catch (PDOException $e) {
        error_log('Failed to insert registration data: ' . $e->getMessage());
        return false;
    }
}

// Update the chat title in the database
function update_registration($userid, $userEmail) {
    global $pdo;
    error_log("db.php -> update_registration()");
    // Prepare a SQL statement to update the registration
    $stmt = $pdo->prepare("UPDATE registration SET is_moved_to_users = true, registration_date = NOW() WHERE user_id = :user_id or email = :email");
    $stmt->execute(['user_id' => $userid,
                    'email' => $userEmail]);
}

function isRegistered($userid, $userEmail) {
    global $pdo;
    $count = 0;
    $isRegistered = false;
    try {
        $stmt = $pdo->prepare("SELECT count(*) FROM registration where (user_id = :userid or email = :email) and is_moved_to_users = 0");
        $stmt->execute(['userid' => $userid,
                        'email' => $userEmail]);
        $count = $stmt->fetchColumn();       
    } catch (PDOException $e) {
        error_log('Failed to check if user is registered: ' . $e->getMessage());
    }
    if ($count > 0){
        $isRegistered = true;
    }
    error_log("db.php -> isRegistered ".$isRegistered);
    return $isRegistered;
}

function countRegistrationForAccess() {
    global $pdo;
    $count = 0;
    try {
        $stmt = $pdo->prepare("SELECT count(*) FROM registration where is_moved_to_users = false");
        $stmt->execute();
        $count = $stmt->fetchColumn();       
    } catch (PDOException $e) {
        error_log('Failed to check if user is registered: ' . $e->getMessage());
    }

    error_log("db.php -> countRegistrationForAccess ".$count);
    return $count;
}



