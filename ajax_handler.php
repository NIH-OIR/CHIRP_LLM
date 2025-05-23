<?php
// Include required files and database connection
require_once 'lib.required.php';
require_once 'db.php';
require_once 'piiDetection.php';

define('GET_TITLE_DEPLOYMENT',$config['azure']['default']);

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['deployment'] = $_POST['model'];
    #error_log("selected model: ".$_SESSION['deployment']);

    // Get the user's message from the POST data
    $user_message = base64_decode($_POST['message']); // Decode from Base64
    //$user_message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    #$command = "python3 ".$_SERVER['DOCUMENT_ROOT']."/scrubber.py ".json_encode($user_message);
    #$command = "python ".$_SERVER['DOCUMENT_ROOT']."/scrubber.py ".json_encode($user_message);
    #error_log("python command: ".$command);
    #$user_message = exec($command);

    $user_message = piiDetection($user_message);

    #error_log("scrubbed user msg: ".$user_message);
    #print_r($_POST);

    $chat_id = filter_input(INPUT_POST, 'chat_id', FILTER_UNSAFE_RAW);

    $new_chat_id = '';
    $chat_title = '';
    $document_name = $_SESSION['document_name'] ?? ''; // Use null coalescing operator for default values
    $document_text = $_SESSION['document_text'] ?? '';
    #$document_name = (empty($_SESSION['document_name'])) ? '' : $_SESSION['document_name'];
    #$document_text = (empty($_SESSION['document_text'])) ? '' : $_SESSION['document_text'];

    if (empty($chat_id)) {
        // Create new chat session
        $chat_id = $new_chat_id = create_chat($user, 'New Chat', '', $_SESSION['deployment'], $document_name, $document_text);
    }

    #echo "THIS IS THE deployment: " . $deployment . "\n";
    #echo "THIS IS THE config: " . print_r($config,1) . "\n";
    #echo "THIS IS THE session: " . print_r($_SESSION,1) . "\n";
    #echo "THIS IS THE AJAX HANDLER CHAT ID: " . $chat_id . "\n";
    #echo "THIS IS THE AJAX HANDLER NEW CHAT ID: " . $new_chat_id . "\n";

    // Now, if the "new title status" is positive, that means there is a new, default title, 
    // So we should go get a proper, summarized generated chat title, 
    // and the $new_chat_id will tell Javascript to reload the page to show the new title. 
    if (get_new_title_status($user, $chat_id)) {
        $new_chat_id = $chat_id;
    }

    // Get the GPT response to the user's message using the get_gpt_response() function
    $gpt_response = get_gpt_response($user_message, $chat_id, $user);
    #echo "THIS IS THE GPT Response: " . print_r($gpt_response,1); die();

    // Generate a concise chat title if a new chat was created and there were no errors in the GPT response
    if (!empty($new_chat_id) && empty($gpt_response['error'])) {
        if ($gpt_response['deployment'] != 'azure-dall-e-3') {
            $chat_title = generate_chat_title($user_message, $gpt_response['message'], GET_TITLE_DEPLOYMENT);
        } else {
            $chat_title = generate_chat_title($user_message, $gpt_response['revised_prompt'], GET_TITLE_DEPLOYMENT);
        }
        
        #error_log("ajax_handler chat_title: ".$chat_title);
        // Update the chat title in the database if the title was successfully generated
        if ($chat_title !== null) {
            update_chat_title($user, $chat_id, $chat_title);
        }
    }
    #error_log("ajax_handler.php gpt_response message: ".print_r($gpt_response['message'], true));
    $response = [
        'deployment' => $gpt_response['deployment'] ?? null, 
        'error' => $gpt_response['error'] ?? null,
        'gpt_response' => $gpt_response['message'] ?? null, 
        'chat_id' => $chat_id,
        'new_chat_id' => $new_chat_id,
        'chat_title' => $chat_title
    ];

    // Send the JSON-encoded response and exit the script
    echo json_encode($response);
    exit();
}

/**
 * Generates a concise chat title using the Azure API.
 *
 * @param string $user_message The user's initial message in the chat.
 * @param string $gpt_response The GPT's response to the user's message.
 * @param array $active_config The active configuration settings for the API call.
 * @return string|null The generated chat title or null if an error occurs.
 */
function generate_chat_title($user_message, $gpt_response, $config_key) {
    // Prepare the message for generating a chat title
    $msg = [
        ["role" => "system", "content" => "You are an AI assistant that creates concise titles for conversations. The titles should be very short, descriptive, and summarize the main topic in no more than 5 words, ending with no period."],
        ["role" => "user", "content" =>  substringWords($user_message,300)],
        ["role" => "assistant", "content" => substringWords($gpt_response,300)]
    ];
    $active_config = load_configuration($config_key);
    #die(print_r($msg,1));
    // Call Azure API to generate the chat title
    $title_response = call_azure_api($active_config, $msg);
    $title_response_data = json_decode($title_response, true);
    // Check if the title generation was successful and return the generated title
    if (empty($title_response_data['error'])) {
        return $title_response_data['choices'][0]['message']['content'];
    } else {
        // Log the error and return null
        error_log("Error generating chat title: " . $title_response);
        return null;
    }
}

