<?php
use Elasticsearch\ClientBuilder;
require 'vendor/autoload.php';

$client = ClientBuilder::create()->build();

//Criação de índice
$params = [
    'index' => 'remuneracao',
    'body' => [
        'settings' => [
            'number_of_shards' => 1,
            'number_of_replicas' => 0
        ],
        'mappings' => [
            'doc' => [
                'properties' => [
                    'nome' => [
                        'type' => 'text',
                        'fielddata' => 'true'
                    ]
                ]
            ]
        ]
    ]
];
$response = $client->indices()->create($params);

//Criação de documento
$params = [
    'index' => 'remuneracao',
    'type' => 'doc',
    'id' => '1',
    'body' => [
        'ano' => '2018',
        'mes' => '1',
        'cpf' => '12345678909',
        'nome' => 'Teste 1',
        'remuneracao' => '12345.67',
    ]
];
$response = $client->index($params);

//Consulta pelo ID
$params = [
    'index' => 'remuneracao',
    'type' => 'doc',
    'id' => '1'
];
$response = $client->get($params);

//Consulta por parte de algum campo
$params = [
    'index' => 'remuneracao',
    'type' => 'doc',
    'body' => [
        'query' => [
            'wildcard' => [
                'nome' => '*est*'
            ]
        ]
    ]
];
$response = $client->search($params);

//Atualização de um documento
$params = [
    'index' => 'remuneracao',
    'type' => 'doc',
    'id' => '1',
    'body' => [
        'doc' => [
            'nome' => 'Teste Atualizado'
        ]
    ]
];
$response = $client->update($params);

//Exclusão de um documento
$params = [
    'index' => 'remuneracao',
    'type' => 'doc',
    'id' => '1'
];
$response = $client->delete($params);

//Exclusão de um índice
$params = [
    'index' => 'remuneracao',
];
$response = $client->indices()->delete($params);