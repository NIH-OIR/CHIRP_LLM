<?php
require_once 'vendor/autoload.php';

use Aws\BedrockRuntime\BedrockRuntimeClient;
use AwsUtilities\AWSServiceClass;

function callClaudeApi($config, $message) {
    $model_id = $config['model_id'];
    $response = '';
    // error_log("DEBUG awsClaudeImpl.php callClaudeApi() claude msg: ".json_encode($message));
    $settings = [
        'region' => 'us-east-1',
        'credentials' => [
            'key'    => $config['access_key'],
            'secret' => $config['secret_key'],
        ],
    ];

    $client = new BedrockRuntimeClient($settings);
    // error_log("DEBUG awsClaudeImpl.php callClaudeApi() config: " . print_r($config, true) . "\n");

    try {   
        $body = [
            "anthropic_version" => $config['bedrock_version'],
            "max_tokens" => (int)$config['max_tokens'] ?? (int)MAX_TOKEN,
            'temperature' => (float)$_SESSION['temperature'],
            // "system" => "Please respond.",
            'messages' => $message
        ];
        // error_log("DEBUG awsClaudeImpl.php callClaudeApi() body: " . print_r($body, true) . "\n");
        // Call the Bedrock AI model API
        $result = $client->invokeModel([
            "modelId" => $model_id, 
            "contentType" => "application/json",
            "body" => json_encode($body)
        ]);
        // error_log("DEBUG awsClaudeImpl.php callClaudeApi() result: " . print_r($result, true) . "\n");
        // reference: https://github.com/awsdocs/aws-doc-sdk-examples/blob/main/php/example_code/bedrock-runtime/BedrockRuntimeService.php#L31
        $response = json_decode($result['body'])->content[0]->text;
        
        
    } catch (Exception $e) {
        // Output error message if fails
        $response = $e->getMessage();
        error_log("DEBUG awsClaudeImpl.php callClaudeApi() error: " . $response . "\n");
        
    }
    // error_log("DEBUG awsClaudeImpl.php callClaudeApi() response: " . json_encode($response) . "\n");
    return $response;
}
?>