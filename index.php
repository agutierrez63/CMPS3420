<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link href='./style/style.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="./scripts/main.js"></script>
</head>
<body>
    <!-- Video Background -->
    <video autoplay muted loop id="myVideo">
    <source src="./images/FoodMarketApplesH264.mov" type="video/mp4">
    Your browser does not support HTML5 video.
    </video>
    <!-- End Tag -->

    <!-- Nav Bar -->
    <div class="topnav" id="myTopnav">
        <a onclick="myFunction()" href="#department"><i style="font-size:24px" class="fa">&#xf107;</i> Shop By Department</a>
        <a href="#business"><i style="font-size:24px" class="fa">&#xf107;</i> Shop by Business</a>
        <div class="topnav-right">
            <a onclick="document.getElementById('id01').style.display='block'" style="width:auto;" href="#login">
            <i style="font-size:24px" class="fa">&#xf090;</i> Login</a>
            <a href="#cart"><i style="font-size:24px" class="fa">&#xf07a;</i> Cart</a>
            <a href="javascript:void(0);" class="icon" onclick="menu()">
            <i class="fa fa-bars"></i>
            </a>
        </div>
        <img class="logo" id="dt_logo" src="./images/DT-Logo-White.png.webp">
    </div>
    <!-- End Tag -->

    <!-- Main Body Tag -->
    <div class="content">
    </div>
    <!-- End Tag -->

    <!-- Log in Form -->
    <div id="id01" class="modal">
    <form class="modal-content animate" action="/action_page.php" method="post">
        <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="./images/Dollar_Tree_logo_symbol.png" alt="Avatar" style="height:100px; width:200px;"class="avatar">
        </div>

        <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
            
        <button type="submit">Login</button>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me <div style="text-align: right">Not a member? <a href="signup.php">sign up</a></div>
        </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password? </a></span>
        </div>
    </form>
    </div>
    <!-- End Tag -->
</body>
</html>

