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

    public function getLevelData($steamId) {
        $db = new Database();
        $userLevel = $this->getCurrentLevelAndExp($steamId);
        if($userLevel['level'] !== 0){
            $level = $db->select()->from('levels')->where('levelId', $userLevel['level'])->fetch_first();
            return $level['levelXp'];
        }
    }

    public function getLevelExp($level){
        $db = new Database();
        $levelData = $db->select()->from('levels')->where('levelId', $level)->fetch_first();
        return $levelData;
    }

    public function getPercentageLevel($steamId){
        $db = new Database();
        $userLevel = $this->getCurrentLevelAndExp($steamId);
        $levelXp = $this->getLevelData($steamId);
        if($userLevel['level'] == 1){
            $percent = $userLevel['exp'] / $levelXp;
            $percent = $percent * 100;
            return round($percent, 2);
        } else {
            $downLevel = $this->getLevelExp($userLevel['level']-1);
            $difference =  $downLevel['levelXp'] - $levelXp;
            $expDifference = $userLevel['exp'] - $downLevel['levelXp'];
            $percent = $expDifference / $difference;
            $percent = $percent * 100;
            return round($percent, 2);
        }
    }
}