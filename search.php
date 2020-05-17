<?php require_once('connectToDB.php');
include("sortFunctions.php");

$string_match = "";

if(isset($_POST['submit'])) {
  $string_match = pg_escape_string($db_connection, $_POST['search']);
}

if(isset($string_match)) {
  $string_match = pg_escape_string($db_connection, $string_match);
}

$search_sql = "SELECT name FROM items WHERE name LIKE '%".$string_match."%'";

$result = pg_query($search_sql);
?>
<html lang="en">
<head>
<title>Algorithm Analysis | Final Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
  <form class="form-inline" action="search.php" method="POST">
    <div class="form-group mx-sm-3 mb-2">
      <input class="form-control" id="search" name="search" type="text" placeholder="Search...">
    </div>
    <input class="btn btn-info mb-2 "id="submit" name="submit" type="submit" value="Search">
    <br/>
  </form>
  <?php
    while($row = pg_fetch_row($result)) {
      print("<p style='margin: 0 auto 1 20;'>$row[0]</p>\n");
    }
    ?>
</body>
</html>
