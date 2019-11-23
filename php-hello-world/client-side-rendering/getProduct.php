<?php

header("Content-Type:application/json");

$request = json_decode(file_get_contents('php://input'), true);

$response['productCode'] = $request['orderNumber'] + 1;
$response['productLine'] = $request['orderNumber'] + 2;

$json_response = json_encode($response);
echo $json_response;

?>
