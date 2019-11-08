<?php
    include "authSiswa.php";
        
    $result = json_decode($response->getBody()->getContents(), true);
    $result = $result['data'];
?>