<?php
    require 'vendor/autoload.php';

    $client = new \GuzzleHttp\Client();

    $ID =  $_GET['id'];

    $url = "https://tugas.ammarprojects.com/Sister/CLA/api/CLA";

    $response = $client->delete($url, [
    'form_params' => [
        'kunci' => 'sister',
        'id' => $ID
    ]
]);

header("location:siswa.php");

?>