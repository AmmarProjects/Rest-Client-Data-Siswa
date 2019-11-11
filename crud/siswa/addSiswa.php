<?php
    $nisn = $_POST['idUji'];

    require 'vendor/autoload.php';

    $client = new \GuzzleHttp\Client();

    $url = "https://tugas.ammarprojects.com/Sister/api/CLA?kunci=sister";

    $myBody['name'] = "Demo";

    $request = $client->post($url,  ['body'=>$myBody]);

    $response = $request->send();
?>