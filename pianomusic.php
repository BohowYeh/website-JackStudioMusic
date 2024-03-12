<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="img/Browser icon.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/music.css">
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

    <title>JackStudio Music</title>
</head>
<body>
    <div class="banner"></div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="sideNav">
            <div class="container">
            <span class="d-lg-block navbar-brand"><button value="open"><img class="img-login" src="img/login.png"/></button></span>
            <span class="d-lg-block navbar-brand"><img class="img-logo"  href="index.html" src="img/logo.png" alt="JackStudio" /></span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="soundeffect.php">Sound Effect</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="pianomusic_index.php">Piano Music</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="BGM_index.php">BGM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pianosheet.php">Piano Sheet</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
    <header>
        <ul>
<?php
require('config.php');
if (!isset($_COOKIE['session_id'])){
    ECHO'
            <li><button value="open" class="close-button">X</button></li>
            <li class="li-center"><a href="Login_v1/music.html">使用者登入</a></li>
            <li class="li-center"><a href="Login_v1/loading.html">管理者登入</a></li>
            <li class="li-center"><a href="Login_v1/regist.html">創建帳號</a></li>
    ';
}
else{
    echo'
            <li><button value="open" class="close-button">X</button></li>
            <li class="li-center"><a href="#">你好</a></li>
            <li class="li-center"><a href="Login_v1/member.php">修改會員資料</a></li>
            <li class="li-center"><a href="subscription.php">訂閱方案</a></li>
            <li class="li-center"><a href="logout.php">登出</a></li>
    ';
};
?>
        </ul>
    </header>
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center">
                        <h2 class="fw-bolder">Piano Music</h2>
                        <p class="lead fw-normal text-muted mb-5">人從出生的那一刻，就喜歡聽音樂。</p>
                    </div>
                </div>
            </div>
            <div class="row gx-5 justify-content-center">
<?php 
    require('config.php');
    $sqlstr = "select * from Final_pianomusic";
    $result = mysqli_query($link,$sqlstr);
    while ($row = mysqli_fetch_array($result)){
    	echo'
        	    <div class="col-lg-3 mb-5">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top" src="img/'.$row['PMename'].'.'.$row['PICtype'].'" alt="600*350pic">
                        <div class="card-body p-4">
                            <div class="badge bg-primary bg-gradient rounded-pill mb-2">Hot</div>
                            <span><audio src="pianomusic/'.$row['PMename'].'.'.$row['PMtype'].'" controls="controls" controlsList="nodownload" oncontextmenu="return false"></audio></span>
                            <h4 class="card-title mb-3">'.$row['PMname'].'<br>'.$row['PMauthor'].'</h4>
                            <p class="card-text mb-0">'.$row['PMintro'].'</p>
                        </div>
                        <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                            <div class="d-flex align-items-end justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle me-3" src="img/icon.jpg" width="32" height="32" alt="icon">
                                    <div class="small">
                                        <div class="fw-bold">Aron Zhang</div>
                                        <div class="text-muted">June 01, 2021 </div>
                                    </div>
                                </div>
    	';
        if(!isset($_COOKIE['session_id'])){
            echo'
                            </div>
                        </div>
                    </div>
                </div>
                ';
        }
        else{
            $guid = $_COOKIE['session_id'];
            $query1 = "SELECT * FROM Final_member WHERE guid = '$guid'";
            $result1 = mysqli_query($link,$query1);
            $row1 = mysqli_fetch_array($result1);
            if($row1['duedate'] >= date("Y-m-d"))
            {
                echo'
                                <a href="pianomusic/'.$row['PMename'].'.'.$row['PMtype'].'" class="btn btn-primary" download = "'.$row['PMename'].'.'.$row['PMtype'].'">點此下載</a>
                            </div>
                        </div>
                    </div>
                </div>
            ';
            }
            else
            {
                echo'
                                <a href="subscription.php" class="btn btn-primary">會員過期</a>
                            </div>
                        </div>
                    </div>
                </div>
            ';
            }
        }
    };
?>
            </div>
        </div>
    </section>
    <footer>
        <p>Copyright © 2021 JackStudio. All rights reserved.</p>
    </footer>
</body>
</html>