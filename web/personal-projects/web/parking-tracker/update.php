<?php

    $floor = $_POST['floor'];
    $space = $_POST['space'];

    require("dbConnect.php");
    $db = get_db();

    $sql = 'UPDATE parking '
                . 'SET floor = :floor, '
                . 'space = :space ';
 
        $stmt = $db->prepare($sql);
 
        // bind values to the statement
        $stmt->bindValue(':floor', $floor);
        $stmt->bindValue(':space', $space);
        // update data in the database
        $stmt->execute();
        

    header("Location: parking.php");
    die();


?>