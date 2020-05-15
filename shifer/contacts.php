<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Contacts</title>
	<link rel="SHORTCUT ICON" href="img/favicon.png" type="image/x-icon">
	
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/contacts.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
			<h1>Contact details</h1>
			<table>
				<tr>
				    <td>Adress:</td>
				    <td>Republic of Kazakhstan, East Kazakhstan region,
Semey city, Western industrial hub, 15</td>
				</tr>
				<tr>
				    <td>Reception:</td>
				    <td>+7 (7222) 31-52-49</td>
				</tr>
				<tr>
				    <td>Sales and marketing Department:</td>
				    <td>+7 (7222) 31-53-40</td>
				</tr>
			</table>
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
	<div class="our">
		<div>
			<H1 class="inour" align="center">Our best products</H1>
		</div>
	</div>
	
	<div class="carousel">
		<div id="demo" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="img/8classic.jpg" alt="8-wave slate" width="1100" height="500">
		      <div class="carousel-caption">
		        <h3>Slate 8-wave</h3>
		        <p>Unique in properties and inexpensive roofing material. Due to its wear resistance has gained great popularity among builders</p>
		        <a href="products.php">
					<div class="btn1">
						More details
					</div>
				</a>
		      </div>   
		    </div>
		    <div class="carousel-item">
		      <img src="img/7classic.jpg" alt="7-wave slate" width="1100" height="500">
		      <div class="carousel-caption">
		        <h3>Slate 7-wave</h3>
		        <p>Unique in properties and inexpensive roofing material. Due to its wear resistance has gained great popularity among builders<</p>
		        <a href="products.php">
					<div class="btn1">
						More details
					</div>
				</a>
		      </div>   
		    </div>
		    <div class="carousel-item">
		      <img src="img/6classic.jpg" alt="7-wave slate" width="1100" height="500">
		      <div class="carousel-caption">
		        <h3>Slate 6-wave</h3>
		        <p>Unique in properties and inexpensive roofing material. Due to its wear resistance has gained great popularity among builders<</p>
		        <a href="products.php">
					<div class="btn1" >
						More details
					</div>
				</a>
		      </div>   
		    </div>
			<div class="indic">
					<ul class="carousel-indicators">
			   				<li data-target="#demo" data-slide-to="0" class="active"></li>
			    			<li data-target="#demo" data-slide-to="1"></li>
			    			<li data-target="#demo" data-slide-to="2"></li>
			 		</ul>
			</div>	
		  </div>
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
			    <span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
			    <span class="carousel-control-next-icon"></span>
			</a>
		</div>
	</div>

	<div class="footer">
		<div class="infooter">
			<h6>© 2018 All Rights Not Reserved.</h6>
		</div>
	</div>
</body>
</html>	