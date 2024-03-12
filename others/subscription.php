<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="img/Browser icon.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/script.js"></script>
    
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>


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
                        <a class="nav-link active" href="index.php">Home Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="soundeffect.php">Sound Effect</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pianomusic_index.php">Piano Music</a>
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
                        <p class="title-font">訂閱方案</p>
                        <p class="mb-3" style="font-size:26pt;">訂閱到期日：
                            <?php
                                if(!isset($_COOKIE['session_id'])){
                                    echo'請先登入';
                                }
                                else{
                                    $guid = $_COOKIE['session_id'];
                                    $query = "SELECT duedate From Final_member WHERE guid = '$guid'";
                                    $result = mysqli_query($link,$query);
                                    while ($row = mysqli_fetch_array($result))
                                        echo $row['duedate'];
                                }

                            ?>
                        </p>
                    </div>
                </div>
            <div class="row gx-5 justify-content-center">
            <div class="col-lg-3 mb-5">
                <div class="card h-100 shadow border-0">
                <img class="card-img-top" src="img/month.jpeg" alt="600*350pic">
                    <div class="card-body p-4">
                        <h4 class="card-title mb-3">月費方案</h4>
                        <p class="text-muted">TWD300/month (TWD3600/year)</p>
                        <p class="card-text mb-0">每天省下一瓶鋁箔包的錢，就能輕鬆成為當月會員</p>
                    </div>
                    <div class="card-body p-4">
                    <a href="payment.php?payment=month&price=300" class="btn btn-primary">成為會員</a>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        </div>
                    </div>
                </div>
        <div class="col-lg-3 mb-5">
            <div class="card h-100 shadow border-0">
                <img class="card-img-top" src="img/year.jpeg" alt="600*350pic">
                    <div class="card-body p-4">
                        <h4 class="card-title mb-3">年費方案</h4>
                        <p class="text-muted">TWD200/month (TWD2400/year)</p>
                        <p class="card-text mb-0">如果選擇成為整個年度的TWD200!</p>
                    </div>
                    <div class="card-body p-4">
                    <a href="payment.php?payment=year&price=2400" class="btn btn-primary">成為會員</a>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                    </div>
                    </div>
                </div>
        <div class="col-lg-3 mb-5">
            <div class="card h-100 shadow border-0">
                <img class="card-img-top" src="img/student.jpeg" alt="600*350pic">
                    <div class="card-body p-4">
                        <h4 class="card-title mb-3">學生方案</h4>
                        <p class="text-muted">TWD150/month (TWD1800/year)</p>
                        <p class="card-text mb-0">如果你還是學生，即可使用TWD150的優惠!</p>
                    </div>
                    <div class="card-body p-4">
                    <a href="payment.php?payment=student&price=150" class="btn btn-primary">成為會員</a>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
    <footer>
        <p>Copyright © 2021 JackStudio. All rights reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>