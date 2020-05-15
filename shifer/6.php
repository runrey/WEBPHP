<?php
		$link = mysqli_connect('localhost', 'root', '', 'site') OR DIE('ERROR: Could not connect.');
		error_reporting(0);
		$id = $_GET["id"];
		
		
		$result = mysqli_query($link, "SELECT * FROM orders WHERE user_id = {$_COOKIE['user_id']} AND prod_id = '$id'");
If (mysqli_num_rows($result) > 0)
{
$row = mysqli_fetch_array($result);    
$new_count = $row["quantity"] + 1;
$price = $row["total_price"] / $row["quantity"];
$total_price = $new_count * $price;
$update = mysqli_query($link, "UPDATE orders SET quantity = '$new_count', total_price = '$total_price' WHERE user_id = {$_COOKIE['user_id']} AND prod_id ='$id'");  
}
else
{
    $result = mysqli_query($link, "SELECT * FROM products WHERE prod_id = '$id'");
    $row = mysqli_fetch_array($result);
    
    		mysqli_query($link, "INSERT INTO orders(prod_id, user_id, quantity, total_price, isOrdered)
						VALUES(	
                            '".$row['prod_id']."',
                            '{$_COOKIE['user_id']}',					
							'1',
                            '".$row["price"]."',
							'No'                                           
						    )");				
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>6-wave slate</title>
	<link rel="SHORTCUT ICON" href="img/favicon.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/slates.css">
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
						<p><a href="cart.php">Shopping cart</a></p>
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
		<div class="incontainer">
			<h1>6-wave slate</h1>
			<img src="img/8classic.jpg" alt="8-wave slate in gray color"/>
			<h3>6-wave slate</h3>
			<p>
	 			A distinctive feature of the six-wave slate sheet with a wave height of 51 mm and a wave pitch of 177 mm is the presence of asymmetric edges. Asymmetric edges are convenient because only half of the wave is overlapped during the installation process and the efficiency of using the sheet area is increased.
			<br>
				Six-wave slate is 5.2 mm or 6.0 mm thick. Sheet thickness of 5.2 mm is lighter than sheet thickness of 6.0 mm by about 3 kg, which facilitates installation work, and most importantly, reduces the cost of slate. At the same time, slate sheets with reduced thickness retain strength indicators.
			<br>
	 			Six-wave sheets are manufactured on modern equipment, which provides a smooth surface and accurate geometric dimensions.
			</p>
			<h2>TECHNICAL SPECIFICATIONS AND DIMENSIONS 8 - WAVE SLATE</h2>
			<table class="specs-table">
				<tr>
					<th>
						Wave height
					</th>
					<th>
						Wave step
					</th>
					<th>
						Wave step
					</th>
					<th>
						Length
					</th>
					<th>
						Thickness
					</th>
					<th>
						Mass
					</th>
					<th>
						Usable area
					</th>
				</tr>
				<tr>
					<td>
						51 mm
					</td>
					<td>
						177 mm
					</td>
					<td>
						1097 mm
					</td>
					<td>
						1750 mm
					</td>
					<td>
						5.2 mm
						<br>
					 	<br>
						6.0 mm
					</td>
					<td>
						21.6 kg 
						<br>
					 	<br>
						25.0 kg
					</td>
					<td>
						1.6 m<sup>2</sup>
					</td>
				</tr>
			</table>
			<h2>ASSORTMENT</h2>
			<p>
				The plants produce 6-wave slate in both standard colour (grey) and coloured. The main colors are blue, green, red, orange and brown.
			</p>
			<h2>APPLICATION</h2>
			<p>
				Sheets of six-wave slate with a thickness of 6.0 mm is advisable to use in regions with high snow and wind load. Sheets with reduced thickness (5.2 mm) can be used in residential construction.
			</p>
			<?php
				if(empty($_COOKIE['username'])) {
			?>
			<a style="text-decoration:none" class="baton" href="6.php?id=3"">Add to cart</a>
			<?php } ?>	
		</div>
	</div>
	
	<div id="navbar">
		<a href="index.php">HOME</a>
		<a href="about.php">About Us</a>
		<a href="products.php">Products</a>
		<a href="contacts.php">Contacts</a>
	</div>
	<script>
	// When the user scrolls down 170px from the top of the document, slide down the navbar
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	    if (document.body.scrollTop > 170 || document.documentElement.scrollTop > 170) {
	        document.getElementById("navbar").style.top = "0";
	    } else {
	        document.getElementById("navbar").style.top = "-130px";
	    }
	}
	</script>
	
	<div class="footer">
		<div class="infooter">
			<h6>© 2018 All Rights Not Reserved.</h6>
		</div>
	</div>
</body>
</html>	