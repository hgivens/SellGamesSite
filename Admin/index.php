<?php 
    session_start();
    //session start has to be the very first thing to be writen on a code
    $_SESSION['username']="Sammy";

    if(filter_input(INPUT_GET, 'lo')=='y'){
        //echo"destroy";
        session_unset();
        session_destroy();
    }
    include "./View/db.php";
    $userName = filter_input(INPUT_POST, 'userName');
    echo $userName;
    if($userName){
        echo('vaild');
        $valid = true;
    }else{
        echo("nope");
        $valid=false;
    }

    if($valid){
        $_SESSION['userName']=$userName;
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
    <?php 
        include "../Modle/dataFunction.php";
    ?>
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
        <input type="text" name="userName">
        <input type="text">
        <input type="submit" value="Log In" >

    </form>
</body>
</html>