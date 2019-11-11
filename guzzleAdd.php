<?php
    include "rsa.php";
    require 'vendor/autoload.php';

    $client = new \GuzzleHttp\Client();

    $NISN =  encrypt($_POST['NISN'],$private_secret_key);
    $Nama =  encrypt($_POST['Nama'],$private_secret_key);
    $Jurusan =  $_POST['Jurusan'];
    $Sekolah =  encrypt($_POST['Sekolah'],$private_secret_key);
    $TTL =  encrypt($_POST['TTL'],$private_secret_key);
    

    $url = "https://tugas.ammarprojects.com/Sister/api/CLA";

    $response = $client->request('POST', $url, [
    'form_params' => [
        'kunci' => 'sister',
        'nisn' => $NISN,
        'nama' => $Nama,
        'ttl' => $TTL,
        'sekolah' => $Sekolah,
        'password' => $NISN,
        'id_jurusan'=>$Jurusan
    ]
]);

?>