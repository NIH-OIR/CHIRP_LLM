<?php

require_once 'get_config.php';

function piiDetection($message) {

    global $config;
    $piiDetectionEndPointUrl = $config['pii-detection']['url'];
    $piiDetectionApiVersion = $config['pii-detection']['api_version'];
    $piiDetectionUrl = $piiDetectionEndPointUrl.'language/:analyze-text?api-version='.$piiDetectionApiVersion;

    $piiDetectionApiKey = $config['pii-detection']['api_key'];

    $piiDetectionHeaders = [];
    $piiDetectionHeaders[] = 'Content-Type: application/json';
    $piiDetectionHeaders[] = 'Ocp-Apim-Subscription-Key: '.$piiDetectionApiKey;
    #error_log("piiDetection line 17 header : ".print_r($piiDetectionHeaders, true));

    $messageArr = str_split($message, 50000); //there is 50000 char limit for PII detection
    $inputTextArr = [];
    foreach($messageArr as $key=>$value) {
        $inputTextItem = ["id" => $key,
                          "language" => "en",
                          "text" => $value
                         ];
        $inputTextArr[] = $inputTextItem;
    };

    $piiDetectionBody = ['kind' => 'PiiEntityRecognition',
                         'parameter' => ['modelVersion' => 'latest',
                                         'PiiDomain' => 'phi'
                                        ],
                         'analysisInput' => ['documents' => $inputTextArr]
                        ];

    // Execute API Call
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $piiDetectionUrl);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($piiDetectionBody));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $piiDetectionHeaders);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    //process response to get redacted text 
    if ($response === FALSE) {
        printf("cUrl error (#%d): %s<br>\n",
        curl_errno($ch),
        htmlspecialchars(curl_error($ch)));
    }
    if (curl_errno($ch)) {
        error_log('Curl error: ' . curl_error($ch));
    }

    curl_close($ch);

    $response_data = json_decode($response, true);
    #error_log("piiDetection line 56 response data : ".print_r($response_data, true));

    $response_text = "";
    if (isset($response_data['error'])) {
        error_log('API error: ' . $response_data['error']['message']);
        return 'PII Dection API call failed';
        return [
            'kind' => "PiiEntityRecognition",
            'error' => true,
            'message' => $response_data['error']['message']
        ];
    } else {
        $redactedTextArr = [];
        $returnTextArr = $response_data['results']['documents'];
        foreach($returnTextArr as $returnTextItem) {
            $response_text .= $returnTextItem['redactedText']." ";
        };
    }

    #error_log("piiDetection line 75 returnTextArr : ".$response_text);
    return $response_text;

}


?>