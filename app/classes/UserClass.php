<?php
/**
 * Created by PhpStorm.
 * User: Dylan Goodman
 * Date: 07-Dec-16
 * Time: 3:39 AM
 */

class UserClass extends Database {
    public function hasSetTradeUrl($steamID){
        $db = new Database();
        $result = $db->select()->from('users')->where('steamId', $steamID)->fetch_first();
        if($result['tradeUrl'] === ''){
            return false;
        } else {
            return true;
        }
    }
}