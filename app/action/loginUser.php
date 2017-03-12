<?php
/**
 * Created by PhpStorm.
 * User: Dylan Goodman
 * Date: 27-Jan-17
 * Time: 10:57 PM
 */

require '../init.php';

$user = new UserClass();

if(!isset($_SESSION['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $token = $_POST['token'];
    
    try{
        if($token !== $_SESSION['token'])
            throw new Exception('Your session has expired, please refresh the page!');
        if(empty($username)&&empty($password))
            throw new Exception('Please fill in all the required fields!');
        if($user->login($username, $password)){
            echo json_encode(array('success' => true));
        } else {
            throw new Exception('Username or Password was wrong!');
        }
    } catch (Exception $ex){
        echo json_encode(array('success' => false, 'error' => $ex->getMessage()));
    }
}