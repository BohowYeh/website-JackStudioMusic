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

$email = $_POST['email'];
$password = $_POST['password'];
$refer = $_POST['refer'];

if ($email == '' || $password == '')
{
    // No login information
    header('Location: login.php?refer='. urlencode($_POST['refer']));
}
else
{
    // Authenticate user
    $con = mysqli_connect("localhost","a0463","pwd0463");
    mysqli_select_db($link, "a0463");
    
    $query = "SELECT aid, MD5(UNIX_TIMESTAMP() + aid + RAND(UNIX_TIMESTAMP()))
        guid FROM Final_admin WHERE email = '$email' AND pwd = '$password'";
        
    $result = mysqli_query($link,$query);
    	//or die ('Error in query');
    
    if (mysqli_num_rows($result))
    {
        $row = mysqli_fetch_row($result);
        // Update the user record
        $query = "UPDATE Final_member SET guid = '$row[1]' WHERE aid = '$row[0]'";
            
        mysqli_query($link,$query);
        	//or die('Error in query');
        
        // Set the cookie and redirect
        // setcookie( string name [, string value [, int expire [, string path
        // [, string domain [, bool secure]]]]])
        // Setting cookie expire date, 6 hours from now
        $cookieexpiry = (time() + 3600);
        setcookie("session_id", $row[1], $cookieexpiry);
        
        if (empty($refer) || !$refer)
        {
            $refer = '../login_v1/music.html';
        }

        header('Location: product.php');
    }
    else
    {
        // Not authenticated
        echo'<script>alert("帳號或密碼錯誤\nWrong account or password.");</script>';
        header('Refresh:2 ;url= Login_v1/admin.php?refer='. urlencode($refer));
    }
}
?>
</body>
</html>