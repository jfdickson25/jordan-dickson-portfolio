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
    <title>Breakfast</title>
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
                            <a class="nav-link" href="">Breakfast</a>
                        </li>
                        <li>
                            <a class="nav-link" href="lunch.php">Lunch</a>
                        </li>
                        <li>
                            <a class="nav-link" href="dinner.php">Dinner</a>
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
            <h1>Breakfast Items</h1>
            <hr class="style-two">
        </div>
    </div>


    <h2>Breakfast</h2>
    <div class="row">
        <div class='col-md-6 items'>
            <div class="row">
                <div class='col-md-10 container'>
                    <img src='img/pancakes.jpg' style='margin-left: auto; margin-right: auto;'>
                    <div class="overlay">
                        <div class="text">
                            <h3>Pancakes</h3>
                            <p>Scrumptious Pancakes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='col-md-6 items'>
            <div class="row">
                <div class='col-md-10 container'>
                    <img src='img/sandwhich.jpg'>
                    <div class="overlay">
                        <div class="text">
                            <h3>Sandwhich</h3>
                            <p>Good ol faithful</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='col-md-6 items'>
            <div class="row">
                <div class='col-md-10 container'>
                    <img src='img/lasanga.jpg'>
                    <div class="overlay">
                        <div class="text">
                            <h3>Lasanga</h3>
                            <p>Lasanga for the whole family</p>
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
</html>