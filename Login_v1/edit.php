<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	require('../config.php');
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$pwd = $_POST['pwd'];
	$cpwd = $_POST['cpwd'];
	$guid = $_COOKIE['session_id'];
	if($pwd != $cpwd)
	{
		echo'<script>alert("確認密碼不一致");</script>';
		header('Refresh:2 ;url= member.php');
	}
	else
	{
		if($email != '')
		{
            $query = "UPDATE Final_member SET email = '$email'WHERE guid = '$guid'";
	        $result = mysqli_query($link,$query);
		}
		if($phone != '')
		{
			$query = "UPDATE Final_member SET phone = '$phone'WHERE guid = '$guid'";
	        $result = mysqli_query($link,$query);
		}
		if($pwd != '')
		{
			$query = "UPDATE Final_member SET pwd = '$pwd' WHERE guid = '$guid'";
	        $result = mysqli_query($link,$query);
		}
	echo"'$mid','$name','$phone','$email','$pwd','$date',''";
	header('Location: ../index.php');
    }
	?>
</body>
</html>