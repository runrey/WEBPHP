<?php
	$link = mysqli_connect('localhost', 'root', '', 'site') OR DIE('ERROR: Could not connect.');
	
	session_start();
	
	error_reporting(0);
	$id = $_GET["id"];
	$action = $_GET["action"];
	
	switch ($action) {
	
		case "clear":
		$clear = mysqli_query($link, "DELETE FROM orders WHERE user_id = {$_COOKIE['user_id']}");
		break;
		
		case "delete":
		$delete = mysqli_query($link, "DELETE FROM orders WHERE order_id = '$id' and user_id = {$_COOKIE['user_id']}");
		break;
		
		case "orderit":
		$orderit = mysqli_query($link, "UPDATE orders SET isOrdered = 'Yes' WHERE user_id = {$_COOKIE['user_id']}");
		header("Location: index.php?action=orderit");
		break;
		
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shopping cart</title>
	<link rel="SHORTCUT ICON" href="img/favicon.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/cart.css">
	<script type="text/javascript" src="/js/jquery-1.8.2.min.js"></script> 
    <script type="text/javascript" src="/js/shop-script.js"></script>
</head>
<body>
	<header>
		<div class="top_line">
			<div>
				<a href="index.php" class="logo"><img src="img/logo.png"></a>
			</div>
			<?php
				if(empty($_COOKIE['username'])) {
			?>
				<div class="reg_auth">
					<a href="login.php">
						<div class="btn">
							Login
						</div>
					</a>
					<a href="reg.php">
						<div class="btn">
							Signup
						</div>
					</a>
				</div>
			<?php
				}
				else {
			?>
					<div class="plogo">	
						<p><a href="myprofile.php" >My profile(<?php echo $_COOKIE['username']; ?>)</a></p>
						<p><a href="exit.php" >Logout</a></p>
					</div>
			<?php	
				}
			?>
		</div>
		
		<nav>
			<div class="topnav">
				<a href="index.php">HOME</a>
				<a href="about.php">About Us</a>
				<a href="products.php">Products</a>
				<a href="contacts.php">Contacts</a>
			</div>
		</nav>
	</header>
	<div class="container">
	<?php
	$result = mysqli_query($link, "SELECT * FROM orders, products WHERE orders.user_id = {$_COOKIE['user_id']} AND products.prod_id = orders.prod_id");
	if (mysqli_num_rows($result) > 0){
		$all_price = 0;
		$row = mysqli_fetch_array($result);
		echo '
		<div class="cart">
			<div class="cart1">Name</div>
			<div class="cart2">Color</div>
			<div class="cart3">Amount</div>
			<div class="cart4">Price</div>
			<div class="cart5"><a href="cart.php?action=clear">Clear</a></div>
		</div>
		';
		do{
		$int = $row["price"] * $row["quantity"];
		$all_price = $all_price + $int;
		$ip = $row["order_id"];
		
		echo'
		<div class="cart-items">
			<div class="carti1">
				<p>'.$row["prod_name"].'</p>
			</div>
			<div class="carti2">
				<p>'.$row["prod_color"].'</p>
			</div>
			<div class="carti3">
				<p align="center">'.$row["quantity"].'</p>	
			</div>
			<div class="carti4" id="tovar'.$row["order_id"].'">
				<h5><span class="span">'.$row["quantity"].'</span><span> x </span><span>'.$row["price"].'</span></h5><p price="'.$row["price"].'">'.$int.'</p>
			</div>
			<div class="carti5">
				<a href="cart.php?id='.$ip.'&action=delete"><span>Delete</span></a>
			</div>
		</div>
		';
		}
		while ($row = mysqli_fetch_array($result));
		echo '
			<h2 class="total" align="right">Total: <strong>'.$all_price.'</strong> $</h2>
			<a style="text-decoration: none" href="cart.php?action=orderit"><div class="trr">Order now!</div></a>
		';
		}
		else{
			echo'<h3 align="center"  class="empty">Cart is empty</h3>';
		}
	?>
		

	</div>

	<div class="footer">
		<div class="infooter">
			<h6>© 2018 All Rights Not Reserved.</h6>
		</div>
	</div>
</body>
</html>		