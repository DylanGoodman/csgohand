<?php
/**
 * Created by PhpStorm.
 * User: Dylan Goodman
 * Date: 25-Jan-17
 * Time: 11:19 PM
 */

require '../init.php';

$user = new UserClass();

if(!isset($_SESSION['username'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password1 = $_POST['password'];
    $password2 = $_POST['passwordr'];
    $token = $_POST['token'];

    try {
        if($token !== $_SESSION['token'])
            throw new Exception('Your session has expired, please refresh the page!');
        if(empty($username)&&empty($email)&&empty($password1))
            throw new Exception('Make sure all fields are filled out!');
        if($password1 !== $password2)
            throw new Exception('Your passwords do not match!');
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            throw new Exception('The entered E-Mail is not valid!');
        if($user->checkIfUserExists($username))
            throw new Exception('That username is already in use!');
        if($user->checkIfEmailExists($email))
            throw new Exception('That E-Mail is already in use!');
        
        $password = password_hash($password1, PASSWORD_BCRYPT);
        
        $aUserData = array(
            'username'  => $username,
            'email'     => $email,
            'password'  => $password
        );
        if($user->register($aUserData)){
            echo json_encode(array('success' => true));
        } else {
            throw new Exception('Something went wrong, try again!');
        }
    } catch( Exception $ex){
        echo json_encode(array(
            'success'   => false,
            'error'     => $ex->getMessage()
        ));
    }
}