<?php
/**
 * Created by PhpStorm.
 * User: Dylan Goodman
 * Date: 25-Jan-17
 * Time: 10:41 PM
 */

ob_start();
session_start();
$init = $_SERVER['DOCUMENT_ROOT'];
require($init.'/insta/app/class/DatabaseClass.php');
require($init.'/insta/app/class/UserClass.php');

if(!isset($_SESSION['token'])) {
    $_SESSION['token'] = sha1(microtime());
}

$user = new UserClass();
$userData = $user->getUserData($_SESSION['username']);