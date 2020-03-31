<?php 
    session_start();
    $recipe = $_SESSION['recipe'];
    echo $recipe;

?>