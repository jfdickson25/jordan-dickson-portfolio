<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A web application to help me know where I parked.">
    <meta name="author" content="Jordan Dickson">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="parking.css">
</head>

<?php
    require "dbConnect.php";
    $db = get_db();

    $statement = $db->prepare('SELECT floor, space
                              FROM parking');
    $statement->execute();

    $row = $statement->fetch(PDO::FETCH_ASSOC)

?>


<title>Parking Spot:</title>

<html>

<body>
    <div class="info mb-3">
        <h1>Floor:</h1>
        <p class="num"><?= $row['floor']?></p>
        <br>
        <br>
        <h1 style="background-color: #7395AE;">Space:</h1>
        <p class="num"><?= $row['space']?></p>
    </div>
    <br>

    <form class="mt-3" action="update.php" method="POST">
        <p class="mt-3 text">New Floor</p>
        <input name="floor" type="number" min="1" max="5" required>
        <br>
        <p class="mt-3 text">New Space</p>
        <input name="space" type="number" min="1" max="600" required>
        <br>
        <button class="btn btn-info mt-3 mb-5" type="submit">Update</button>
    </form>

    <?php

        $statement2 = $db->prepare('SELECT location
                                FROM parkingoncampus');
        $statement2->execute();

        $row2 = $statement2->fetch(PDO::FETCH_ASSOC)
    ?>

    <div class="info">
        <h1>Location on Campus</h1>
        <p class="num"><?= $row2['location']?></p>
        <br>
    </div>

    <form action="update2.php" method="POST">
        <p class="mt-3 text">New Location</p>
        <select id="location" name="location">
            <option value="off campus">off campus</option>
            <option value="1-back">1-back</option>
            <option value="1-middle">1-middle</option>
            <option value="1-front">1-front</option>
            <option value="2-back">2-back</option>
            <option value="2-middle">2-middle</option>
            <option value="2-front">2-front</option>
            <option value="3-back">3-back</option>
            <option value="3-middle">3-middle</option>
            <option value="3-front">3-front</option>
            <option value="4-back">4-back</option>
            <option value="4-middle">4-middle</option>
            <option value="4-front">4-front</option>
        </select>
        <br>
        <button class="btn btn-info mt-3 mb-5" type="submit">Update</button>
    </form>
</body>

</html>