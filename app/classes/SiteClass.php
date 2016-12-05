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
        echo "<a href=\"app/classes/config/logout\" class=\"item hvr-bounce-to-right\"><i class=\"fa fa-caret-square-o-left left\"></i>SIGN OUT</a>";
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
                return "<a href=\"?login\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fa fa-steam-square\"></i> <b>Sign in with Steam</b></a>";
            }

            elseif($openid->mode == 'cancel') {
                echo 'User has canceled authentication!';
            } else {
                if($openid->validate()) {
                    $id = $openid->identity;
                    $ptn = "/^http:\/\/steamcommunity\.com\/openid\/id\/(7[0-9]{15,25}+)$/";
                    preg_match($ptn, $id, $matches);

                    $_SESSION['steamid'] = $matches[1];

                    $url = file_get_contents("http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=23542278D8ACE28CBB14F6B0437FD03C&steamids=".$_SESSION['steamid']);
                    $content = json_decode($url, true);


                    $aUserData = array(
                        'sName' => $content['response']['players'][0]['personaname'],
                        'sAvatar' => $content['response']['players'][0]['avatarfull']
                    );

                    $this->updateUserOnLogin($_SESSION['steamid'], $aUserData);

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
}