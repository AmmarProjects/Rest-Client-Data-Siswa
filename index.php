<?php
    require 'vendor/autoload.php';

    use GuzzleHttp\Client;

    $client = new Client();
    $response = $client->request('GET', 'https://tugas.ammarprojects.com/Sister/api/CLA', [
        'query' => [
            'kunci' => 'asiyap',
        ]
    ]);

    $result = json_decode($response->getBody()->getContents());
?>