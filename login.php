<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Wachtwoord</label>
			<input type="password" name="wachtwoord">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_gebruiker">Login</button>
		</div>
		<p>
			Nog geen account? <a href="register.php">Registreer</a>
		</p>
	</form>


</body>
</html>