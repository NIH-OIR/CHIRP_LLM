<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include necessary libraries
require_once 'lib.required.php';

require_once 'piiDetection.php';

// Get the chat_id if present
$chat_id = isset($_REQUEST['chat_id']) ? $_REQUEST['chat_id'] : '';

// Create a new chat session if no chat ID is provided
if (empty($chat_id)) {
    $chat_id = $new_chat_id = create_chat($user, 'New Chat', '', $_SESSION['deployment'], '', '');
}

// Check if there's a request to remove the uploaded file
if (isset($_GET['remove']) && $_GET['remove'] == '1') {

    // Clear the session variables
    unset($_SESSION['document_text']);
    unset($_SESSION['document_name']);
    update_chat_document($user,$chat_id,'','','');

    // Redirect to the main page with chat_id
    header('Location: index.php?chat_id='.urlencode($chat_id));
    exit;

}

if (isset($_FILES['uploadDocument'])) {
    $file = $_FILES['uploadDocument'];
    #echo "1 - <pre>".print_r($_FILES,1)."</pre>"; die("got here");

    $mimeType = mime_content_type($file['tmp_name']);
    if (strpos($mimeType, 'image/') === 0) {
        // Handle image uploads
        $base64Image = local_image_to_data_url($file['tmp_name'], $mimeType);
        // Save the base64 image to the session and the database
        $_SESSION['document_text'] = $base64Image;
        $_SESSION['document_type'] = $mimeType;
        $_SESSION['document_name'] = basename($file['name']);
        update_chat_document($user, $chat_id, $_SESSION['document_name'], $_SESSION['document_type'], $_SESSION['document_text']);
    } else {

        // Ensure that your script is executable and has the correct shebang line
        #$command = escapeshellcmd(__DIR__."/venv/bin/python ".__DIR__."/parser_multi.py \"".$file['tmp_name']."\" \"".$file['name']."\"") . " 2>&1";
        $command = "python3 ".$_SERVER['DOCUMENT_ROOT']."/parser_multi.py \"".$file['tmp_name']."\" \"".$_SERVER['DOCUMENT_ROOT']."/".$file['name']."\" 2>&1";

        $output = shell_exec($command);
        #echo "2 - <pre>".print_r($output,1)."</pre>"; die("got here");

        if (strpos($output, 'ValueError') === false) {
            
            $redactedOutput = piiDetection($output);

            // Store the text and the original filename in session variables
            $_SESSION['document_text'] = $redactedOutput;
            $_SESSION['document_type'] = $mimeType;
            $_SESSION['document_name'] = basename($file['name']);

            #echo "3 - <pre>".print_r($_SESSION,1)."</pre>"; die("got here");
            $documnet_text = mb_convert_encoding($_SESSION['document_text'], 'UTF-8', 'UTF-8');
            update_chat_document($user, $chat_id, $_SESSION['document_name'], $_SESSION['document_type'], $documnet_text);

        } else {
            $_SESSION['error'] = 'There was an error parsing the uploaded document. Please be sure that it is the correct file type. If you have further problems, please contact support.';
        }
    }
    // Redirect back to the index page
    header('Location: index.php?chat_id='.urlencode($chat_id));

} else {
    header('Location: index.php?chat_id='.urlencode($chat_id));
    // Handle no file uploaded scenario
}

// Prevent accidental output by stopping the script here
exit;

// Function to convert a local image to a base64 data URL
function local_image_to_data_url($image_path, $mimeType)
{
    // Fallback to application/octet-stream if MIME type is not set
    if ($mimeType === null) {
        $mimeType = "application/octet-stream";
    }
    // Open the image file in binary mode and encode it to base64
    $base64_encoded_data = base64_encode(file_get_contents($image_path));
    // Return the data URL with the appropriate MIME type
    return "data:$mimeType;base64,$base64_encoded_data";
}
