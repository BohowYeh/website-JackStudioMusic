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

// Check for a cookie, if none go to login page
if (!isset($_COOKIE['session_id']))
{
    header('Location: Login_v1/login.php?refer='. urlencode(getenv('REQUEST_URI')));
}

// Try to find a match in the database
$guid = $_COOKIE['session_id'];
$con = mysqli_connect("localhost","a0463","pwd0463");
mysqli_select_db($link, "a0463");

$query = "SELECT mid FROM Final_member WHERE guid = '$guid'";
$result = mysqli_query($link,$query);

if (!mysqli_num_rows($result))
{
    // No match for guid
header('Location: Login_v1/login.php?refer='. urlencode(getenv('REQUEST_URI')));
}
?>
</body>
</html>