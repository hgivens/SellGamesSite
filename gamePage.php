<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="Assests/CSS/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <?php 
         include "./Modle/dataFunction.php";

         $action = filter_input(INPUT_GET, 'action');       
         if ($action==NULL) $action = filter_input(INPUT_POST,'action');
         $game_ID = filter_input(INPUT_GET, 'game_id');
         
    ?>
</head>
<body>
<!-- <form action='' method='get'>
                    <button href='?action=clickedGame' value='{$GameArry[3]}' id='game_ID'>See More</button>
                </form> -->
    <?php 
        $Games = pullGames();
        foreach($Games as $GameArry){
            
            
            echo("
            <div class='frt_game_display'>
                <h1>{$GameArry[0]}</h1>
                <img src='{$GameArry[1]}' alt='Game Poster'>
                <h1>Price: {$GameArry[2]}</h1> 
                <p>{$GameArry[3]}</p>
                
                 <a method='get' href='?action=clickedGame' value='{$GameArry[3]}' name='game_id'>See More</a> 

            </div>
            ");
            
        }

        switch ($action){
            //this will display the single game once clicked 
            case "clickedGame":

                echo"$game_ID";
                
                $singleGameArry = gameAlone($game_ID);
                foreach ($singleGameArry as $gameData){
                    include "./View/displayGames.php";
                }
                
                break;
            case "default":
                break;
            }
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>