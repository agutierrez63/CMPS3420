<?php include('connectToDB.php');

$name = "Select name from customers rand() LIMIT 1;";

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
				<p><?php echo $name;?></p>
				<p>1234 Street Ave<br>City, ST 000000</p>
				<p>(800) 555-1234</p>
			</address>
			<span><img alt="" src="./assets/Dollar_Tree_logo_symbol.png"></span>
		</header>
		<article>
			<h1>Recipient</h1>
			<address >
				<p>Dollar Tree<br>c/o John Doe</p>
			</address>
			<table class="meta">
				<tr>
					<th><span >Invoice #</span></th>
					<td><span >101138</span></td>
				</tr>
				<tr>
					<th><span >Date</span></th>
					<td><span >January 1, 2012</span></td>
				</tr>
				<tr>
					<th><span >Amount Due</span></th>
					<td><span id="prefix" >$</span><span>600.00</span></td>
				</tr>
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span >Item</span></th>
						<th><span >Description</span></th>
						<th><span >Rate</span></th>
						<th><span >Quantity</span></th>
						<th><span >Price</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><span >Experience Review</span></td>
						<td><span data-prefix>$</span><span >150.00</span></td>
						<td><span >4</span></td>
						<td><span data-prefix>$</span><span>600.00</span></td>
					</tr>
				</tbody>
			</table>
			<table class="balance">
				<tr>
					<th><span >Total</span></th>
					<td><span data-prefix>$</span><span>600.00</span></td>
				</tr>
				<tr>
					<th><span >Amount Paid</span></th>
					<td><span data-prefix>$</span><span >0.00</span></td>
				</tr>
				<tr>
					<th><span >Balance Due</span></th>
					<td><span data-prefix>$</span><span>600.00</span></td>
				</tr>
			</table>
		</article>
		<aside>
			<h1><span >Additional Notes</span></h1>
			<div>
			</div>
		</aside>
	</body>
</html>
