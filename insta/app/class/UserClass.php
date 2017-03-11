<?php
/**
 * Created by PhpStorm.
 * User: Dylan Goodman
 * Date: 25-Jan-17
 * Time: 11:18 PM
 */

class UserClass extends Database {
    public function updateAccount($username, $password, $data){
        $db = new Database();
        $user = $db->select()->from('users')->where('username', $username)->fetch_first();
        if($user){
            $hash = $user['password'];
            if(password_verify($password, $hash)){
                if($db->where('username', $username)->update('users', $data)){
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    public function login($username, $password){
        $db = new Database();
        $user = $db->select()->from('users')->where('username', $username)->fetch_first();
        if($user){
            $hash = $user['password'];
            if(password_verify($password, $hash)){
                $_SESSION['username']   = $user['username'];
                $_SESSION['email']      = $user['email'];
                return true;
            }
        } else {
            return false;
        }
    }
    public function register($userData){
        $db = new Database();
        if($db->insert('users', $userData)){
            $_SESSION['username'] = $userData['username'];
            $_SESSION['email'] = $userData['email'];
            return true;
        } else {
            return false;
        }
        
    }
    public function getUserData($username){
        $db = new Database();
        return $db->select()->from('users')->where('username', $username)->fetch_first();
    }
    public function checkIfUserExists($username){
        $db = new Database();
        return $db->select()->from('users')->where('username', $username)->fetch_first();
    }
    public function checkIfEmailExists($email){
        $db = new Database();
        return $db->select()->from('users')->where('email', $email)->fetch_first();
    }
}