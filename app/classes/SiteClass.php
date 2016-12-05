<?php
/**
 * Created by PhpStorm.
 * User: Dylan Goodman
 * Date: 04-Dec-16
 * Time: 11:55 PM
 */

require('config/openid.php');
require('config/userInfo.php');

class SiteClass extends Database {
    public function logout(){
        echo "<li> <a href=\"app/classes/config/logout.php\"><i class=\"fa fa-sign-out\"></i> Logout</a> </li>";
    }
    public function login(){
        try {
            require('config/steamConfig.php');

            $openid = new LightOpenID($steamauth['domainname']);

            $button['small'] = "small";
            $button['large_no'] = "large_noborder";
            $button['large'] = "large_border";
            $button = $button[$steamauth['buttonstyle']];

            if(!$openid->mode) {

                if(isset($_GET['login'])) {
                    $openid->identity = 'http://steamcommunity.com/openid';
                    header('Location: ' . $openid->authUrl());
                }

                //return "<form action=\"?login\" method=\"post\"> <input type=\"image\" src=\"http://cdn.steamcommunity.com/public/images/signinthroughsteam/sits_".$button.".png\"></form>";
                return "<a href=\"?login\" class=\"dropdown-toggle\" aria-expanded=\"false\"><i class=\"fa fa-steam-square\"></i> <b>Sign in with Steam</b></a>";
            }

            elseif($openid->mode == 'cancel') {
                echo 'User has canceled authentication!';
            } else {
                if($openid->validate()) {
                    $id = $openid->identity;
                    $ptn = "/^http:\/\/steamcommunity\.com\/openid\/id\/(7[0-9]{15,25}+)$/";
                    preg_match($ptn, $id, $matches);

                    $_SESSION['steamid'] = $matches[1];
                    $_SESSION['addUser'] = false;

                    // First determine of the $steamauth - Not being used['loginpage'] has been set, if yes then redirect there. If not redirect to where they came from
                    if($steamauth['loginpage'] !== "") {
                        $returnTo = $steamauth['loginpage'];
                    } else {
                        //Determine the return to page. We substract "login&"" to remove the login var from the URL.
                        //"file.php?login&foo=bar" would become "file.php?foo=bar"
                        $returnTo = str_replace('login&', '', $_GET['openid_return_to']);
                        //If it didn't change anything, it means that there's no additionals vars, so remove the login var so that we don't get redirected to Steam over and over.
                        if($returnTo === $_GET['openid_return_to']) $returnTo = str_replace('?login', '', $_GET['openid_return_to']);
                    }
                    header('Location: '.$returnTo);
                } else {
                    echo "User is not logged in.\n";
                }

            }
        } catch(ErrorException $e) {
            echo $e->getMessage();
        }
    }

    public function getUserData($steamId){
        $db = new Database();
        $where = array('steamid' => $steamId);
        $result = $db->select()->from('users')->where($where)->fetch_first();
        return $result;
    }

    public function updateUserOnLogin($steamId = 'Steam64Bit ID', $data = 'Data Array!'){
        $db = new Database();
        if(count($this->getUserData($steamId)) != 0){
            $db->where(array('steamid' => $steamId))->update('users', $data);
        } else{
            $aUserAdd = array(
                'steamid'   => $steamId,
                'username'     => $data['username']
            );
            $db->insert('users', $aUserAdd);
        }
    }
}