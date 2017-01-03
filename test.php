<?php
/**
 * Created by PhpStorm.
 * User: Dylan Goodman
 * Date: 05-Dec-16
 * Time: 12:50 AM
 */
require ('app/appInit.php');

$url = 'https://api.opskins.com/IPricing/GetAllLowestListPrices/v1?appid=730';

$json = file_get_contents($url);

$data = json_decode($json);
$data = get_object_vars($data->response);

foreach ($data as $item){
    print_r($item);
    $name = array_keys($item);
    $price = $item['price'];
    echo $name[0] . ' : '. $price;
    echo '<br>';
}