<?php
if(isset($_POST['login-submit'])){
  
  require 'dbh!.php';
  
  $email = $_POST['email'];
  $ww = $_POST['ww'];
  
 //sql-injecties vermijden
  $email = stripcslashes($email);
  $ww = stripcslashes($ww);
  $email = mysql_real_escape_string($email);
  $ww = mysql_real_escape_string($ww);
  
$dBServername = "sql306.epizy.com";
$dBUsername = "epiz_24902767";
$dBPassword = "Gy8SDqWg7W4puW";
$dBName = "epiz_24902767_website";

$conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);
$result = mysql_query("SELECT * FROM `users` WHERE email = '$email' and wachtwoord ='$ww'")
$row = mysql_fetch_array($result);
  
if ($row['email'] == $email && $row['wachtwoord'] == $ww){
  header("Location: login.php");
}
 else{
  header("Location: login.php?");
 }
}
else{
   header("Location: ../index.php");
   exit();
}