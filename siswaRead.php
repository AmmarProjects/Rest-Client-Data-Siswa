<?php
    require 'vendor/autoload.php';

    $client = new \GuzzleHttp\Client();
    
    $response = $client->request('GET', 'https://tugas.ammarprojects.com/Sister/api/CLA', [
       'query' => [
           'kunci' => 'sister',
        ]
    ]);
        
    $result = json_decode($response->getBody()->getContents(), true);
    $result = $result['data'];
?>