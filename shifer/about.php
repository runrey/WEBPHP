<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About Us</title>
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
			<h1>LLP "SHIFER"</h1>
			<p>LLP "SHIFER" - the largest producer of slate in the territory of the Republic of Kazakhstan. The company is one of the leading industry organizations existing at the moment in the industrial sphere of construction materials of Kazakhstan.</p>
			<p>The company specializes in production of chrysotile cement products. The market of building materials of the country has been operating since 1961.Stable and high quality of products the company guarantees due to the modern organizational and technical level of production, the use of advanced energy and resource-saving technologies, as well as the use of advanced foreign and domestic experience.</p>
			<p>The plant has a favorable geographical location, allowing with the lowest transport costs to deliver products anywhere in Kazakhstan and neighboring countries. Thanks to the effective application of the quality system and its continuous improvement in accordance with the requirements of the consumers of LLP "SHIFER" provided all the conditions for the production of high quality products. Stable quality of products the company guarantees due to the modern organizational and technical level of production, the use of advanced energy and resource-saving technologies, as well as the use of advanced foreign and domestic experience. For the first time, the question of the construction of Semipalatinsk slate plant was raised in 1957, in connection with the completion of the construction of the Semipalatinsk cement plant and the opening of large deposits of chrysotile asbestos in Kazakhstan.</p>
			<p>All production is certified, by production of all production environmentally friendly natural materials extracted and made in the Republic of Kazakhstan is used. Since 2010 the enterprise is certified on compliance of the Integrated management system to requirements of ISO 9001:2008, ISO 14001:2004, ISO OHSAS 18001: 2007. Stability of quality is guaranteed by annual certification of production in" Natseks " and inspection audits of the integrated management system from the company TRANSPARENT CERTIFICATIONS LIMITED.</p>
			<p>LLP "SHIFER" is the diploma holder and the participant of many exhibitions devoted to quality of products, is awarded by diplomas for high quality of products. At the competition "the Best goods of Kazakhstan" in the category "Industrial goods" awarded a diploma for the quality of "asbestos-cement corrugated Sheets".</p>
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