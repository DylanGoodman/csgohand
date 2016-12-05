<?php
/**
 * Created by PhpStorm.
 * User: Dylan Goodman
 * Date: 05-Dec-16
 * Time: 12:50 AM
 */
require ('app/init.php');

$url = file_get_contents("http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=23542278D8ACE28CBB14F6B0437FD03C&steamids=".$_SESSION['steamid']);
$content = json_decode($url, true);


echo '<br>';

echo $content['response']['players'][0]['personaname'];