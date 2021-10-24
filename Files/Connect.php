<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "file";
$conn = mysqli_connect($servername, $username, $password,$db);
if($conn){
	echo "Connected";
}
if(!$conn){
	echo "Failed to connect";
}
?>