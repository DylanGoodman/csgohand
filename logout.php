<?php
/**
 * Created by PhpStorm.
 * User: Dylan Goodman
 * Date: 27-Jan-17
 * Time: 10:43 PM
 */

session_start();
unset($_SESSION['username']);
unset($_SESSION['email']);
header('Location: /');
exit();