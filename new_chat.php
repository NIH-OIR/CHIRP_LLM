<?php
// Include the database connection file
require_once 'lib.required.php';
require_once 'db.php';

// Check if the user is authenticated (i.e. if the username is not empty)
if (empty($user)) {
    // If the user is not authenticated, output an error message and exit the script
    die("User not authenticated");
}
// $retiredModels = array("azure-llama3", "mistral-nemo", "gemini-1.5-pro");
// $deployment = (empty($_SESSION['deployment']) || in_array($_SESSION['deployment'], $retiredModels)) ? 'azure-gpt4' : $_SESSION['deployment'];
$deployment = $config['azure']['default'];
if (isset($_POST['model'])) {
    $deployment = $_POST['model'];
}
$_SESSION['deployment'] = $deployment;
error_log("new_chat.php selected model: ".$_SESSION['deployment']);
$document_name = $_SESSION['document_name'] = '';
$document_text = $_SESSION['document_text'] = '';

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Create a new chat in the database using the authenticated user's username as the chat's creator
    $newChatId = create_chat($user, 'New Chat', '', $deployment, $document_name, $document_text);
    $_SESSION['deployment'] = $deployment;
    // Return the ID of the new chat as a JSON object to the client
    echo json_encode(['chat_id' => $newChatId]);
}

