<?php
    include "auth.php";
        
    $result = json_decode($response->getBody()->getContents(), true);
    $result = $result['data'];
?>