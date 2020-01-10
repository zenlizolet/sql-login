<html>
<head>
<title>login</title>
  <link rel="stylesheet" href="style/style.css">
</head>
<body>
  <div id="form">
  <form action="login!.php" method="POST">
  Email: <input type="text" name="email" placeholder= "Email"><br>
  Wachtwoord: <input type="password" name="ww" placeholder="Wachtwoord"><br>
  <button type="submit" name="login-submit" id="button"> Login</button>
</form>

<a href="../Register/registreer.php">Registreer</a><br>
  
<form action="logout!.php" method="post">
  <button type="submit" name="logout-submit" id="button">Logout</button>
</form>
  </div>
  
  </body>
</html>
