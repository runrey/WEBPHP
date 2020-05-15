<?php
$link = mysqli_connect('localhost', 'root', '', 'site') OR DIE('ERROR: Could not connect.');
if(isset($_POST['submit'])){
	$username = mysqli_real_escape_string($link, trim($_POST['username']));
	$first_name = mysqli_real_escape_string($link, trim($_POST['first_name']));
	$last_name = mysqli_real_escape_string($link, trim($_POST['last_name']));
	$email = mysqli_real_escape_string($link, trim($_POST['email']));
	$pass = mysqli_real_escape_string($link, trim($_POST['pass']));
	$pass1 = mysqli_real_escape_string($link, trim($_POST['pass1']));
	if(!empty($username) && !empty($first_name) && !empty($last_name) && !empty($email) && !empty($pass) && !empty($pass1) && ($pass == $pass1)) {
		$query = "SELECT * FROM users WHERE username = '$username'";
		$data = mysqli_query($link, $query);
		if(mysqli_num_rows($data) == 0) {
			if(filter_var($email, FILTER_VALIDATE_EMAIL) == true){
				if(strlen($pass) > 6){
					$query ="INSERT INTO users (username, first_name, last_name, email, pass) VALUES ('$username', '$first_name', '$last_name', '$email', '$pass');";
					mysqli_query($link,$query);
					header("Location: reg.php?signup=success");
					mysqli_close($link);
					exit();
				}
				else {
					header("Location: reg.php?signup=length");
					exit();
				}
			}
			if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
				header("Location: reg.php?signup=email");
				exit();
			}
		}
		else {
			header("Location: reg.php?signup=username");
			exit();
		}
	}
	if(($pass != $pass1)){
		header("Location: reg.php?signup=pass");
		exit();
	}
	if(empty($username) || empty($first_name) || empty($last_name) || empty($email) || empty($pass) || empty($pass1)) {
		header("Location: reg.php?signup=empty");
		exit();
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<META charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	<link rel="stylesheet" href="css/reg.css">
	<link rel="SHORTCUT ICON" href="img/favicon.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
</head>
<body>
	<div class="container">
		<form  method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<a href="index.php"><img src="img/logo.png"></a>
			<h1>Signup</h1>
			<div class="input">
				<input type="text" name="username" placeholder="Username">
			</div>
			<div class="input">
				<input type="text" name="first_name" placeholder="First name">
			</div>
			<div class="input">
				<input type="text" name="last_name" placeholder="Last name">
			</div>
			<div class="input">
				<input type="text" name="email" placeholder="Email">
			</div>
			<div class="input">
				<input type="text" name="pass" placeholder="Password">
			</div>
			<div class="input">
				<input type="text" name="pass1" placeholder="Repeat password">
			</div>
			<button type="submit" name="submit" class="submit">Submit</button>
			
		</form>
		<?php
			if(!isset($_GET['signup'])) {
				exit();
			}
			else {
				$signupCheck = $_GET['signup'];
				if ($signupCheck == "success"){
					header ("Location: index.php?action=signup");
					echo "<script>alert('You have signed up successfully.')</script>";
					exit();
				}
				elseif ($signupCheck == "length"){
					echo "<script>alert('Password is too short, minimum number is 7 letters.')</script>";
					exit();
				}
				elseif ($signupCheck == "email"){
					echo "<script>alert('Invalid email.')</script>";
					exit();
				}
				elseif ($signupCheck == "username"){
					echo "<script>alert('Username already exists.')</script>";
					exit();
				}	
				elseif ($signupCheck == "pass"){
					echo "<script>alert('Password and Repeat password must be same.')</script>";
					exit();
				}		
				elseif ($signupCheck == "empty"){
					echo  "<script>alert('All fields must be filled in.')</script>";
					exit();
				}			
			}
		?>
	</div>
</body>
</html>