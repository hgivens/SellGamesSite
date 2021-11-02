<?php 
    session_start();
    if(!isset($_SESSION['userName'])){
        header("Location: ./");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assests/CSS/styles.css">
    <title>Admin Loged In</title>
</head>
<body>
    <?php
    include "./View/menu.php";
    echo("Welcome Back ".$_SESSION['userName']);
    

    ?>
    <a href="editGames.php"> edit</a>
</body>
</html>