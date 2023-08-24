<?php
$method = $_SERVER['REQUEST_METHOD'];
if($method == 'GET'){
    $data = array('message' => 'This is a GET request.');
} elseif($method == 'POST'){
    $data = array('message' => 'This is a POST request.');
}

header('Content-Type: application/json');
echo json_encode($data);

?>