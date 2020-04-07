<?php   

    session_start(); 
    if (empty($_SESSION['recipes'])) {

        $_SESSION['recipes'] = array(); 
    }

?>


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <title>Dinner</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="home-cooking.html">Dickson Cookbook</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="category.php">Vegetables</a>
                        <a class="dropdown-item" href="category.php">Soups</a>
                        <a class="dropdown-item" href="category.php">Sauces, Dips and Condiments</a>
                        <a class="dropdown-item" href="category.php">Sandwiches</a>
                        <a class="dropdown-item" href="category.php">Salads</a>
                        <a class="dropdown-item" href="category.php">Recipes to Try (Untested)</a>
                        <a class="dropdown-item" href="category.php">Misc Recipes</a>
                        <a class="dropdown-item" href="category.php">Meats</a>
                        <a class="dropdown-item" href="category.php">Main Dishes</a>
                        <a class="dropdown-item" href="category.php">Large Crowd Meals</a>
                        <a class="dropdown-item" href="category.php">Instant Pot Recipes</a>
                        <a class="dropdown-item" href="category.php">Dutch Oven Recipes</a>
                        <a class="dropdown-item" href="category.php">Desserts</a>
                        <a class="dropdown-item" href="category.php">Breakfast Food</a>
                        <a class="dropdown-item" href="category.php">Breads</a>
                        <a class="dropdown-item" href="category.php">Appetizers, Beverages</a>
                        <a class="dropdown-item" href="rachel-food.html">Rachel's Items</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <img src='img/plus.png' class='add' style="height: 30px; width:30px;">
            </form>
        </div>
    </nav>

    <?php


    require "dbConnect.php";
    $db = get_db();

  
    $statement = $db->prepare('SELECT *
                              FROM recipe r
                              INNER JOIN category c ON (r.category_id = c.id)');
    $statement->execute();


    while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
        
        $currentRecipe = new stdClass();
        $currentRecipe->title = $row['title'];
        $currentRecipe->ingredients = $row['ingredients'];
        $currentRecipe->instructions = $row['instructions'];
        $currentRecipe->category_name = $row['category_name'];

        array_push($_SESSION['recipes'], $currentRecipe);
    }

    ?> 

    <div class="row">
        <div class='col-md-12'>
            <?php echo '<h2>' . $_SESSION['recipes'][0]->category_name . '</h2>'; ?>
        </div>
    </div>
    <div class="dropdown col-md-12" style="text-align: center">
        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Sub-Categories
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </div>
    <hr class="style-two">

    <div class='row'> <?
    foreach ($_SESSION['recipes'] as $recipe) {
           
        echo "<div class='col-md-6 items'>
                    <div class='row'>
                        <div class='col-md-10 container'>
                            <img src='img/coming.png' class='noImage'>
                            <div class='overlay' style='mb-3'>
                                <div class='text'>
                                    <h4>Prep Time 30 min</h4>
                                </div>
                            </div><h3>"
                            . $recipe->title . 
                        "</h3>
                        </div>
                    </div>
                </div>";
    }
  ?> </div>



    <section class="copyright py-4 bg-light text-center text-dark">
        <small>Copyright &copy; Jordan Dickson 2020</small>
        <br>
    </section>

</body>

<script>
    function sendRecipe() {
        window.location.href('display.php');
    }
</script>

</html>