<?php 
 echo("
 <div class='single_game_display'>
    <h1>{$singleGameArry[0]}</h1>
    <img src='{$singleGameArry[1]}' alt='Game Poster'>
    <h3>Guenre: {$singleGameArry[2]} </h3>
    <h3>Studios: {$singleGameArry[4]} </h3>
    <h3>Player: {$singleGameArry[5]} </h3>
    <h3>Rating: {$singleGameArry[3]} </h3>
    <h3>Consoles: {$singleGameArry[6]} </h3>
    <h3>Year: {$singleGameArry[7]}</h3>
    <h1>Price: {$singleGameArry[8]}</h1>
 </div>
 ");
?>