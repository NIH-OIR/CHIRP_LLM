<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include necessary libraries
require_once 'lib.required.php';

require_once 'piiDetection.php';

// Get the chat_id if present
$chat_id = isset($_REQUEST['chat_id']) ? $_REQUEST['chat_id'] : '';

// Check if there's a request to remove the uploaded file
if (isset($_GET['remove']) && $_GET['remove'] == '1') {

    // Clear the session variables
    unset($_SESSION['document_text']);
    unset($_SESSION['document_name']);
    update_chat_document($user,$chat_id,'','');

    // Redirect to the main page with chat_id
    header('Location: index.php?chat_id='.urlencode($chat_id));
    exit;

}

if (isset($_FILES['uploadDocument'])) {
    $file = $_FILES['uploadDocument'];
    #echo "1 - <pre>".print_r($_FILES,1)."</pre>"; die("got here");

    // Ensure that your script is executable and has the correct shebang line
    #$command = escapeshellcmd(__DIR__."/venv/bin/python ".__DIR__."/parser_multi.py \"".$file['tmp_name']."\" \"".$file['name']."\"") . " 2>&1";
    $command = "python3 ".$_SERVER['DOCUMENT_ROOT']."/parser_multi.py \"".$file['tmp_name']."\" \"".$_SERVER['DOCUMENT_ROOT']."/".$file['name']."\" 2>&1";

    $output = shell_exec($command);
    #echo "2 - <pre>".print_r($output,1)."</pre>"; die("got here");

    if (strpos($output, 'ValueError') === false) {
        //scrubber content
        #$scrubberedCommand = "python3 ".$_SERVER['DOCUMENT_ROOT']."/scrubber.py ".json_encode($output);
        #$scrubberedCommand = "python ".$_SERVER['DOCUMENT_ROOT']."/scrubber.py ".json_encode($output);
        #$scrubberedOutput = exec($scrubberedCommand);
        
        $redactedOutput = piiDetection($output);

        // Store the text and the original filename in session variables
        $_SESSION['document_text'] = $redactedOutput;
        $_SESSION['document_name'] = basename($file['name']);

        #echo "3 - <pre>".print_r($_SESSION,1)."</pre>"; die("got here");
        $documnet_text = mb_convert_encoding($_SESSION['document_text'], 'UTF-8', 'UTF-8');
        update_chat_document($user, $chat_id, $_SESSION['document_name'], $documnet_text);

    } else {
        $_SESSION['error'] = 'There was an error parsing the uploaded document. Please be sure that it is the correct file type. If you have further problems, please contact support.';
    }

    // Redirect back to the index page
    header('Location: index.php?chat_id='.urlencode($chat_id));

} else {
    header('Location: index.php?chat_id='.urlencode($chat_id));
    // Handle no file uploaded scenario
}

// Prevent accidental output by stopping the script here
exit;

