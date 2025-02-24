<?php
require_once 'vendor/autoload.php';

use Aws\Bedrock\BedrockClient;
use Aws\Exception\AwsException;

function callClaudeApi($config, $message) { //$selectedModel='aws-claude2'
    $model_id = $config['model_id'];
    $response = '';
    #error_log("claude msg: ".json_encode($message));

    $client = new BedrockClient([
        'region' => 'us-east-1', // Replace with your region
        'version' => 'latest',
        'credentials' => [
            'key' => 'YOUR_ACCESS_KEY_ID',
            'secret' => 'YOUR_SECRET_ACCESS_KEY',
        ],
    ]);

    try {   
        $body = [
            "prompt" => "\n\nHuman:" . $message . "\n\nAssistant:",
            "max_tokens_to_sample" => $config['max_tokens'] ?? MAX_TOKEN,
            "temperature" => (float)$_SESSION['temperature'],
            "top_k" => 250,
            "top_p" => 1,
            "stop_sequences" => ["\n\nHuman:"],
            "anthropic_version" => $config['bedrock_version']
        ];
        // Call the Bedrock AI model API
        $result = $client->invokeModel([
            "modelId" => $model_id, 
            "contentType" => "application/json",
            "accept" => "application/json",
            "body" => $body
        ]);
        error_log("DEBUG awsClaudeImpl.php callClaudeApi() result: " . print_r($result, true) . "\n");
        //$response = $result['content']['text'];
        // reference: https://docs.aws.amazon.com/bedrock/latest/developerguide/bedrock-api-reference.html
        $response = $result['completion'];
        error_log("DEBUG awsClaudeImpl.php callClaudeApi() response: " . $response . "\n");
        
    } catch (AwsException $e) {
        // Output error message if fails
        $response = $e->getAwsErrorMessage();
        error_log("DEBUG awsClaudeImpl.php callClaudeApi() error: " . $response . "\n");
        
    }

    return $response;
}
?>