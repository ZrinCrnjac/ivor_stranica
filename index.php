<?php include_once 'konfiguracija.php' ; ?>
<!DOCTYPE html>
<html>
	<head>
	<?php include_once 'predlosci/head.php'; ?>
	</head>
<body>
	<?php include_once 'predlosci/izbornik.php'; ?>
	<p>Početna</p>
	<a href="igre.php">Igre</a>
	<br>
	<?php 
	if(isset($_SESSION["logiran"])): ?>
	<a href="logout.php">Logout</a>
	<?php echo $_SESSION["logiran"]->username; ?>
	<?php else: ?>
	<a href="login.php">Login</a>
	<a href="registracija.php">Registracija</a>
	<?php endif; ?>
</body>
</html>