<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	require('config.php');
	$payment = $_POST['payment'];
	$price = $_POST['price'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$card1 = $_POST['card1'];
	$card2 = $_POST['card2'];
	$card3 = $_POST['card3'];
	$card4 = $_POST['card4'];
	$mid = $_POST['mId'];
	$date = date("Y-m-d H:i:s");
	$transid = date('YmdHis').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
	$cardid = $card1.$card2.$card3.$card4;
	//echo $payment.$price.$name.$phone.$card1.$card2.$card3.$card4.$date.$transid.$cardid;
	$query = "INSERT into Final_transaction values ('$transid','$mid','$date','$payment','$price','$name','$phone','$cardid')";
	$result = mysqli_query($link,$query);
	//echo "('$transid','$mid','$date','$payment','$price','$name','$phone','$cardid')";
	$query = "SELECT duedate From Final_member WHERE mId = '$mid'";
	$result = mysqli_query($link,$query);

	while ($row = mysqli_fetch_array($result))
	{
		$duedate = $row['duedate'];
		if($duedate < date("Y-m-d"))
			$duedate = date("Y-m-d");
		if ($payment == 'month')
			$duedate = date("Y-m-d", strtotime($duedate."+30 day"));
		else if($payment == 'year')
			$duedate = date("Y-m-d", strtotime($duedate."+1 year"));
		else if($payment == 'student')
			$duedate = date("Y-m-d", strtotime($duedate."+30 day"));
		else
			$duedate = date("Y-m-d");
    }
	$query = "UPDATE Final_member SET duedate = '$duedate' WHERE mId = '$mid'";
	$result = mysqli_query($link,$query);
	header('Location: index.php');
	?>
</body>
</html>