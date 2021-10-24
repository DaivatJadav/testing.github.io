<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="" method="post">
			<input type="text" name="user" placeholder="Enter a username">
			<input type="password" name="pass" placeholder="Enter a password please">	
			<input type="password" name="passrep" placeholder="Enter a password please">
			<input type="email" name="mail" placeholder="Enter your email please">
			<input type="submit">
		</form>
	</body>
	<?php

session_start();		
$servername = "localhost";
$username = "root";
$password = "";
$db = "file";
$conn = mysqli_connect($servername, $username, $password,$db);
if($conn){
}
if(!$conn){
	echo "Failed to connect";
}
$_SESSION['name'] = $_POST['user'];
$_SESSION['pass'] = $_POST['pass'];
$name = $_POST['user'];
$pass = $_POST['pass'];
$again = $_POST['passrep'];
$_SESSION['mail'] = $_POST['mail'];
$mail = $_POST['mail'];
if($pass == $again){
	$sql = "INSERT INTO `login.php`(`Username`, `Password`, `Email`) VALUES ('$name','$pass','$mail')";
	mysqli_query($conn,$sql);
	//header("Location: http://localhost/Files/Index.php");
}else{
	echo("Pls enter the correct pasword or username");
}
	?>
</html>