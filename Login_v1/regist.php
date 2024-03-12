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
	$name = $_POST['name'];
	$mid = $_POST['mid'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$pwd = $_POST['pwd'];
	$cpwd = $_POST['cpwd'];
	$date = date("Y-m-d");
	$duedate = date("Y-m-d", strtotime($date."-1 day"));
	if($pwd != $cpwd)
	{
		echo'<script>alert("確認密碼不一致");</script>';
		header('Refresh:2 ;url= regist.html');
	}
	else
	{
	    $query = "SELECT * FROM Final_member WHERE mId = '$mid'";
	    $result = mysqli_query($link,$query);
	    $row = @mysqli_fetch_row($result);
	    if($row[1] == $mid)
	    {
    		echo'<script>alert("暱稱已被人使用!");</script>';
    		header('Refresh:2 ;url= regist.html');
    	}
    	else
    	{
			$query = "INSERT INTO Final_member Values ('$mid','$name','$phone','$email','$pwd','$date','$duedate','')";
        	$result = mysqli_query($link,$query);

        	echo"'$mid','$name','$phone','$email','$pwd','$date',''";
        	header('Location: ../index.php');
        }
    }
	?>
</body>
</html>