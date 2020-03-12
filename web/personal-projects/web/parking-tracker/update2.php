<?php

    $location = $_POST['location'];

    require("dbConnect.php");
    $db = get_db();

    $sql = 'UPDATE parkingoncampus '
                . 'SET location = :location ';
 
        $stmt = $db->prepare($sql);
 
        // bind values to the statement
        $stmt->bindValue(':location', $location);
        // update data in the database
        $stmt->execute();
        

    header("Location: parking.php");
    die();


?>