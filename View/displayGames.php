<?php 
 echo("
 <div class='single_game_display'>
    <h1>{$gameData[0]}</h1>
    <img src='{$gameData[1]}' alt='Game Poster'>
    <h3>Guenre: {$gameData[2]} </h3>
    <h3>Studios: {$gameData[4]} </h3>
    <h3>Player: {$gameData[5]} </h3>
    <h3>Rating: {$gameData[3]} </h3>
    <h3>Consoles: {$gameData[6]} </h3>
    <h3>Year: {$gameData[7]}</h3>
    <h1>Price: {$gameData[8]}</h1>
 </div>
 ");
?>