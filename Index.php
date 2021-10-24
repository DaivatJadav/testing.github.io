<!DOCTYPE html>
<html>
<head>
	<title>Bhailu shares</title>
	<link rel="stylesheet" href="View.css">
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="image"/>
		<input type="text" name="sendto" placeholder="Send to?">
		<input type="submit" id="submit"/>
		<input type="button" class="downbtn" value="Download">
	</form>
	<a href="uploaded">HEllo</a>
<?php
session_start();
$uploader = $_SESSION['name'];
$_SESSION['uploader'] = $_SESSION['name'];
$servername = "localhost";
$username = "root";
$password = "";
$db = "file";
$conn = mysqli_connect($servername, $username, $password,$db);
if($conn){
	
}
if(!$conn){
	die("Database not connected");
}
if(isset($_FILES['image'])){
	$name = $_FILES['image']['name'];
	$_SESSION['named'] = $_FILES['image']['name'];
	$tmp_name = $_FILES['image']['tmp_name'];
	$dir = "uploaded/";
	move_uploaded_file($tmp_name, $dir . $name);

}
	$chromeurl = "http://localhost/Files/uploaded/" . $name;
	$a = "Uploaded/" . $name;
	echo $a;
	$url = "uploaded/" . $name; 
	echo "<img src=$url>";

	$send = "SELECT * FROM `files-upload`";
	$result = mysqli_query($conn,$send);

	$num = mysqli_num_rows($result);
	
	$dir = "uploaded/";
    $count = scandir($dir);
    $num = count($count);
    if($num > 1){
        $i = 0;
        while ($num > $i){
            $file = $count[$i];
            $i = $i + 1;
        }
    }
    $_SESSION['link'] = "uploaded/" . $name;
	$link = "uploaded/" . $name;

    $_SESSION['download'] = "<a href= $link download=+
    $link target='_blank'> Download File</a>";
	echo $_SESSION['download'];
	$who = $_SESSION['name'];
	$who = $_POST['sendto'];
	//$sql1 = "INSERT INTO `files-upload` (`Receiver`, `Name`, `File`) VALUES ('$who', 'admin', '$url') WHERE ;";
if (isset($_FILES['image'])){
	$sql2 = "INSERT INTO `files-upload` (`Receiver`, `Name`, `File`) VALUES ('$who', '$uploader', '$url')";
	mysqli_query($conn , $sql2);
	echo "Uploaded file";
}else{
	echo "Upload a file";
}
				

	
	

	$sql3 = "INSERT INTO `uploader` (`Receiver`,`File`)
	SELECT `Receiver`,`File`
	FROM `files-upload`;";
	mysqli_query($conn,$sql3);
	mysqli_query($conn,$sql3);
	
	
	?>
</body>
</html>