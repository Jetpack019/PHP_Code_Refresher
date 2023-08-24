<?php

$data = array(
    "name" => "Alice",
    "age" => 28,
    "city" => "New York"
);

$jsonData = json_encode($data);
echo $jsonData;

$decodeData = json_decode($jsonData,true);
echo "Name: ".$decodeData["name"];
echo ", Age: ".$decodeData["age"];
echo ", City: ".$decodeData["city"];
?>