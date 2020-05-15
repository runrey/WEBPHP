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
	<title>8-wave slate</title>
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
			<h1>8-wave slate</h1>
			<img src="img/8classic.jpg" alt="8-wave slate in gray color"/>
			<h3>8-wave slate</h3>
			<p>
	 			Eight-wave slate is a standard roofing sheet, which is used in construction in our country for more than 60 years. It has symmetric edges, that requires the overlap of the sheets on the basis of SP 17.13330.2011 of the Roof. Updated version of SNiP II-26-76.  The wave height of this profile is 40 mm and the wave pitch is 150 mm. the Standard thickness is 4.7; 5.2; 5.8 mm.
			<br>
				Lightweight vosmiballnogo slate sheet with a thickness of 4.7; 5.2 mm easier sheet with a thickness of 5.8 mm, which reduces the cost of slate and simplifies installation. In this case, slate sheets with reduced thickness retain all the key properties of this product, and the strength is also superior to other roofing materials. 
			<br>
	 			Eight-wave sheets are manufactured on modern equipment, which provides a smooth surface and accurate geometric dimensions.
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
						40 mm
					</td>
					<td>
						150 mm
					</td>
					<td>
						1130 mm
					</td>
					<td>
						1750 mm
					</td>
					<td>
						4.7 mm
						<br>
						<br>
						5.2 mm
						<br>
					 	<br>
						5.8 mm
					</td>
					<td>
						21.2 kg 
						<br>
					 	<br>
						23.4 kg
						<br>
						<br>
						26.1 kg
					</td>
					<td>
						1.57 m<sup>2</sup>
					</td>
				</tr>
			</table>
			<h2>ASSORTMENT</h2>
			<p>
				8-wave slate is available as a conventional gray color in the unpainted version, and in standard colors: Indigo (blue), green, chocolate, orange and red. Painted in the factory, slate is more resistant to the negative effects of the weather. Coating without loss of its properties lasts up to 6-7 years.
			</p>
			<h2>APPLICATION</h2>
			<p>
				The sheet of greater thickness is used in regions with high snow and wind load. A thinner sheet should be used in temperate zones.
				<br>
				Sheets of eight-wave slate are mainly used in residential low-rise construction to cover the roofs of private and apartment buildings, cottages, townhouses, non-residential buildings (gazebos, garages, etc.).
			</p>
			<?php
				if(empty($_COOKIE['username'])) {
			?>
			<a style="text-decoration:none" class="baton" href="8.php?id=1"">Add to cart</a>
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