<?php 
	session_start();

	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// CONNECTIE MET DATABASE
	$db = mysqli_connect( 'sql306.freecluster.eu:3306', 'epiz_24902767', 'Gy8SDqWg7W4puW', 'epiz_24902767_website');

	// REGISTER GEBRUIKER
	if (isset($_POST['registreer'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$wachtwoord_1 = mysqli_real_escape_string($db, $_POST['wachtwoord_1']);
		$wachtwoord_2 = mysqli_real_escape_string($db, $_POST['wachtwoord_2']);

		// ERROR MESSAGES
    if (empty($username) && empty($email) && empty($wachtwoord_1)) { array_push($errors, "JA HALLOOO, JE MOET UBERHAUPT WEL IETS INVULLEN");
    }else{
    if (empty($username)) { array_push($errors, "Ik heb wel een username nodig!"); }
		if (empty($email)) { array_push($errors, "Ik heb wel een email nodig!"); }
		if (empty($wachtwoord_1)) { array_push($errors, "Graag beide wachtwoordvelden invullen!"); }
    }
		

		if ($wachtwoord_1 != $wachtwoord_2) {
			array_push($errors, "Hey slome! Deze wachtwoorden komen niet overeen!");
		}

		if (count($errors) == 0) {
			$wachtwoord = sha1($wachtoord_1);
			$query = "INSERT INTO users (username, email, password) 
					  VALUES('$username', '$email', '$wachtwoord')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Je bent nu ingelogd!";
			header('location: ../zyroindex.php');
		}

	}

	
	// LOGIN GEBRUIKER
	if (isset($_POST['login_gebruiker'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$wachtwoord = mysqli_real_escape_string($db, $_POST['wachtwoord']);

		if (empty($username)) {
			array_push($errors, "Ik heb wel een username nodig!");
		}
		if (empty($wachtwoord)) {
			array_push($errors, "Ik heb wel een wachtwoord nodig!");
		}

		if (count($errors) == 0) {
			$wachtwoord = sha1($wachtwoord);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$wachtwoord'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "Je bent nu ingelogd!";
				header('location: ../zyro/index.php');
			}else {
				array_push($errors, "Verkeerde username/wachtwoord combinatie");
			}
		}
	}

?>