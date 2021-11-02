<?php
/* 
~~ Customer Admin Page~~
Author: Hannah Givens
Date: 11*1*2021

~~NOTE~~ 
    this page is the admin login using sessions we keep data and using cookies we can carry over data 
    as we want to be able to allow the user edit the shop if they are an admin
*/


    session_start();
    //session start has to be the very first thing to be writen on a code
    $_SESSION['username']="Sammy";
    $_SESSION['password']="pass";

    if(filter_input(INPUT_GET, 'lo')=='y'){
        //echo"destroy";
        session_unset();
        session_destroy();
    }
    include "./View/db.php";
    $userName = filter_input(INPUT_POST, 'userName');
    $password = filter_input(INPUT_POST, 'password');
    echo $userName;
    echo $password;

    if($userName && $password){
        echo('vaild');
        $valid = true;
    }else{
        echo("ERROR");
        $valid=false;
    }

    if($valid){
        $_SESSION['userName']=$userName;
        $_SESSION['password']=$password;
        header("Location: homepage.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assests/CSS/styles.css">
    <title>Admin Games Site</title>
    
</head>
<body>
    <?php
        include "./View/menu.php"   
    ?>
    <h1>Login for Admin</h1>
    <?php 

       // echo($_SESSION['username']);

    ?>
    <form action="./" method="post">
        <label>User Name</label>
        <input type="text" name="userName">
        <label>Password</label>
        <input type="text" name="password">
        <input type="submit" value="Log In" >

    </form>
</body>
</html>