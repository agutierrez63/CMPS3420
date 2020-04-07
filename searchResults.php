<?php include ('connectToDB.php');

$output = '';

if(isset($_POST['search'])) {
    $search_query = $_POST['search'];
    $search_query = preg_replace("#[^0-9a-z]#i", "", $search_query);
    
    $query = pg_query("SELECT * FROM items WHERE name LIKE '%$search_query%'") or die("Search not available!");
    $count = pg_num_rows($query);
    if($count == 0) {
        $output = "No match results found";
    } else {
        while($row = pg_fetch_array($query)) {
            $name = $row['name'];
            $id = $row['id'];
            $output .= '<div>'.$fname.'</div>';
        }
    }
}
?>