<?php include_once 'konfiguracija.php' ; ?>
<!DOCTYPE html>
<html>
<body>
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