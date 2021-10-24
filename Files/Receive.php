<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "file";


$uploader = $_SESSION['username'];
//sql


$conn = mysqli_connect($servername, $username, $password,$db);
$sql = "SELECT * FROM `files-upload`";
$sql1 = "SELECT * FROM `uploader` WHERE `Receiver` = '$uploader'";

echo $uploader;
//

$counter = mysqli_query($conn,$sql);
$dir = "uploaded/";
$scan = scandir($dir);
$result = count($scan);

//if($result > 0){
    //while ($row = mysqli_fetch_assoc($counter)){
    //    echo "<br>";
     //   $named = $row['File'];
     //   $store = array($named);
     //   
  //  }
//}
$file = $_SESSION['link'];
echo "<a href= $file download=$file target='_blank'> Download File</a>";   

$display = mysqli_query($conn,$sql1);
$sql1count = mysqli_num_rows($display);
$scan1 = scandir($dir);
$num = count($scan1);

echo $sql1count;

if($sql1count > 0){
	while($count = mysqli_fetch_assoc($display)){
        echo $count['Receiver'] . "<br>". $count['File'];
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
</body>
</html>
