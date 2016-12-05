<?php
/**
 * Created by PhpStorm.
 * User: Dylan Goodman
 * Date: 05-Dec-16
 * Time: 1:45 AM
 */

$init = $_SERVER['DOCUMENT_ROOT'];
$init .= "/app/appInit.php";
require_once($init);
$chat = new ChatClass();
if(isset($_SESSION['steamid'])){
    $msg = $_POST['msg'];
    $steamId = $_SESSION['steamid'];
    $steamName = $_SESSION['steam_personaname'];
    $steamAva = $_SESSION['steam_avatarfull'];
    $isBanned = $chat->isBanned($steamId);
    try {
        if(empty($msg)){
            throw new Exception('You didn\'t enter anything to be sent!');
        }
        if($isBanned !== false){
            $minutes = 30 - $isBanned;
            throw new Exception('You\'re currently banned for '.round($minutes).' minute(s)');
        }
        $aChatData = array(
            'steamid' => $steamId,
            'username' => $steamName,
            'icon' => $steamAva,
            'msg' => $msg
        );
        if($msgId = $chat->addMsg($aChatData)){
            $cleanMsg = $chat->cleanInput($msg);
            //$userRole = $chat->getRole($steamId);
            echo json_encode(array('success' => true, 'msg' => $cleanMsg, 'userName' => $steamName, 'userAva' => $steamAva, 'userId' => $steamId, 'msgId' => $msgId));
        } else{
            throw new Exception('Something went wrong!');
        }
    } catch(Exception $ex){
        echo json_encode(array(
            'success'   => false,
            'error'     => $ex->getMessage()
        ));
    }
}