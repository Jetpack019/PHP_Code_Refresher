<?php
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,"https://api.example.com/data");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

$response = curl_exec($ch);
curl_close($ch);
echo $response;


?>