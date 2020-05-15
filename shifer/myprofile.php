<!DOCTYPE html>
<html> 
<head> 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My profile</title>
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
			<h1>My profile</h1>
			<table>
				<tr>
				    <td>Username:</td>
				    <td><?php echo $_COOKIE['username']; ?></td>
				</tr>
				<tr>
				    <td>First name:</td>
				    <td><?php echo $_COOKIE['first_name']; ?></td>
				</tr>
				<tr>
				    <td>Last name:</td>
				    <td><?php echo $_COOKIE['last_name']; ?></td>
				</tr>
				<tr>
				    <td>Email:</td>
				    <td><?php echo $_COOKIE['email']; ?></td>
				</tr>
			</table>
		</div>
	</div>
	<div class="footer">
		<div class="infooter">
			<h6>© 2018 All Rights Not Reserved..</h6>
		</div>
	</div>
</body>
</html>	