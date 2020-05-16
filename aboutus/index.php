<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel="icon" href="../assets/favicon.ico">

    <title>Dollar Tree | Home</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

    <!-- Font Awseome CDN-->
    <script src="https://kit.fontawesome.com/fdf7bd5d92.js" crossorigin="anonymous"></script>

     <!-- Custom CSS -->
    <link href='../style/style.css' rel='stylesheet' type='text/css'>
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
                    <img src="../assets/DT-Logo-White.png.webp" alt="DT_Logo" />
                </div>
                <div class="col-md-3 col-12 text-right">
                    <p class="my-md-4 header-links">
                        <a href="../signin/index.php" class="px-2"  onclick="document.getElementById('id01')">Sign In </a>
                        <a href="../createaccount/index.php" class="px-2">Create Account</a>
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
                    <a class="nav-link" href="../index.php">HOME</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="../shop/index.php">SHOP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">ABOUT US<span class="sr-only">(current)</span></a>
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
        <h3 style="color: black; margin-left: 10px;">About Us</h3>
            <p style="margin-left: 10px;">We love to hear from our customers and overwhelmingly the two comments we repeatedly receive are:</p>
            <p class="text-center" style="color:#6cc551;"><strong><i>"I can't believe this cool item I just found at Dollar Tree!" AND...<br/>
            "I can't believe it's only $1.00!"</i></strong></p>
            <p style="margin-left: 10px;">That’s when we know we've done our jobs right! We have worked hard to create an environment where 
            shopping is fun... a place where our customers can discover new treasures every week... a store where
            entire families can enjoy hunting for that special something. Every Dollar Tree store is bright and well
            lit, clean and well organized, and stocked with endless hidden treasures!</p>
            <p style="margin-left: 10px;">Just as important, we continue to offer our customers products they need at extreme values! We carry a
            broad, exciting mix of merchandise that includes many trusted national and regional brands. Some of the
            product departments you'll find at Dollar Tree include housewares, glassware, dinnerware, cleaning
            supplies, candy, snacks, food, health and beauty, toys, gifts, gift bags and wrap, party supplies,
            stationery, craft supplies, teaching supplies, books, seasonal décor, and so much more. Everything you
            need for every day, every holiday, every occasion... and every single item is only $1 (or less)!</p>
            <p style="margin-left: 10px;">The best part is that there is probably a Dollar Tree store near you! We are a national company with 
            thousands of stores conveniently located in shopping centers and malls in all 48 contiguous states. You
            can also shop online for larger quantities of the same items you'd find in our stores, plus check out craft
            and project ideas, take advantage of online exclusives and manufacturer closeouts, watch videos, and join
            our Value Seekers Club to find even more fun and frugal ideas. We invite you to come check us out, compare
            our prices, and stretch your dollars by shopping with us... Discover the <strong style="color:#6cc551;">Dollar Tree Difference!</strong></p>
    </main><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

    <!-- Footer -->
    <footer class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted">Copyright &copy<span id="year"></span><span style="margin-left:200px;">Created by Group3: Adrian Gutierrez, Rudy Martinez, Justin Selsor</span></span>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript" src="../js/main.js"></script>
</body>
</html>