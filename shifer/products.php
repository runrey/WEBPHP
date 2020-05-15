<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Products</title>
	<link rel="SHORTCUT ICON" href="img/favicon.png" type="image/x-icon">
	
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/contacts.css">
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

	<div class="container1">
		<h1>Our Products</h1>
		<div class="incontainer1">
			<a href="8.php">
				<div class="prod">
					<img src="img/8classic.jpg" alt="8-wave slate" width="489px" height="165">
					<div class="descrpt">
						<h3>Slate 8-wave</h3>
						<p>Number of waves 8
						Dimensions: W 1 130mm × L 1 750mm
						Thickness: 5.8mm
						Usable area: 1.57m2
						Weight: 26.1kg</p>
						<p>Has 6 color options</p>
					</div>
				</div>
			</a>
			<a href="7.php">	
				<div class="prod">
					<img src="img/7classic.jpg" alt="7-wave slate"  width="489px" height="165">
					<div class="descrpt">
						<h3>Slate 7-wave</h3>
						<p>Number of waves 7
						Dimensions: W 980mm × L 1 750mm
						Thickness: 5.8mm
						Usable area: 1.336m2
						Weight: 23.2kg</p>
						<p>Has 6 color options</p>
					</div>
				</div>
			</a>
			<a href="6.php">	
				<div class="prod">
					<img src="img/6classic.jpg" alt="6-wave slate"  width="489px" height="165">
					<div class="descrpt">
						<h3>Slate 6-wave</h3>
						<p>Number of waves 6
						Dimensions: W 1 097mm × L 1 750mm
						Thickness: 5.8mm
						Usable area: 1.6m2
						Weight: 25.0kg</p>
						<p>Has 6 color options</p>
					</div>
				</div>
			</a>	
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