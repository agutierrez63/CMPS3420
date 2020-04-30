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
                <div class="col-md-4 col-sm-12 col-12">
                    <div class="btn-group">
                        <button class="btn border dropdown-toggle my-md-4 my-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD</button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">ERU - Euro</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 text-center">
                    <h2 class="my-md-3 site-title primary-color">Dollar Tree Store</h2>
                </div>
                <div class="col-md-4 col-12 text-right">
                    <p class="my-md-4 header-links">
                        <a href="./signin/index.php" class="px-2"  onclick="document.getElementById('id01')">Sign In </a>
                        <a href="./createaccount/index.php" class="px-2">Create Account</a>
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
                    <a class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FEATURES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">COLLECTION</a>
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
                <li class="nav-item border rounded-cicle mx-2 basket-icon">
                    <i class="fas fa-shopping-basket p-2"></i>
                </li>
            </div>
        </nav>
        </div>
    </header>

    <!-- Main -->
    <main>
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
                        <h5>Let us Help You</h5>
                        <p>...</p>
                    </div>
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="./assets/image2.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Find Everyhting You Need At An Instant</h5>
                        <p>...</p>
                    </div>
                </div>

                <div class="carousel-item">
                <img class="d-block w-100" src="./assets/image3.png" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>...</h5>
                        <p>...</p>
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
        </div>
    </main>

    <!-- Footer -->
    <footer>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./scripts/main.js"></script>
</body>
</html>