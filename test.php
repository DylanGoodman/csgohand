<?php
/**
 * Created by PhpStorm.
 * User: Dylan Goodman
 * Date: 05-Dec-16
 * Time: 12:50 AM
 */
require ('app/appInit.php');

$db = new Database();
$value = 136120;
$increase = 1.13;
for ($i = 0; $i < 30; $i++){
    $value = $value * $increase;
    $value = ceil($value / 10) * 10;
    echo $value . '<br>';
    $db->insert('levels', array('levelXp' => $value));
}