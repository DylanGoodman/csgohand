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
$keys = array_keys($data);
foreach($keys as $item){
    $db = new Database();
    $db->insert('prices', array('name' => $item));
    echo $item.'<br>';
}