<?php
/**
 * Created by PhpStorm.
 * User: Dylan Goodman
 * Date: 05-Dec-16
 * Time: 12:50 AM
 */
require ('app/init.php');

$db = new Database();
$value = 400;
$increase = 0.30;
for ($i = 0; $i <= 10; $i++){
    echo $value . '<br>';
    $db->insert('levels', array('levelXp' => $value));
    $value = $value * $increase;
}