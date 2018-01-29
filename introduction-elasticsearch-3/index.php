<?php

use Elasticsearch\ClientBuilder;

require 'vendor/autoload.php';

$client = ClientBuilder::create()->build();

$params = [
    'index' => 'remuneracao',
    'body' => [
        'settings' => [
            'number_of_shards' => 1,
            'number_of_replicas' => 0
        ]
    ]
];

$response = $client->indices()->create($params);
print_r($response);