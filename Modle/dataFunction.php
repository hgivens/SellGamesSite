<?php 
 $host = "localhost";
 $username = "root";
 $password = "";
 $db_name = "game";
 $db = mysqli_connect($host, $username, $password, $db_name) or die(include "error.php");


function pullGames(){
    global $db;
    $mySql = "SELECT GM_TITLE,GM_IMG, GM_PRICE FROM videogame";
    //echo($mySql);
    $myQuery = mysqli_query($db,$mySql);
    $allGameInfo = mysqli_fetch_all($myQuery);
    //print_r($allGameInfo);
    return $allGameInfo;
}

function gameAlone($game_id){
    global $db;
    $mySql = "SELECT * FROM videogame WHERE GM_ID = '{$game_id}'";
    //echo($mySql);
    $myQuery = mysqli_query($db,$mySql);
    $gameInfo = mysqli_fetch_all($myQuery);
    //print_r($gameInfo);
    return $gameInfo;
}

function addUser($fname, $lname, $phone, $street, $city, $state, $zip){
    global $db;
    $mySql = "INSERT INTO `customers`( `CUST_F_NAME`, `CUST_L_NAME`, `CUST_PHONE`, `CUST_ST`, `CUST_CITY`, `CUST_STATE`, `CUST_ZIP`) VALUES ( {$fname}, {$lname}, {$phone}, {$street}, {$city}, {$state}, {$zip})";
    echo($mySql);
    $myQuery = mysqli_query($db,$mySql);
    
}

?>