<?php
/**
 * Created by PhpStorm.
 * User: Dylan Goodman
 * Date: 05-Dec-16
 * Time: 1:45 AM
 */

class ChatClass extends Database {
    public function cleanInput($input) {

        $search = array(
            '@<script[^>]*?>.*?</script>@si',   // Strip out javascript
            '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
            '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
            '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
        );

        $output = preg_replace($search, '', $input);
        return $output;
    }

    public function sanitize($input) {
        $db = new Database();
        $input  = $this->cleanInput($input);
        $output = $db->escape($input);
        return $output;
    }
    public function getRole($steamId){
        $db = new Database();
        $where = array('UserId' => $steamId);
        $result = $db->select()->from('tdUserRoles')->where($where)->fetch_first();
        if($result){
            return $result['RoleName'];
        } else {
            return false;
        }
    }
    public function addMsg($data = array()){
        $db = new Database();
        $cleanMsg = $this->sanitize($data['msg']);
        $data['msg'] = $cleanMsg;
        if($id = $db->insert('chat', $data)){
            return $id;
        } else {
            return false;
        }
    }
    public function banUser($steamId, $type = 'chat or game'){
        $site = new SiteClass();
        $banType = '';
        if($type === 'chat'){
            $banType = 'bIsChatBanned';
        } else {
            $banType = 'bIsGameBanned';
        }
        if($site->isMod($_SESSION['steamid']) === true){
            $currentTime = time();
            $db = new Database();
            $aWhere = array(
                'sUserId' => $steamId
            );
            $aUpdate = array(
                $banType => true,
                'unixBanTime' => $currentTime,
                'sBannedBy' => $_SESSION['steamid']
            );
            $db->where($aWhere)->update('tUserProfile', $aUpdate);
            return true;
        } else {
            return false;
        }
    }
    public function isBanned($steamId){
        $db = new Database();
        $user = new SiteClass();
        $currentTime = time();
        $checkUser = $user->getUserData($steamId);
        if($checkUser['isBanned'] == 1){
            $difference = $currentTime - $checkUser['unixBanTime'];
            $minutes = $difference / 60;
            if($minutes < 30){
                return $minutes;
            } else {
                $where = array(
                    'steamid' => $steamId
                );
                $update = array(
                    'isBanned' => false,
                    'unixBanTime'   => '',
                    'bannedBy'     => ''
                );
                $db->where($where)->update('users', $update);
                return false;
            }
        } else {
            return false;
        }
    }
    public function unBan($steamId, $type = 'chat or game'){
        $site = new SiteClass();
        $banType = '';
        if($type === 'chat'){
            $banType = 'bIsChatBanned';
        } else {
            $banType = 'bIsGameBanned';
        }
        if($site->isMod($_SESSION['steamid']) === true){
            $db = new Database();
            $aWhere = array(
                'sUserId' => $steamId
            );
            $aUpdate = array(
                $banType => false,
                'sBannedBy' => ''
            );
            $db->where($aWhere)->update('tUserProfile', $aUpdate);
            return true;
        } else {
            return false;
        }
    }
    public function permUser($steamId, $perm = 'Admin/Mod/Verified'){
        $site = new SiteClass();
        if($site->isAdmin($_SESSION['steamid']) === true){
            $db = new Database();
            $aData = array(
                'UserId' => $steamId,
                'RoleName' => $perm
            );
            if($db->insert('tdUserRoles', $aData)){
                return true;
            } else {
                return false;
            }
        }
    }
}