<?php

require 'vendor/autoload.php';
use Elasticsearch\ClientBuilder;
$client = ClientBuilder::create()->build();

$deleteParams = [
    'index' => 'my_index'
];
$response = $client->indices()->delete($deleteParams);
print_r($response);