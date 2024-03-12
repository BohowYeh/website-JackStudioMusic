<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
header("Content-Type:text/html; charset=utf-8");
require('config.php');
$guid = $_COOKIE['session_id'];
setcookie('session_id',"",time()-3600);
$query = "UPDATE Final_member SET guid = '' WHERE guid = '$guid'";
$result = mysqli_query($link,$query);

//導到login.php
header("Location:index.php");
?>
</body>
</html>