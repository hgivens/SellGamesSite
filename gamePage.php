<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="Assests/CSS/styles.css">
    <title>Document</title>
    <?php 
         include "./Modle/dataFunction.php";

         $action = filter_input(INPUT_GET, 'action');       
         if ($action==NULL) $action = filter_input(INPUT_POST,'action');
    ?>
</head>
<body>
    
    <?php 
        $Games = pullGames();
        foreach($Games as $GameArry){
            echo("
            <div class='frt_game_display'>
                <h1>{$GameArry[0]}</h1>
                <img src='{$GameArry[1]}' alt='Game Poster'>
                <h1>Price: {$GameArry[2]}</h1> 

                <a method='get' href='?action=clickedGame'>See More</a>
            </div>
            ");
        }

        switch ($action){
            //this will display the dingle game once clicked 
            case "clickedGame":

               
                
                $singleGameArry = gameAlone(1);
                 echo"$singleGameArry";
                //$singleGameArry = 1;
                include "./View/displayGames.php";
                break;
            case "default":
                break;
            }
    ?>
</body>
</html>