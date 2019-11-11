<?php
    require 'vendor/autoload.php';

    use GuzzleHttp\Client;
    
    $client = new \GuzzleHttp\Client();

    $request = $client->get('https://tugas.ammarprojects.com/Sister/api/CLA?kunci=sister');

    $result = json_decode($request->getBody()->getContents(), true);
    $result = $result['data'];
?>