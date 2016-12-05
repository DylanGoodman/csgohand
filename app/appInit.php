<?php
/**
 * Created by PhpStorm.
 * User: Dylan Goodman
 * Date: 05-Dec-16
 * Time: 2:23 AM
 */

ob_start();
session_start();
$init = $_SERVER['DOCUMENT_ROOT'];
include($init.'/app/classes/config/userInfo.php');
require($init.'/app/classes/DatabaseClass.php');
require($init.'/app/classes/ChatClass.php');
require($init.'/app/classes/SiteClass.php');
//require($init.'/app/classes/GameClass.php');
//require($init.'/app/classes/TradeClass.php');
//require($init.'/app/classes/ManagerClass.php');

$site = new SiteClass();