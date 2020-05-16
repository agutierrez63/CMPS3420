<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel="icon" href="./assets/favicon.ico">

    <title>Dollar Tree | Home</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

    <!-- Font Awseome CDN-->
    <script src="https://kit.fontawesome.com/fdf7bd5d92.js" crossorigin="anonymous"></script>

     <!-- Custom CSS -->
    <link href='style/style.css' rel='stylesheet' type='text/css'>
</head>

<body>
    <!-- Header-->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-12 col-12">
                    <div class="btn-group">
                        <button class="btn border dropdown-toggle my-md-4 my-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language Translate</button>
                        <div class="dropdown-menu">
                            <a href="#translateSpanish" class="dropdown-item" onclick="googleTranslateElementInit()" id="google_translate_element"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-12 text-center">
                    <img src="./assets/DT-Logo-White.png.webp" alt="DT_Logo" />
                </div>
                <div class="col-md-3 col-12 text-right">
                    <p class="my-md-4 header-links">
                        <?php if(!isset($_SESSIOIN['full_name'])) {
                            $_SESSION['msg'] = "You must sign in first";
                        }
                        ?>
                        <?php if(isset($_SESSION['full_name'])) { ?>
                            <a href="#" class="px-2" name="login_status"><?php echo $_SESSION['full_name']?></a>
                            <a href="./account/index.php" class="px-2" name="account"><?php echo 'View Account'; ?></a>
                        <?php } else { ?>
                            <a href="./signin/index.php" class="px-2" name="login_status">Sign in</a>
                            <a href="./createaccount/index.php" class="px-2" name="login_status">Create Account</a>
                        <?php } ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./shop/index.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    SHOP
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./aboutus/index.php">ABOUT US</a>
                </li>
                </ul>
            </div>
            <div class="navbar-nav">
                <li class="nav-item border rounded-cicle mx-2 basket-icon">
                    <i class="fas fa-shopping-basket p-2"></i>
                </li>
            </div>
        </nav>
        </div>
    </header>

    <!-- Main -->
    <main>
        <!-- First Slider --> 
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 80%; margin: 0 auto;">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="./assets/image1.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Let Us Help You</h5>
                        <a href="./shop/index.php"><button type="button" class="btn btn-success">Shop Now</button></a>
                    </div>
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="./assets/image2.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Make Family Time Fun This Spring</h5>
                    </div>
                </div>

                <div class="carousel-item">
                <img class="d-block w-100" src="./assets/image3.png" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>As An Essential Business We're Here to Serve Your Needs</h5>
                        <p style="color:white"><strong>Dollar Tree: Everything is a $1</strong></p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div><br/>

        <div class="container-info">
            <h3><strong>Online Ordering Is Now Available Again & We're Excited to Serve You!</strong></h3>
            <p>Shop online now and ship via UPS to your home or business, or choose free shipping to your store.</p>
            <p><i>Due to current conditions, some products remain temporarily unavailable for online ordering, but may be available in stores.</i></p>
        </div><br/>
        <div class="text-center">
            <div class="row" style="width:100%">
                <div class="sm-col" style="margin: 0 100px 0 420px">
                    <h4 class="text-center">Toys</h4>
                    <div class="overlay-container">
                        <img src="./assets/toys.jpg" class="img-thumbnail text-center rounded" alt="Avatar">
                        <div class="middle">
                            <div class="overlay-text"><a style="text-decoration: none;" href="./shop/index.php">Shop Now</a></div>
                        </div>
                    </div>
                </div>
                <div class="sm-col">
                    <h4 class="text-center">Drinks</h4>
                    <div class="overlay-container">
                        <img src="./assets/drinks.jpg" class="img-thumbnail text-center rounded" alt="Avatar">
                        <div class="middle">
                            <div class="overlay-text"><a style="text-decoration: none;" href="./shop/index.php">Shop Now</a></div>
                        </div>
                    </div>
                </div>
                <div class="sm-col" style="margin: 0 100px;">
                    <h4 class="text-center">Toiletry</h4>
                    <div class="overlay-container">
                        <img src="./assets/toiletry.jpg" class="img-thumbnail text-center rounded" alt="Avatar">
                        <div class="middle">
                            <div class="overlay-text"><a style="text-decoration: none;" href="./shop/index.php">Shop Now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><br/>

    <!-- Footer -->
    <footer class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted">Copyright &copy<span id="year"></span><span style="margin-left:200px;">Created by Group3: Adrian Gutierrez, Rudy Martinez, Justin Selsor</span</span>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript" src="./js/main.js"></script>
</body>
</html>