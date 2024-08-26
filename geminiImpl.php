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


$project_id = 'nih-od-oir-crispi-llm-gcp';
$location = 'us-central1';
$geminiModel = "gemini-1.5-pro-001";
$message = "What's a good name for a flower shop that specializes in selling bouquets of dried flowers?";
error_log("geminiImpl.php prompt".print_r($message, true));
#error_log("credential: ".print_r(json_decode(file_get_contents(getenv('GOOGLE_APPLICATION_CREDENTIALS')), true)));
//try {
    $client = new PredictionServiceClient([
        'credentials' => json_decode(file_get_contents('/var/lib/chat/gemini_vertex-ai.key.json'), true),
        'apiEndpoint' => $location . '-aiplatform.googleapis.com'
    ]);
    error_log("geminiImpl.php line 27");
    #error_log("gemini client: ".var_dump($client));
/*     $formattedEndpoint = $client->projectLocationEndpointName(
        $project_id,
        $location,
        'google',
        $geminiModel
    ); */
    error_log("geminiImpl.php line 35: ");

    $model = "projects/nih-od-oir-crispi-llm-gcp/locations/us-central1/publishers/*/models/gemini-1.5-pro-001";
    //$model = "projects/nih-od-oir-crispi-llm-gcp/locations/us-central1/endpoints/gemini-1.5-pro-001";
    // Prepare the request message.
    $contentsParts = [(new Part())->setText($message),];
    $content = (new Content())->setParts($contentsParts);
    $contents = [$content,];

    $generationConfig = (new GenerationConfig()) 
                        ->setTemperature(0.7)
                        ->setMaxOutputTokens(8192)
                        ->setTopK(0.8)
                        ->setTopP(40);
    $safetySettings = [(new SafetySetting())->setCategory(HarmCategory::HARM_CATEGORY_HARASSMENT)->setThreshold(HarmBlockThreshold::BLOCK_ONLY_HIGH),
                        (new SafetySetting())->setCategory(HarmCategory::HARM_CATEGORY_HATE_SPEECH)->setThreshold(HarmBlockThreshold::BLOCK_ONLY_HIGH),
                        (new SafetySetting())->setCategory(HarmCategory::HARM_CATEGORY_SEXUALLY_EXPLICIT)->setThreshold(HarmBlockThreshold::BLOCK_ONLY_HIGH),
                        (new SafetySetting())->setCategory(HarmCategory::HARM_CATEGORY_DANGEROUS_CONTENT)->setThreshold(HarmBlockThreshold::BLOCK_ONLY_HIGH),
                        ];
    error_log("geminiImpl.php line 71 ");
    $request = (new GenerateContentRequest())
                ->setModel($model)
                ->setContents($contents)
                ->setGenerationConfig($generationConfig)
                ->setSafetySettings($safetySettings);

    error_log("geminiImpl.php line 73");

    try {
        //$response = $client->generateContent($request, array( 'curl' => array( CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST => 0)));
        $response = $client->generateContent($request, ['verify' => false]);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }

?>