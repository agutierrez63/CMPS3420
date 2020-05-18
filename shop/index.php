<?php include('../connectToDB.php'); ?>
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
                        <?php
                        if(isset($_SESSION['email'])) { ?>
                            <a href="#" class="px-2">Welcome <strong><?php echo $_SESSION['email']; ?></strong></a>
                            <a href="index.php?logout='1'" style="color: red;" text-dectoration:none;>Logout</a>
                        <?php } else { ?>
                            <a href="../signin/index.php" class="px-2">Sign In </a>
                            <a href="../createaccount/index.php" class="px-2">Create Account</a>
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
                    <a class="nav-link" href="../index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php" >SHOP<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../aboutus/index.php">ABOUT US</a>
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

    <?php
    $result = pg_query($db_connection, "SELECT id, name, purchase_price, sales_price FROM items ORDER BY id ASC LIMIT 10");
    while($row = pg_fetch_assoc($result)) {

    ?>
    <div class="col-sm-4 col-md-3">
        <form method="POST" action="index.php?action=add&id=<?php echo $row['id'];?>" >
        <div style="border: 1px solid #333; background-color: #f1f1f1; border-radius: 5px; padding: 16px;">
            <img src="../assets/no_image.jpg" style="height: 30%; width: 90%" class="img-responsive">
            <p style="margin: 0;"><?php echo $row['name']?></p>
            <p style="margin: 0;">$<?php echo $row['purchase_price']?>0</p>
            <input type="text" name="quantity" class="form-control" value="1">
            <input type="hidden" name="hidden_name" value="<?php echo $row['name']?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row['purchase_price']?>">
            <input type="submit" name="add_to_cart" style="margin-top: 5px; margin-left: 1px;" class="btn btn-success" value="Add To Cart">
        </div>
        </form>
    </div>
    <?php
    }
    ?>
    <div style="clear:both"></div>
    <br />
    <div class="table-responsive">
    <table class="table">
    <tr><th colspan="5"><h3 style="color:#000;">Order Details</h3></th></tr>
    <tr>
      <th style='color: #000' width="40%">Product Name</th>
      <th style='color: #000' width="10%">Quantity</th>
      <th style='color: #000' width="20%">Price</th>
      <th style='color: #000' width="15%">Total</th>
    </tr>
    <?php
      if(!empty($_SESSION['shopping_cart'])):
        $total = 0;
        foreach($_SESSION['shopping_cart'] as $key => $row):
    ?>
    <tr>
      <td style='color: #000'><?php echo $row['item_name']; ?></td>
      <td style='color: #000'><?php echo $row['item_quantity']; ?></td>
      <td style='color: #000'>$ <?php echo number_format($row['item_price'], 2); ?></td>
      <td style='color: #000'>$ <?php echo number_format($row['item_quantity'] * $row['item_price'], 2); ?></td>
      <td style='color: #000'>
        <a href="index.php?action=delete&id=<?php echo $row['item_id']?>">
            <div class="btn-danger">Remove</div>
        </a>
      </td>
    </tr>
    <?php
        $total = $total + ($row['item_quantity'] * $row['item_price']);
        endforeach;
    ?>
    <tr>
      <td style='color: #000' colspan="3" align="right">Total</td>
      <td style='color: #000' align="right">$ <?php echo number_format($total, 2); ?></td>
      <td></td>
    </tr>
    <tr>
      <!-- Show checkout button only if the shopping cart is not empty -->
      <td colspan="5">
      <?php
        if (isset($_SESSION['shopping_cart'])):
        if (count($_SESSION['shopping_cart']) > 0):
      ?>
      <a href="../invoice.php" class="button" style="color:#000;">Proceed to Checkout</a>
      <?php endif; endif; ?>
      </td>
    </tr>
    <?php
      endif;
    ?>
    </table>
    </div>

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