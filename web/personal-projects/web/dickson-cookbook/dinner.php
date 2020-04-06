<?php   

    session_start(); 

    $_SESSION['recipe'] = 'This is the recipe';

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
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <img src='img/plus.png' class='add' style="height: 30px; width:30px;">
            </form>
        </div>
    </nav>

    <div class="row">
        <div class='col-md-12'>
            <h1>Dinner Items</h1>
        </div>
    </div>
    <div class="dropdown col-md-12" style="text-align: center">
        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Sub-Categories
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </div>
    <hr class="style-two">

    <h2>Healthy Choices</h2>
    <div class="row">
        <div class='col-md-6 items'>
            <div class="row">
                <div class='col-md-10 container'>
                    <img src='img/Quinoa.jpg'>
                    <div class="overlay" onclick="<?php $_SESSION['recipe'] = 'We have changed the recipe' ?>">
                        <div class="text">
                            <h3>Vegan Tumeric Quinoa Power Bowls</h3>
                            <p>Healthy and delicious!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='col-md-6 items'>
            <div class="row">
                <div class='col-md-10 container'>
                    <img src='img/Harissa.jpg'>
                    <div class="overlay">
                        <div class="text">
                            <h3>Harissa Sweet Potato Pita Pockets</h3>
                            <p>When hankering for sweet potatoe go harissa!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='col-md-6 items'>
            <div class="row">
                <div class='col-md-10 container'>
                    <img src='img/Mahi-Mahi.jpg'>
                    <div class="overlay">
                        <div class="text">
                            <h3>Garlicky Lemon Mahi-Mahi</h3>
                            <p>Can't go wrong with lemon and Garlick!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='col-md-6 items'>
            <div class="row">
                <div class='col-md-10 container'>
                    <img src='img/beef-tacos.jpg'>
                    <div class="overlay">
                        <div class="text">
                            <h3>Pineapple Poblano Beef Tacos</h3>
                            <p>Quick easy taco recipe</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <h2 id='dinner'>Burgers</h2>
    <div class="row">
        <div class='col-md-6 items'>
            <div class="row">
                <div class='col-md-10 container'>
                    <img src='img/gouda-burger.jpg'>
                    <div class="overlay">
                        <div class="text">
                            <h3>Smoked Gouda Burgers</h3>
                            <p>Great twist to a traditional burger</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='col-md-6 items'>
            <div class="row">
                <div class='col-md-10 container'>
                    <img src='img/turkey-burger.jpg'>
                    <div class="overlay">
                        <div class="text">
                            <h3>Best Ever Turkey Burger</h3>
                            <p>A great substitution for beef</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='col-md-6 items'>
            <div class="row">
                <div class='col-md-10 container'>
                    <img src='img/coming.png' class='noImage'>
                    <div class="overlay">
                        <div class="text">
                            <h3>Garlicky Lemon Mahi-Mahi</h3>
                            <p>Can't go wrong with lemon and Garlick!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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