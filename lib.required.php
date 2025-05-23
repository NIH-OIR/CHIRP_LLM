<?php

ini_set('session.cookie_lifetime', 0); // Expires when browser is closed

// lib.required.php
require_once 'db.php';

// Determine the environment dynamically
require_once 'get_config.php';
#echo '<pre>'.print_r($config,1).'</pre>';

require_once 'geminiImpl.php'; 
require_once 'awsClaudeImpl.php'; 


// Start the session, if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

define('MAX_TOKEN', "10000");
define('CONTEXT_LIMIT', "65536");

/*handling login bypass*/
/*
$_SESSION['splash'] = true;
$_SESSION['authorized'] = true;
$_SESSION['oauth2state'] ='fb08c1580d06c8b284e0a3c88718c2ab';

$_SESSION['tokens']['access_token'] = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImtpZ';
$_SESSION['tokens']['token_type'] = 'Bearer';
$_SESSION['tokens']['expires_in'] = 18000000;
$_SESSION['tokens']['refresh_token'] = 'b3fd719e-564a-4565-af35-d2a5b158a01f';
$_SESSION['tokens']['scope'] = 'openid profile';
$_SESSION['tokens']['id_token'] = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImtpZCI6Ik5JSCi';
$_SESSION['tokens']['id_token_type'] = 'urn:ietf:params:oauth:grant-type:bearer';
$_SESSION['tokens']['resource'] = array('https://stsstg.nih.gov/*');
$_SESSION['user_data']['sub'] = '5_wzNXQTkO4bzPHbCJOz3QVeJeplE48HnHZQuKREDZA';
$_SESSION['user_data']['name'] = 'azureuser';
$_SESSION['user_data']['first_name'] = 'azureuser';
$_SESSION['user_data']['last_name'] = 'azureuser';
$_SESSION['user_data']['preferred_username'] = 'azureuser@nih.gov';
$_SESSION['user_data']['userid'] = 'azureuser';
*/
/*done handling login bypass*/

// Handle the splash screen
if (empty($_SESSION['splash'])) $_SESSION['splash'] = '';
#error_log("\$_SESSION in lib.required.php line 42 = ".print_r($_SESSION,1));
#error_log("\$_SESSION authorized in lib.required.php line 43 = ".$_SESSION['authorized']);
if (!isset($_SESSION['authorized']) || $_SESSION['authorized'] !== true) {
    // error_log("\$INFO in lib.required.php line 45 before call auth_redirect.php ");
    require_once "auth_redirect.php";
} else {
    if (empty($_SESSION['splash'])) {
        // error_log("\$INFO in lib.required.php line 49 before call splash.php ");
        require_once "splash.php";
        exit;
    }
} 



// Start the PHP session to enable session variables
$sessionTimeout = $config['session']['timeout'];  // Load session timeout from config

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $sessionTimeout)) {
    // last request was more than 30 minutes ago
    error_log("lib.required.php: logging out due to inactivity");
    header("Location: logout.php");
    exit();
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

#logout();
#echo '<pre>'.print_r($_SESSION,1).'</pre>'; #die("SHOULD BE LOGGED OUT<br>\n");

if (empty($_SESSION['user_data']) || !user_exists($_SESSION['user_data']['userid'], $_SESSION['user_data']['email'])) { #echo "THIS DOG"; #$_SESSION['user_data'] = [];
    require_once 'splash.php';
    exit;
}

$user = $_SESSION['user_data']['userid'];

$application_path = (!empty($config['app']['application_path'])) ? $config['app']['application_path'] : "";

$gptModels = array("azure-gpt4-1", "azure-dall-e-3");

// Verify that there is a chat with this id for this user
// If a 'chat_id' parameter was passed, store its value as an integer in the session variable 'chat_id'
$chat_id = filter_input(INPUT_GET, 'chat_id', FILTER_UNSAFE_RAW);
if (!verify_user_chat($user, $chat_id)){
    echo " -- " . $user . "<br>\n";
    die("Error: there is no chat record for the specified user and chat id. If you need assistance, please contact ".$email_help);
}

$models_str = $config['azure']['deployments'];
$models_str .= ",".$config['azure']['old-models'];
error_log("DEBUG lib.required.php models_str: ".$models_str);
$models_a = explode(",",$models_str);

$models = array();
foreach($models_a as $m) {
    $a = explode(":",$m);
    $models[$a[0]] = array('label'=>$a[1])+$config[$a[0]];
}

$temperatures = [];
$i=0;
# due to the way PHP evaluates floating-point numbers
# the loop will exit before reaching exactly 2.0 
while ($i<2.1) {
    $temperatures[] = round($i,1);
    $i += 0.1;

}

if (empty($_GET['chat_id'])) $_GET['chat_id'] = '';
// Check if the form has been submitted and set the session variable
if (isset($_POST['model']) && array_key_exists($_POST['model'], $models)) {
    $deployment = $_SESSION['deployment'] = $_POST['model'];
    if (!empty($_GET['chat_id'])) update_deployment($user, $chat_id, $deployment);
}

$all_chats = get_all_chats($user);
if (!empty($chat_id) && !empty($all_chats[$chat_id])) {
    $deployment = $_SESSION['deployment'] = $all_chats[$chat_id]['deployment'];  // This is the currently active chat
        $_SESSION['deployment'] = $all_chats[$chat_id]['deployment'];
        $_SESSION['temperature'] = $all_chats[$chat_id]['temperature'];
        $_SESSION['document_name'] = $all_chats[$chat_id]['document_name'];
        $_SESSION['document_type'] = $all_chats[$chat_id]['document_type'];
        $_SESSION['document_text'] = $all_chats[$chat_id]['document_text'];
}

$retiredModels = array("azure-llama3", "mistral-nemo", "gemini-1.5-pro");
if (empty($_SESSION['deployment']) || in_array($_SESSION['deployment'], $retiredModels)) {
    $deployment = $_SESSION['deployment'] = $config['azure']['default'];
} else {
    $deployment = $_SESSION['deployment'];
}

#echo "THIS IS THE DEPLOYMENT: {$deployment}\n";

// Check if the temperature form has been submitted and set the session variable
if (isset($_POST['temperature'])) {
    $_SESSION['temperature'] = (float)$_POST['temperature'];
    $temperature = $_SESSION['temperature'] = $_POST['temperature'];
    if (!empty($_GET['chat_id'])) update_temperature($user, $chat_id, $temperature);
}
if (!isset($_SESSION['temperature']) || (float)$_SESSION['temperature'] < 0 || (float)$_SESSION['temperature'] > 2) {
    $_SESSION['temperature'] = 0.7;

}

// confirm their authentication, redirect if false
if (isAuthenticated()) {
    session_regenerate_id(true);


} else {
    #header('Location: auth_redirect.php');
    #echo "<pre>". print_r($_SESSION,1) ."</pre>";
    #exit;
}

#echo "<pre>". print_r($_SESSION,1) ."</pre>";
#echo "<pre>". print_r($_SERVER,1) ."</pre>";

// This function will check if the user is authenticated
function isAuthenticated() {
    return isset($_SESSION['tokens']) && isset($_SESSION['tokens']['access_token']);
}

function get_path() {
    $path = strstr($_SERVER['PHP_SELF'],'chatdev') ? 'chatdev' : 'chat';
    return $path;
}

// Get the recent messages from the database for the current chat session
function get_recent_messages($chat_id, $user) {
    if (!empty($chat_id)) {
        return get_all_exchanges($chat_id, $user);
    }
    return [];
}

// Load configuration
function load_configuration($deployment) {
    #error_log("lib.required line 180 deployment: ". $deployment);
    global $config;
    global$gptModels;
    $context_limit = isset($config[$deployment]['context_limit']) ? (int)($config[$deployment]['context_limit']) *1.5 : (int)CONTEXT_LIMIT;
    //if ($deployment == "azure-gpt4" || $deployment == "azure-gpt4-1" || $deployment == "azure-dall-e-3") {
    if (in_array($deployment, $gptModels)) {
        $conf = [
            'selected_model' => $deployment,
            'api_key' => trim($config[$deployment]['api_key'], '"'),
            'base_url' => $config[$deployment]['url'],
            'deployment_name' => $config[$deployment]['deployment_name'],
            'api_version' => $config[$deployment]['api_version'],
            'max_tokens' => (int) ($config[$deployment]['max_tokens'] ?? MAX_TOKEN),
            'context_limit' => $context_limit,
        ];

        if ($deployment == "azure-dall-e-3") {
            unset($conf["max_tokens"]);
            unset($conf["context_limit"]);
        }
    } 
    if ($deployment == "aws-claude2") { 
        $conf = [
            'selected_model' => $deployment,
            'model_id' => trim($config[$deployment]['model_id'], '"'),
            'access_key' => trim($config[$deployment]['access_key'], '"'),
            'secret_key' => trim($config[$deployment]['secret_key'], '"'),
            'max_tokens' => (int) ($config[$deployment]['max_tokens'] ?? MAX_TOKEN),
            'bedrock_version' => trim($config[$deployment]['bedrock_version'], '"')
        ];
    }
    #error_log("lib.required line 197 load_configuration conf: ". print_r($conf, true));
    return $conf;
}

function get_gpt_response($message, $chat_id, $user) {
    $selectedModel = $GLOBALS['deployment'];
    #error_log("DEBUG lib.required.php get_gpt_response() selected model: ".$selectedModel);

    $config = load_configuration($selectedModel);
    if (!is_array($message)) { //no error in PII detection api call
        $msg = get_chat_thread($message, $chat_id, $user, $config, $selectedModel);
        // error_log("DEBUG lib.required.php get_gpt_response() response line 225: ".print_r($msg, true));
        if ($selectedModel == 'gemini-1.5-pro') {
            $msgArr = [];
            foreach($msg as $msgItem) {
                if ($msgItem['role'] == "user" || $msgItem['role'] == "system") {
                    $msgArr[] = $msgItem['content'];
                }
            }
            
            $response = callGeminiApi($msgArr);
        } else if ($selectedModel == 'aws-claude2') { 
            $response = callClaudeApi($config, $msg);
        } else {
            $response = call_azure_api($config, $msg);
        }
        // error_log("DEBUG lib.required.php get_gpt_response() response line 245: ".json_encode($response));
        return process_api_response($response, $selectedModel, $chat_id, $message);
    } else {
        return $message;
    }
       
}

// Call Azure OpenAI API
// dall-e-3: https://nih-od-oir-openai-crispi-east-01.openai.azure.com/openai/deployments/nih-od-oir-openai-dall-e-3/images/generations?api-version=2024-05-01-preview
function call_azure_api($config, $msg) {
    $url = $config['base_url'] . "/openai/deployments/" . $config['deployment_name'] . "/chat/completions?api-version=".$config['api_version'];
    if ($config['selected_model'] == "azure-llama3" || $config['selected_model'] == "mistral-nemo") {
        $url = $config['base_url'] . "/v1/chat/completions";
    } else if ($config['selected_model'] == "azure-dall-e-3") {
        $url = $config['base_url'] . "/openai/deployments/" . $config['deployment_name'] . "/images/generations?api-version=".$config['api_version'];
    }
    #error_log("INFO: lib.required call_azure_api() url : ". $url."\n");
    $payload = [
        'messages' => $msg,
        "max_tokens" => $config['max_tokens'] ?? MAX_TOKEN,
        "temperature" => (float)$_SESSION['temperature'],
        "frequency_penalty" => 0,
        "presence_penalty" => 0,
        "top_p" => 0.95,
        "stop" => ""
    ];
    $headers = [];
    if ($config['selected_model'] == "azure-llama3" || $config['selected_model'] == "mistral-nemo") {
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: Bearer ' . $config['api_key'];

        $payload["stop"] = "None";
    }
    if ($config['selected_model'] == "mistral-nemo") {
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: Bearer ' . $config['api_key'];

        unset($payload["frequency_penalty"]);
        unset($payload["presence_penalty"]);
        unset($payload["stop"]); 

        $payload["safe_prompt"] = "false";
        $payload["stream"] = false;
    }
    global$gptModels;
    // if ($config['selected_model'] == "azure-gpt4" || $config['selected_model'] == "azure-gpt4-1" || $config['selected_model'] == "azure-dall-e-3") {
    if (in_array($config['selected_model'], $gptModels)) {
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'api-key: ' . $config['api_key'];
    }
    if ( $config['selected_model'] == "azure-dall-e-3") {
        $payload = [];
        $payload = ['prompt' => $msg[0]['content'],
                    'n' => 1,
                    'size' => "1024x1024",
                    'response_format' => 'b64_json',
                    'quality' => "standard",
                    'style' => "vivid"
        ];
    }
    #error_log("INFO: lib.required line 240 payload json: ". json_encode($payload)."\n");
    #error_log("INFO: lib.required line 241 headers json: ". json_encode($headers)."\n");
    $response = execute_api_call($url, $payload, $headers);
    return $response;
}

// Execute API Call
function execute_api_call($url, $payload, $headers) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    if ($response === FALSE) {
        printf("cUrl error (#%d): %s<br>\n",
        curl_errno($ch),
        htmlspecialchars(curl_error($ch)));
    }
    if (curl_errno($ch)) {
        error_log('Curl error: ' . curl_error($ch));
    }

    curl_close($ch);
    return $response;
}

// Process API Response
function process_api_response($response, $deployment, $chat_id, $message) {
    // error_log("DEBUG lib.required.php process_api_response() selected model: ".$deployment);

    // error_log("DEBUG lib.required.php process_api_response() api result: ".$response);
    $response_data = json_decode($response, true);
    if ($deployment == 'azure-dall-e-3') {
        if (isset($response_data['error'])) { //return error msg if error occurs
            return [
                'deployment' => $deployment,
                'error' => true,
                'message' => $response_data['error']['inner_error']['message']             
            ];
        } else {
            $image_blob = $response_data['data'][0]['b64_json'];
            $revised_prompt = $response_data['data'][0]['revised_prompt'];
            create_exchange($chat_id, $message, $image_blob);
            return [
                'deployment' => $deployment,
                'error' => false,
                'message' => $image_blob,
                'revised_prompt' => $revised_prompt
            ];
        }
    }
    if (isset($response_data['error'])) { //error occurs in azure-gpt-4o and aws-claude2
        error_log('API error: ' . $response_data['error']['message']);
        return [
            'deployment' => $deployment,
            'error' => true,
            'message' => $response_data['error']['message']
        ];
    } else if ($deployment == 'gemini-1.5-pro' && !isset($response_data)) {
        error_log('Gemini API error: ');
        return [
            'deployment' => $deployment,
            'error' => true,
            'message' => "Error occurs in calling Gemini API"
        ];
    } else { //no errors
        if ($deployment == 'gemini-1.5-pro') {
            $response_text = $response_data['candidates'][0]['content']['parts'][0]['text'];
        } else if ($deployment == 'aws-claude2') {
            // error_log("DEBUG lib.required.php process_api_response() aws-claude2 api result: ".$response);
            $response_text = $response;
        } else {
            $response_text = $response_data['response'] ?? $response_data['choices'][0]['message']['content'];
        }
        create_exchange($chat_id, $message, $response_text);
        return [
            'deployment' => $deployment,
            'error' => false,
            'message' => $response_text
        ];
    }

}

// Call Mocha API
function call_mocha_api($base_url, $msg) {
    #$payload = $msg;
    $payload = [
        'messages' => $msg,
        "max_tokens" => $config['max_tokens'] ?? MAX_TOKEN,
        "temperature" => (float)$_SESSION['temperature'],
        "frequency_penalty" => 0,
        "presence_penalty" => 0,
        "top_p" => 0.95,
        "stop" => ""
    ];
    $headers = ['Content-Type: application/json'];
    $response = execute_api_call($base_url, $payload, $headers);
    return $response;
}

function substringWords($text, $numWords) {
    // Split the text into words
    $words = explode(' ', $text);
    
    // Select a subset of words based on the specified number
    $selectedWords = array_slice($words, 0, $numWords);
    
    // Join the selected words back together into a string
    $subString = implode(' ', $selectedWords);
    
    return $subString;
}

function get_chat_thread($message, $chat_id, $user, $config, $selectedModel)
{
    //global $config,$deployment;
    $context_limit = (int)($config['context_limit'] ?? CONTEXT_LIMIT);
    $messages = [];
    // error_log("DEBUG lib.required.php get_chat_thread() context limit: " . $context_limit);

    if (!empty($_SESSION['document_text'])) {
        if ($_SESSION['document_type'] !== null &&strpos($_SESSION['document_type'], 'image/') === 0) {
            // Handle image content (use image_url field with base64 encoded image)
            $messages[] = [
                "role" => "system",
                "content" => "You are a helpful assistant to analyze images."
            ];
            $messages[] = [
                "role" => "user",
                "content" => [
                    ["type" => "text", "text" => $message],
                    ["type" => "image_url", "image_url" => ["url" => $_SESSION['document_text']]]
                ]
            ];
        } else {
            if ($selectedModel == 'aws-claude2') {
                $messages = [
                    [
                        'role' => 'user',
                        'content' => [
                            [
                                "type" => "text",
                                "text" => $_SESSION['document_text']
                            ]
                        ]
                    ],

                ];
            } else {
                $messages = [
                    [
                        'role' => 'system',
                        'content' => $_SESSION['document_text']
                    ],
                    [
                        'role' => 'user',
                        'content' => $message
                    ]
                ];
            }
        }
        // error_log("DEBUG lib.required.php get_chat_thread() with document messages: ".print_r($messages,true));
        return $messages;
    }

    // Set up the chat messages array to send to the OpenAI API
    $messages = [
        [
            'role' => 'user',
            'content' => $message
        ]
    ];


    // Add the last 5 exchanges from the recent chat history to the messages array
    $recent_messages = get_recent_messages($chat_id, $user);
    // error_log("DEBUG lib.required.php get_chat_thread() recent messages: ".print_r($recent_messages,true));
    $tokenLimit = $context_limit ; // Set your token limit here
    #$currentTokens = str_word_count($message);
	$currentTokens = approximateTokenCountByChars($message);


    if (!empty($recent_messages)) {
        $formatted_messages = [];
        foreach (array_reverse($recent_messages) as $message) {
            $message['prompt'] = substringWords($message['prompt'],400);
            $message['reply'] = substringWords($message['reply'],300);

            #print_r($message);
            $messageContent = $message['prompt'] . $message['reply'];
			$tokens = approximateTokenCountByChars($messageContent);
            #$tokens = str_word_count($str) + 2; // +2 for role and content keys // old version
            if ($currentTokens + $tokens <= $tokenLimit) {
                $formatted_messages[] = [
                    'role' => 'assistant', 
                    'content' => $message['reply']
                ];
                $formatted_messages[] = [
                    'role' => 'user', 
                    'content' => $message['prompt']
                ];
                $currentTokens += $tokens;
            } else {
                break;
            }
            #echo $tokenLimit . " - " . $currentTokens . " - STARTING HERE =----- " . print_r($formatted_messages,1) . " - THIS IS THE CURRENT TOKENS: {$currentTokens}\n";
        }
        $messages = array_merge(array_reverse($formatted_messages), $messages);
    }

    #print_r($messages);
    return $messages;
}

function approximateTokenCountByChars($text) {
    $charCount = strlen($text);
    return ceil($charCount / 4); // Rough approximation: 4 characters per token
}


function isUserExist($userData) {
    if (user_exists($userData['userid'], $userData['email'])) {
        echo "true";  
    } else {
        echo "false";
    }
}

function checkIfReachUserCap() { //count active users
    global $config;
    if (totalActiveUserCount() < $config['app']['user_count_cap']) {
        echo "false"; 
    } else {
        echo "true";
    }
}

function checkExistingUserAccess($userid, $userEmail) { 
    global $config;
    $isActiveUser = isActiveUser($userid, $userEmail);
    $totalActiveUserCnt = totalActiveUserCount();
    $userCap = $config['app']['user_count_cap'];
    if (!$isActiveUser && $totalActiveUserCnt >= $userCap) { //not allow inactive user access when user cap is reached
        echo "false";
    } else {
        echo "true";
    }
}

function is_user_active($userid, $userEmail) {
    $isActive = isActiveUser($userid, $userEmail);
    $isUserActive = $isActive ? 'true' : 'false';
    echo $isUserActive;
}

/* update user last_logon and update user ic/email if these hasn't been capture */
function update_user_info($userData) {
    error_log("update_user_info");
    update_user_last_logon($userData['userid']);
    if (!isset($userData['department'])) {
        $userData['department'] = '';
    }
    update_user($userData); 
}

if (isset($_POST['callUpdateUserInfo'])) {
    $userData = $_SESSION['user_data'];
    update_user_info($userData);
}

if (isset($_POST['callClearSession'])) {
    session_unset();
}

function is_allow_access($userid, $userEmail) {
    global $config;
    $is_allow = true;
    error_log("db.php -> is_allow_registration()");
    $isActiveUser = isActiveUser($userid, $userEmail);
    $isRegistered = isRegistered($userid, $userEmail);

    if (!$isActiveUser && !$isRegistered) {
        $is_allow = false;
    }
    return $is_allow;
}

function is_user_registered($userid, $userEmail) {
    $isRegistered = isRegistered($userid, $userEmail);
    $isUserRegistered = $isRegistered ? 'true' : 'false';
    echo $isUserRegistered;
}



