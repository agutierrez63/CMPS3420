<?php include ("connectToDB.php");?>
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
<body class="body" id="body">
    <!-- Video Background -->
    <video style="z-index: -1; opacity:0.8;" autoplay muted loop id="myVideo">
    <source src="./images/FoodMarketApplesH264.mov" type="video/mp4">
    Your browser does not support HTML5 video.
    </video>
    <!-- End Tag -->

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">Kitchen & Dining</a>
        <a href="#">Food, Candy & Drinks</a>
        <a href="#">Party Supplies</a>
        <a href="#">Health & Beuty Supplies</a>
        <a href="#">Office & School Supplies</a>
        <a href="#">Toys, Books, Puzzles & Games</a>
        <a href="#">Arts & Crafts Suppies</a>
        <a href="#">Household & Pet Supplies</a>
        <a href="#">Extreme Values & New Arrivals</a>
        <a href="#">Cleaning & Storage</a>
        <a href="#">Seasons & Occasions</a>
        <a href="#">Holidays</a>
        <a href="#">Care Packages</a>
    </div>

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">Florists & Gift Shops</a>
        <a href="#">Weddings, Catering & Events</a>
        <a href="#">Restraunts, Bars & Hospitality</a>
        <a href="#">Car Facilities</a>
        <a href="#">Religious & Nonprofit Organziations</a>
        <a href="#">Cleaning Services</a>
    </div>

    <!-- Nav Bar -->
    <div class="topnav" id="myTopnav">
        <a href="#shopbydepartment" id="department" onclick="openNav()" ><i style="font-size:24px" class="fa">&#xf107;</i> Shop By Department</a>
        <a href="#shopbybusiness" id="business"onclick="openNav()"><i style="font-size:24px" class="fa">&#xf107;</i> Shop by Business</a>
        <div class="topnav-right">
            <a onclick="document.getElementById('id01').style.display='block'" style="width:auto;" href="#login">
            <i style="font-size:24px" class="fa">&#xf090;</i> Login</a>
            <a href="#cart"><i style="font-size:24px" class="fa">&#xf07a;</i> Cart</a>
            <a href="javascript:void(0);" class="icon" onclick="menu()">
            <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
    <!-- End Tag -->

    <!-- Search Bar -->
    <div class="searchBar">
        <img class="logo" id="dt_logo" src="./images/DT-Logo-White.png.webp"><br>
        <input type="text" id="myInput" onkeyup="searchBar()" placeholder="Search for names.." title="Type in a name">
        <?php
        $result = pg_query($db_connection, "select name from items");
        $row = pg_fetch_row($result);
        print number_format($row[0]);
        ?>
        <p id="results"></p><br>
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
        <img src="./images/Dollar_Tree_logo_symbol.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
            
        <button type="submit">Login</button>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me <div style="text-align: right">Not a member? <a href="signup.php">Sign up</a></div>
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

