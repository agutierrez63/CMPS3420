<?php require_once('../connectToDB.php') ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./assets/favicon.ico">

    <title>Dollar Tree | Create Account</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

    <!-- Custom styles for this template -->
    <link href="../style/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin border rounded" method="POST" action="index.php">
      <?php include("../errors.php")?>
      <a href="../index.php"><img class="mb-4" src="../assets/Dollar_Tree_logo_symbol.png" alt="" width="160px" height="90px"></a>
      <h1 class="h3 mb-3 font-weight-normal">Create An Account</h1>
      <div class="form-row">
        <div class="col">
          <input type="text" name="f_name" class="form-control" placeholder="First name" autofocus>
        </div>
        <div class="col">
          <input type="text" name="l_name" class="form-control" placeholder="Last name">
        </div>
      </div> <br />
      <label for="inputEmail" class="sr-only">Enter Email</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required>
      <br />
      <label for="password_1" class="sr-only">Enter Password</label>
      <input type="password" name="password_1" id="password_1" class="form-control" placeholder="Password" required>
      <br />
      <label for="password_2" class="sr-only">Re-Enter Password</label>
      <input type="password" name="password_2" id="password_2" class="form-control" placeholder="Re-Enter Password" required>
      <button name="register_user" class="btn btn-lg btn-block btn-success" type="submit">Create Account</button>
      <p>Already a Member?
        <a href="../signin/index.php">Sign in</a>
      </p>
      <p class="mt-5 mb-3 text-muted">Copyright &copy; 2020</p>
    </form>
    <?php pg_close();?>
  </body>
</html>