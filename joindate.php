<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="img/Browser icon.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/product.css">
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/script.js"></script>
    
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <title>JackStudio Music</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="sideNav">
            <div class="container">
            <span class="d-lg-block navbar-brand"><button value="open"><img class="img-login" src="img/login.png"/></button></span>
            <span class="d-lg-block navbar-brand"><img class="img-logo"  href="index.html" src="img/logo.png" alt="JackStudio" /></span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="product.php">產品項目</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="joindate.php">加入日期查詢</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="membership.php">會員資料</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">登出</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
            <div class="row gx-5 justify-content-center" style="margin-top: 10%;">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center">
                        <h1 class="fw-bolder">統計資料</h1>
                        <p class="lead fw-normal text-muted mb-5">可確認各項目的統計資訊</p>
                        <p class="mb-3"><form action="joindate.php" method="POST">
	                    <input type="date" name="datefrom"> ~
	                    <input type="date" name="dateend">
	                    <input type="submit" name="submit" formaction="joindate.php" value="送出">
	                    </form></p>
                    </div>
                </div>
            </div>
            <div style="margin-bottom: 25%;">
                <div class="row" style="width: 80%;margin: auto;border-top-style: solid;background-color: gray;">
                    <div class="col text-center" style="padding: 15px;">名稱</div>
                    <div class="col text-center" style="padding: 15px;">暱稱</div>
                    <div class="col text-center" style="padding: 15px;">email</div>
                    <div class="col text-center" style="padding: 15px;">加入日期</div>
                </div>
	<?php
    require('config.php');
	if(isset($_POST['datefrom']) || isset($_POST['dateend']))
	{
	$datefrom = $_POST['datefrom'];
	$dateend = $_POST['dateend'];

	$sqlstr = "select * from Final_member where joindate >='$datefrom' and joindate <='$dateend'";
	$result = mysqli_query($link,$sqlstr);
	while ($row = mysqli_fetch_array($result)){
		echo '
                    <div class="row" style="width: 80%;margin: auto;border-bottom-style: solid;border-color: gray;word-break: break-all;display: flex;align-items: center">
                        <div class="col text-center" style="padding: 15px;">'.$row['name'].'</div>
                        <div class="col text-center" style="padding: 15px;">'.$row['mId'].'</div>
                        <div class="col text-center" style="padding: 15px;">'.$row['email'].'</div>
                        <div class="col text-center" style="padding: 15px;">'.$row['joindate'].'</div>
                    </div>
		';
	}
    }
	?>
	        </div>
</body>
</html>