<?php   

    session_start(); 

    $_SESSION['recipe'] = 'This is the recipe';

?>


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <title>Dinner</title>
</head>
<body>

    <div class='row sticky-top'>
        <div class='col-md-12 container'>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class='col-md-2'>
                    <a class="navbar-brand" href='home-cooking.html'>Dickson Cookbook</a>
                </div>

                <div class='col-md-9' style='text-align:left'>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="breakfast.html">Breakfast</a>
                        </li>
                        <li>
                            <a class="nav-link" href="lunch.html">Lunch</a>
                        </li>
                        <li>
                            <a class="nav-link" href="">Dinner</a>
                        </li>
                    </ul>
            </div>

                <div class='col-md-1' style='text-align:right'>
                    <img src='img/plus.png' class='add' style="height: 30px; width:30px;">
                </div>

            </nav>
        </div>
    </div>

    <div class="row">
        <div class='col-md-12'>
            <h1>Dinner Items</h1>
            <hr class="style-two">
        </div>
    </div>

    <h2>Healthy Choices</h2>
        <div class="row">
            <div class='col-md-6 items'>
                <div class="row">
                    <div class='col-md-10 container'>
                        <img src='img/Quinoa.jpg'>
                        <div class="overlay" onclick='sendRecipe()'>
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