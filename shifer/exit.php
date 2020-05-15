<?php
unset($_COOKIE['user_id']);
unset($_COOKIE['username']);
setcookie('user_id', $row['user_id'], time() - (60*60*24*30));
setcookie('username', $row['username'], time() - (60*60*24*30));
setcookie('first_name', $row['first_name'], time() - (60*60*24*30));
setcookie('last_name', $row['last_name'], time() - (60*60*24*30));
setcookie('email', $row['email'], time() - (60*60*24*30));
$home_url = 'index.php';
 header('Location: ' . $home_url);
?>