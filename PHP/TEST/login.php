<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LOGIN</title>
</head>
<body>	
    <form action="actionlogin.php" method="POST">
    Email:<br />
    <input type="text" name="email">
    <br />
    Password:<br />
    <input type="password" name="password">
    <br />
    <input type="submit" name="submit" value="Login">
    <input type="hidden" name="refer" value="<?php echo (isset($_GET['refer'])) ? $_GET['refer'] : 'index.php'; ?>">
    </form>
</body>
</html>