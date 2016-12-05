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
include($init.'/classes/config/userInfo.php');
require($init.'/classes/DatabaseClass.php');
require($init.'/classes/ItemsClass.php');
require($init.'/classes/SiteClass.php');
require($init.'/classes/GameClass.php');
require($init.'/classes/TradeClass.php');
require($init.'/classes/ManagerClass.php');