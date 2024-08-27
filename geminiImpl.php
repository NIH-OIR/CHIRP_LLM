<?php
require_once 'vendor/autoload.php';

use Google\ApiCore\ApiException;
use Google\Cloud\AIPlatform\V1\Client\PredictionServiceClient;
use Google\Cloud\AIPlatform\V1\Content;
use Google\Cloud\AIPlatform\V1\GenerateContentRequest;
use Google\Cloud\AIPlatform\V1\GenerateContentResponse;
use Google\Cloud\AIPlatform\V1\Part;
use Google\Cloud\AIPlatform\V1\GenerationConfig;
use Google\Cloud\AIPlatform\V1\SafetySetting;
use Google\Cloud\AIPlatform\V1\HarmCategory;
use Google\Cloud\AIPlatform\V1\SafetySetting\HarmBlockThreshold;

function callGeminiApi($message) {
    $project_id = 'nih-od-oir-crispi-llm-gcp';
    $location = 'us-central1';
    $geminiModel = "gemini-1.5-pro-001";
    $response = '';
    #error_log("gemini msg: ".json_encode($message));

    try {
        $client = new PredictionServiceClient([
            'credentials' => json_decode(file_get_contents('/var/lib/chat/gemini_vertex-ai.key.json'), true),
            'apiEndpoint' => $location . '-aiplatform.googleapis.com'
        ]);
    
        // Define the model path
        $model = "projects/$project_id/locations/$location/publishers/google/models/$geminiModel";
    
        // Create the content part
        $contents = [];
            foreach($message as $msg) {
            $part = new Part();
            $part->setText($msg);
            $content = new Content();
            $content->setRole('user');  // Explicit role setting
            $content->setParts([$part]);
        $contents[] = $content;
            }
        // Define the generation configuration
        $generationConfig = (new GenerationConfig())
                            ->setTemperature(0.7)
                            ->setMaxOutputTokens(8192)
                            ->setTopK(20)
                            ->setTopP(0.95);
    
        // Define safety settings
        $safetySettings = [
            (new SafetySetting())->setCategory(HarmCategory::HARM_CATEGORY_HARASSMENT)->setThreshold(HarmBlockThreshold::BLOCK_ONLY_HIGH),
            (new SafetySetting())->setCategory(HarmCategory::HARM_CATEGORY_HATE_SPEECH)->setThreshold(HarmBlockThreshold::BLOCK_ONLY_HIGH),
            (new SafetySetting())->setCategory(HarmCategory::HARM_CATEGORY_SEXUALLY_EXPLICIT)->setThreshold(HarmBlockThreshold::BLOCK_ONLY_HIGH),
            (new SafetySetting())->setCategory(HarmCategory::HARM_CATEGORY_DANGEROUS_CONTENT)->setThreshold(HarmBlockThreshold::BLOCK_ONLY_HIGH),
        ];
    
        // Create the GenerateContentRequest object
        $request = new GenerateContentRequest();
        $request->setModel($model);
        $request->setContents($contents);
        $request->setGenerationConfig($generationConfig);
        $request->setSafetySettings($safetySettings);
    
        // Use streamGenerateContent to process the input data with the proper request object
        $generateContentresponse = $client->generateContent($request);  // Pass the request object here
        $response = $generateContentresponse->serializeToJsonString();
        error_log("Gemini response: ".$response);
    
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    } finally {
        $client->close();
    }
    return $response;
}
?>