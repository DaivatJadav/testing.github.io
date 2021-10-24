<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="name" placeholder="Enter the username">
		<input type="password" name="pass" placeholder="Enter the password">
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
$username = $_POST['name'];
$_SESSION['Username'] = $_POST['name'];
$pass = $_POST['pass'];
$sql = "SELECT `Username`, `Password`, `Email` FROM `login.php` WHERE `Username` = '$username' AND `Password` = '$pass';";
$run = mysqli_query($conn,$sql);
$num = mysqli_num_rows($run);
if($num > 0){
	$_SESSION['username'] = $_POST['name'];
	echo "Successful login";
	//header("Location: Index.php");
}else{
	echo "failed";
}

?>
</html>