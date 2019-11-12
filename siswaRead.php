<?php
    require 'vendor/autoload.php';

    $client = new \GuzzleHttp\Client();
    
    $response = $client->request('GET', 'https://tugas.ammarprojects.com/Sister/CLA/api/CLA', [
       'query' => [
           'kunci' => 'sister',
        ]
    ]);
        
    $result = json_decode($response->getBody()->getContents(), true);
    $result = $result['data'];
?>