<?php 
 $host = "localhost";
 $username = "root";
 $password = "";
 $db_name = "game";
 $db = mysqli_connect($host, $username, $password, $db_name) or die(include "error.php");


//The PullGame function talks to the database to pull up all the games on the database to display them
function pullGames(){
    global $db;
    $mySql = "SELECT GM_TITLE,GM_IMG, GM_PRICE, GM_ID FROM videogame";
    //echo($mySql);
    $myQuery = mysqli_query($db,$mySql);
    $allGameInfo = mysqli_fetch_all($myQuery);
    //print_r($allGameInfo);
    return $allGameInfo;
}
//this function is to pull the id when clicking on read more
function grabID(){
    global $db;
    $mySql = "SELECT GM_ID FROM videogame";
    $myQuery = mysqli_query($db,$mySql);
    $idInfo = mysqli_fetch_all($myQuery);
    return $idInfo;

}

//gameAlone function should pull all data from one game once clicking on read more using the Game ID to pull form the database
function gameAlone($game_id){
    global $db;
    $mySql = "SELECT * FROM videogame WHERE GM_ID = '{$game_id}'";
    //echo($mySql);
    $myQuery = mysqli_query($db,$mySql);
    $gameInfo = mysqli_fetch_all($myQuery);
    print_r($gameInfo);
    return $gameInfo;
}

//addUser should be taking the users from infromation and entering it into the "insert" statment for the database, inreturn making a new customer account
function addUser($cstID,$fname, $lname, $phone, $street, $city, $state, $zip){
    global $db;
    $mySql = "INSERT INTO `customers`( `CUST_ID`,`CUST_F_NAME`, `CUST_L_NAME`, `CUST_PHONE`, `CUST_ST`, `CUST_CITY`, `CUST_STATE`, `CUST_ZIP`) VALUES ( {$cstID},{$fname}, {$lname}, {$phone}, {$street}, {$city}, {$state}, {$zip})";
    echo($mySql);
    $myQuery = mysqli_query($db,$mySql);
    echo"$myQuery";
    
}

//uploadGame lets the admin set a new game on the website through the form in simular fation of the added for the accounts
function uploadGame($gTitle,$gImg,$gGener,$gRating,$gCo,$gPlayer,$gStation,$gYear,$gPrice){
    global $db;
    $mySql = "INSERT INTO `videogame`(`GM_TITLE`, `GM_IMG`, `GM_GENER`, `GM_RATING`, `GM_CO`, `GM_PLAYER`, `GM_STATION`, `GM_YEAR`, `GM_PRICE`) VALUES ('{$gTitle}','{$gImg}','{$gGener}','{$gRating}','{$gCo}','{$gPlayer}','{$gStation}','{$gYear}','{$gPrice}')";
}

//update game should update the exsiting game by pulling it up from the data base and change it. 
function updateGame($gTitle,$gImg,$gGener,$gRating,$gCo,$gPlayer,$gStation,$gYear,$gPrice){
    global $db;
    $mySql = "UPDATE `videogame` SET `GM_TITLE`='{$gTitle}',`GM_IMG`='{$gImg}',`GM_GENER`='{$gGener}',`GM_RATING`='{$gRating}',`GM_CO`='{$gCo}',`GM_PLAYER`='{$gPlayer}',`GM_STATION`='{$gStation}',`GM_YEAR`='{$gYear}',`GM_PRICE`='{$gPrice}' WHERE 1";
}

?>