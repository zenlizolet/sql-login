<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registratratie</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Registeren</h2>
	</div>
	<div class=background>
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>wachtwoord</label>
			<input type="password" name="wachtwoord_1">
		</div>
		<div class="input-group">
			<label>herhaal wachtwoord</label>
			<input type="password" name="wachtwoord_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="registreer">Register</button>
		</div>
		<p>
			Heb je al een account? <a href="login.php">Log in</a>
		</p>
	</form>
  </div>
</body>
</html>