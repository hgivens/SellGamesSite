<?php
/*
~~Game editing~~
Author: Hannah 
this page will allow athorised admin to edit the games on the data base


*/

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
    <title>Document</title>
</head>
<body>
    <h1>Edit Gmaes </h1>
    
</body>
</html>