<?php
class detect_intent_texts{
    
    // object properties
    public $projectId;
    public $texts;
    public $sessionId;

	
	function detect_intent_texts($projectId, $texts, $sessionId, $languageCode = 'en-GB')
{
    // new session
	$test = array('credentials' => 'client-secret.json');
    $sessionsClient = new SessionsClient($test);
    $session = $sessionsClient->sessionName($projectId, $sessionId ?: uniqid());
    printf('Session path: %s' . PHP_EOL, $session);

    // query for each string in array
    foreach ($texts as $text) {
        // create text input
        $textInput = new TextInput();
        $textInput->setText($text);
        $textInput->setLanguageCode($languageCode);

        // create query input
        $queryInput = new QueryInput();
        $queryInput->setText($textInput);

        // get response and relevant info
        $response = $sessionsClient->detectIntent($session, $queryInput);
        $queryResult = $response->getQueryResult();
        $queryText = $queryResult->getQueryText();
        $intent = $queryResult->getIntent();
        $displayName = $intent->getDisplayName();
        $confidence = $queryResult->getIntentDetectionConfidence();
        $fulfilmentText = $queryResult->getFulfillmentText();

        // output relevant info
        print(str_repeat("=", 20) . PHP_EOL);
        printf('Query text: %s' . PHP_EOL, $queryText);
        printf('Detected intent: %s (confidence: %f)' . PHP_EOL, $displayName,
            $confidence);
        print(PHP_EOL);
        printf('Fulfilment text: %s' . PHP_EOL, $fulfilmentText);
    }

    $sessionsClient->close();
}
}
?>