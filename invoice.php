<?php include('connectToDB.php');

$customer = pg_query($db_connection, "SELECT fname, lname, address, phone_number FROM customers ORDER BY RANDOM() LIMIT 1");
$employee = pg_query($db_connection, "SELECT eid, name FROM employees ORDER BY RANDOM() LIMIT 1");
$purchase_order = pg_query($db_connection, "SELECT purchase_id, date_placed, store_id FROM purchase_order ORDER BY RANDOM() LIMIT 1");
$item = pg_query($db_connection, "SELECT id, name, sales_price, purchase_price FROM items ORDER BY RANDOM() LIMIT 10");
$total = pg_query($db_connection, "SELECT SUM(sales_price) AS total FROM items ORDER BY RANDOM() LIMIT 1");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
		<link rel="stylesheet" href="./style/invoice_style.css">
		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
	</head>
	<body>
		<header>
			<h1>Invoice</h1>
			<address >
				<?php 
				while($row = pg_fetch_row($customer)) {
					print("<p>$row[0] $row[1]</p>\n");
					print("<p>$row[2]</p>\n");
					print("<p>$row[3]</p>\n");
				}
				?>
			</address>
			<span><img alt="" src="./assets/Dollar_Tree_logo_symbol.png"></span>
		</header>
		<article>
			<h1>Recipient</h1>
			<address >
				<?php 
				while($row = pg_fetch_row($employee)) {
					print("<p>Assisted By:\n");
					print("<br>Employee ID: $row[0]<br>Name: $row[1]</p>\n");
				}
				?>
			</address>
			<table class="meta">
				<?php
				while($row = pg_fetch_row($purchase_order)) { 
				?>
				<tr>
					<th><span >Order ID #</span></th>
					<td><span ><?php print($row[0]);?></span></td>
				</tr>
				<tr>
					<th><span >Date</span></th>
					<td><span ><?php print($row[1]);?></span></td>
				</tr>
				<tr>
					<th><span >Store ID</span></th>
					<td><span><?php print($row[2]);?></span></td>
				</tr>
				<?php 
				}
				?>
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span >Item ID</span></th>
						<th><span >Name</span></th>
						<th><span >Sales Price</span></th>
						<th><span >Purchase Price</span></th>
					</tr>
				</thead>
				<tbody>
					<?php
					if($item) {
						if(pg_num_rows($item) > 0) {
							while($row = pg_fetch_row($item)) {
					?>
					<tr>
						<td><span ></span><?php print($row[0]); ?></td>
						<td><span ><?php print($row[1]); ?></span></td>
						<td><span data-prefix>$</span><span><?php echo number_format($row[2], 2); ?></span></td>
						<td><span data-prefix>$</span><span><?php echo number_format($row[3], 2); ?></span></td>
					</tr>
					<?php
							}
						}
					}
					?>
				</tbody>
			</table>
			<!--<table class="balance">
				<tr>
					<th><span >Total</span></th>
					<td><span data-prefix>$</span></td>
				</tr>
			</table>-->
		</article>
	</body>
</html>