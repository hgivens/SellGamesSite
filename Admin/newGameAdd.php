<?php
/*
~~Game adding~~
Author: Hannah 
this page will allow athorised admin to add games on the data base


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
    <?php 
         $action = filter_input(INPUT_GET, 'action');       
         if ($action==NULL) $action = filter_input(INPUT_POST,'action');

    include "../Modle/dataFunction.php";
    $upload = uploadGame($gTitle,$gImg,$gGener,$gRating,$gCo,$gPlayer,$gStation,$gYear,$gPrice);

    $gTitle = filter_input(INPUT_POST, 'gTitle');
    $gImg = filter_input(INPUT_POST, 'gImg');
    $gGener = filter_input(INPUT_POST, 'gGener');
    $gRating = filter_input(INPUT_POST, 'gRating');
    $gCo = filter_input(INPUT_POST, 'gCo');
    $gPlayer = filter_input(INPUT_POST, 'gPalyer');
    $gStation = filter_input(INPUT_POST, 'gStation');
    $gYear = filter_input(INPUT_POST, 'gYear');
    $gPrice = filter_input(INPUT_POST, 'gPrice');
    ?>
    <h1>Add New Games</h1>
    
    <form action="" method="post">
        <li><label>Title</label> </li>
        <li><input type="text" name="gTitle"></li>
        <li><label>Image</label> </li>
        <li><input type="text" name="gImg"></li>
        <li><label>Gener</label> </li>
        <li><input type="text" name="gGener"></li>
        <li><label>Rating</label> </li>
        <li><input type="text" name="gRating"></li>
        <li><label>Company</label> </li>
        <li><input type="text" name="gCo"></li>
        <li><label>Players</label> </li>
        <li><input type="text" name="gPlayer"></li>
        <li><label>Station</label> </li>
        <li><input type="text" name="gStation"></li>
        <li><label>Year</label> </li>
        <li><input type="text" name="gYear"></li>
        <li><label>Price</label> </li>
        <li><input type="text" name="gPrice"></li>

        <li><button name="action"> Submit</button></li>
        </form>
    

    <?php 
        switch('action'){
            case 'action':
                $upload;
                echo"Upload is complete";
                break;
            case 'default':
                echo"ERRORS";
                break;
        }
    ?>
    
</body>
</html>