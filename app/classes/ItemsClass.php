<?php
/**
 * Created by PhpStorm.
 * User: Dylan Goodman
 * Date: 02-Jan-17
 * Time: 8:54 PM
 */

class ItemsClass extends Database {
    public function getInventoryById($id)
    {
        //$id="76561198139634544"; //test
        //$id="76561198168850067"; //bot1_opskins
        //$id="76561198173383125"; //bot2_opskins
        //$id = $_SESSION['steamid'];
        //$id="76561198096354242";

        $url = 'http://steamcommunity.com/profiles/'.$id.'/inventory/json/730/2';

        $json = file_get_contents($url);
        $inventoryObj = json_decode($json);

        return $inventoryObj;
    }
}