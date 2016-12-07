<?php
/**
 * Created by PhpStorm.
 * User: Dylan Goodman
 * Date: 07-Dec-16
 * Time: 5:58 AM
 */

class LevelClass extends Database {
    public function getCurrentLevelAndExp($steamId){
        $db = new Database();
        $result = $db->select()->from('users')->where(array('steamId' => $steamId))->fetch_first();
        $return = array(
            'exp'   => $result['exp'],
            'level' => $result['level']
        );
        return $return;
    }
}