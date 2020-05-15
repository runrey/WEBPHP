<?php
$link = mysqli_connect('localhost', 'root', '', 'site') OR DIE('ERROR: Could not connect.');
if(!isset($_COOKIE['user_id'])) {
	if(isset($_POST['submit'])) {
		$user_username = mysqli_real_escape_string($link, trim($_POST['username']));
		$user_password = mysqli_real_escape_string($link, trim($_POST['pass']));
		if(!empty($user_username) && !empty($user_password)) {
			$query = "SELECT *  FROM users WHERE username = '$user_username' AND pass = '$user_password'";
			$data = mysqli_query($link,$query);
			if(mysqli_num_rows($data) == 1) {
				$row = mysqli_fetch_assoc($data);
				setcookie('user_id', $row['user_id'], time() + (60*60*24*30));
				setcookie('username', $row['username'], time() + (60*60*24*30));
				setcookie('first_name', $row['first_name'], time() + (60*60*24*30));
				setcookie('last_name', $row['last_name'], time() + (60*60*24*30));
				setcookie('email', $row['email'], time() + (60*60*24*30));
				$home_url = 'index.php';
				header('Location: login.php?login=success');
				mysqli_close($link);
				exit();
			}
			else {
				header('Location: login.php?login=notexist');
				exit();
			}
		}
		else {
			header('Location: login.php?login=wrong');
			exit();
		}
	}
}
?>
<!DOCTYPE html>
<html> 
<head> 
	<META charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="css/reg.css">
	<link rel="SHORTCUT ICON" href="img/favicon.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
</head> 
<body>
	<div class="container">
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
			<div class="log">
				<a href="index.php"><img src="img/logo.png"></a>
				<h1>Login</h1>
				<div class="input">
					<input type="text" name="username" placeholder="Enter your username">
				</div>
				<div class="input">
					<input type="password" name="pass" placeholder="Enter your password">
				</div>
				<button type="submit" name="submit" class="submit">Login</button>
			</div>
		</form>	
		<?php
			if(!isset($_GET['login'])) {
				exit();
			}
			else {
				$loginCheck = $_GET['login'];
				if ($loginCheck == "success"){
					header ("Location: index.php?action=login");
					echo "<script>alert('You have logged in successfully.')</script>";
					exit();
				}
				elseif ($loginCheck == "notexist"){
					echo "<script>alert('You have to enter existing username and password.')</script>";
					exit();
				}
				elseif ($loginCheck == "wrong"){
					echo "<script>alert('Invalid login or password.')</script>";
					exit();
				}
			}
		?>	
	</div>
</body>
</html>
