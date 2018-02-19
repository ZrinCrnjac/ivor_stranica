<?php include_once 'konfiguracija.php' ; ?>
<!DOCTYPE html>
<html>
	<body>
		<form method="post" action="action_login.php">
			<label for="ime">Username</label>
			<input type="text" name="username" id="username" placeholder="Ivor">
			<label for="lozinka">Password</label>
			<input type="password" name="password" id="password" placeholder="lozinka">
			<input type="submit" value="Login" />
		</form>
		<a href="index.php">Početna</a>
	</body>
</html>
