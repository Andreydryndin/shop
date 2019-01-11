<?php
require 'connector.php';

$ip = $_SERVER['REMOTE_ADDR'];
$date = new DateTime();
$created_at = $date->format('Y-m-d H:i:s');
$add = $mysqli->query("INSERT INTO `basket` (`product_id`, `quantity`, `ip`, `created_at`) 
VALUES (".$_GET['id'].", ".$_GET['quantity'].", '".$ip."', '".$created_at."');");

if($add){
    $response = [
        'data' => 'Товар добавлен в корзину',
        'status' => '1'
    ];
} else {
    $response = [
        'data' => $add->error,
        'status' => '0'
    ];
}
print_r(json_encode($response));