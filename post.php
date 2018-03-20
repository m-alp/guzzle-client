<?php
require 'vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$debug = true;

$domain = 'https://teste.stg.eu-west-1.mercury.olx.org/';
$path = 'sitehooks/v1/messages';

$apiKey = 'The API Key';

$uuid = '123456';
$message = 'Some Message from Guzzle.';

$res = $client->request('POST', sprintf("%s%s", $domain, $path), [
        'headers' => [
            //'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'x-api-key' => $apiKey
        ],
        \GuzzleHttp\RequestOptions::JSON => [
            'uuid' => $uuid,
            'message' => $message
        ],
        'debug' => $debug,
        'protocols' => ['https']
        ]
);

echo "Status Code: ".$res->getStatusCode()."\n";
echo "Response: ".$res->getBody()."\n";

//echo "Done.";

