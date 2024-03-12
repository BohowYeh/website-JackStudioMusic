<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	    $link = mysqli_connect("localhost","a0463","pwd0463");
	    mysqli_query($link,"SET NAMES 'UTF8'");
        mysqli_select_db($link, "a0463");
	?>
</body>
</html>