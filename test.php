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

echo '<pre>';
print_r($data);