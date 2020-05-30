<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/74819814fa.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script defer src='tools.js'></script>
    <!--import the bootstrap-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!--import Slick template-->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>

<body>
    <!--Header section-->
    <header>
        <div class="container d-flex py-3 align-items-center">
            <h2 class="text-white">Our Store</h2>
            <div class="ml-auto">
            <?php if(!isset($_SESSION['LoginUser'])) {?>
                <a href="login.php" class="px-2 text-white">Sign in</a>
                <a href="#" class="px-1 text-white">Create an account</a>
            <?php } else { ?>
                <form class="form-inline" method="post" action="logout.php">
                    <div class="text-light mr-3"><?php echo $_SESSION['LoginUser'];?></div>
                    <button name="submit" class="btn btn-outline-light" type="submit">Logout</button>
                </form>
            <?php } ?>
            </div>
        </div>
        <!--Navigation menu-->
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FEATURES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">COLLECTIONS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">SHOP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ABOUT US</a>
                        </li>
                    </ul>
                </div>

                <div class="navbar-nav">
                    <li class="nav-item border rounded-cicle mx-2 search-icon">
                        <i class="fas fa-search p-2"></i>
                    </li>
                </div>

                <div class="navbar-nav">
                    <li class="nav-item border rounded-cicle mx-2 basket-icon">
                        <i class="fas fa-shopping-cart p-2"></i>
                    </li>
                </div>
            </nav>
        </div>
    </header>
    <!--Main section-->
    <main>
        <div class="container-fluid p-0">
            <div class="site-slider">
                <div class="slider-one">
                    <div>
                        <img src="./assets/banner1.jpg" class="img-fluid" alt="Banner 1">
                    </div>
                    <div>
                        <img src="./assets/banner2.jpg" class="img-fluid" alt="Banner 2">
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php echo $_SESSION['LoginUser'];?>

    <script type="text/javascript" src="slick/slick.min.js"></script>
</body>


</html>
