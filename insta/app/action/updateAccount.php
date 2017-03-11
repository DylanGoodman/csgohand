<?php
/**
 * Created by PhpStorm.
 * User: Dylan Goodman
 * Date: 28-Jan-17
 * Time: 10:08 PM
 */

require '../init.php';

$user = new UserClass();

if(isset($_SESSION['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordr = $_POST['passwordr'];
    $confirmPass = $_POST['confirmPass'];
    $email = $_POST['email'];
    $token = $_POST['token'];

    try{
        if($token !== $_SESSION['token'])
            throw new Exception('Your session has expired! Please refresh page!');
        if($username !== $_SESSION['username'])
            throw new Exception('There was an error, please try again!');
        if(empty($confirmPass))
            throw new Exception('Please enter current password to update!');
        if(empty($email)&&empty($password)&&empty($passwordr))
            throw new Exception('You need to enter something!');
        if(!empty($email)){
            if(!filter_var($email, FILTER_VALIDATE_EMAIL))
                throw new Exception('That is not a valid email!');
        }
        if(!empty($password) || !empty($passwordr)){
            if($password !== $passwordr)
                throw new Exception('New passwords do not match!');
        }
        $aUpdateData = [];

        if(!empty($email))
            $aUpdateData['email'] = $email;
        if(!empty($password))
            $aUpdateData['password'] = password_hash($password, PASSWORD_BCRYPT);
        if($user->updateAccount($username, $confirmPass, $aUpdateData)){
            if(!empty($email))
                $_SESSION['email'] = $email;
            echo json_encode(array('success' => true, 'email' => $email));
        } else {
            throw new Exception('Wrong password!');
        }
    } catch( Exception $ex){
        echo json_encode(array(
            'success' => false,
            'error' => $ex->getMessage()
        ));
    }
}