<?php
    require "connect.php";
    $db = get_db();

    print_r($db);

    foreach ($db->query('SELECT courseCode FROM courses') AS $row) {
        
         echo $row['courseCode']; 

    }
?>