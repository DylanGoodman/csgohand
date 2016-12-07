<?php
/**
 * Created by PhpStorm.
 * User: Dylan Goodman
 * Date: 04-Dec-16
 * Time: 11:55 PM
 */
ob_start();
session_start();
$init = $_SERVER['DOCUMENT_ROOT'];
include($init.'/app/classes/config/userInfo.php');
require($init.'/app/classes/DatabaseClass.php');
require($init.'/app/classes/UserClass.php');
require($init.'/app/classes/SiteClass.php');
//require($init.'/app/classes/GameClass.php');
//require($init.'/app/classes/TradeClass.php');
//require($init.'/app/classes/ManagerClass.php');

$site = new SiteClass();
$user = new UserClass();

if(isset($_SESSION['steamid'])){
    if($_SESSION['addUser'] === false){
        $site->updateUserOnLogin($_SESSION['steamid'], array('username' => $steamprofile['personaname']));
        $_SESSION['addUser'] = true;
    }
    $userData = $site->getUserData($_SESSION['steamid']);
}

include($init.'/nav.php');