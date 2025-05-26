<?php
// api.php

header('Content-Type: application/json');

$env = parse_ini_file(__DIR__ . "/.env");
$api_key = getenv('OPENAI_API_KEY');

// Merr input nga POST
$input = isset($_POST['prompt']) ? trim($_POST['prompt']) : '';

if (!$input) {
    echo json_encode(['error' => 'Prompt is empty']);
    exit;
}

$data = [
    'model' => 'gpt-4o-mini', 
    'messages' => [
        ['role' => 'user', 'content' => $input]
    ],
    'max_tokens' => 150,
    'temperature' => 0.7
];

$ch = curl_init('https://api.openai.com/v1/chat/completions');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $apiKey,
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$response = curl_exec($ch);

if(curl_errno($ch)) {
    echo json_encode(['error' => curl_error($ch)]);
    curl_close($ch);
    exit;
}

curl_close($ch);
echo $response;
?>
