<?php include("../connectToDB.php") ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./assets/favicon.ico">

    <title>Dollar Tree | Sign In</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

    <!-- Custom styles for this template -->
    <link href="../style/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="POST" action="index.php">
      <a href="../index.php"><img class="mb-4" src="../assets/Dollar_Tree_logo_symbol.png" alt="Logo" width="160px" height="90px"></a>
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input name="email" type="email" id="email" class="form-control" placeholder="Email address" required autofocus><br />
      <label for="inputPassword" class="sr-only">Password</label>
      <input name="password" type="password" id="password" class="form-control" placeholder="Password" required>
      <button name="login_user" class="btn btn-lg btn-success btn-block" type="submit">Sign in</button>
      <p>Don't have an account?<a href="../createaccount/index.php"> Create an Account</a></p>
      <p class="mt-5 mb-3 text-muted">Copyright &copy; 2020</p>
    </form>
  </body>
</html>