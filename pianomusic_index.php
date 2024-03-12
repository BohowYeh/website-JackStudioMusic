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
/*$guid = $_COOKIE['session_id'];
$con = mysqli_connect("localhost","a0463","pwd0463");
mysqli_select_db($link, "a0463");

$query = "SELECT mid FROM Final_member WHERE guid = '$guid'";
$result = mysqli_query($link,$query);*/

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
    <div class="bg-dark py-5">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder text-white mb-2">忙碌的生活讓你厭煩嗎？</h1>
                        <p class="lead fw-normal text-white-50 mb-4">是時候放鬆一下了！</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">了解更多</a>
                            <a class="btn btn-outline-light btn-lg px-4" href="pianomusic.php">前往Piano Music</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5"><img class="img-fluid rounded-3 my-5" src="img/pianomusic_index.jpg" alt="picture" /></div>
            </div>
        </div>
    </div>
    <section class="py-5" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">在JACK STUDIO <br>MUSIC，你可以得到──</h2></div>
                <div class="col-lg-5">
                    <div class="row gx-5">
                        <div class="col mb-5 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                            <h2 class="h5">純鋼琴的治癒音樂</h2>
                            <p class="mb-0">不是單純的電子音，你所聽到的都是用貨真價實的鋼琴演奏出來的樂曲</p>
                        </div>
                        <div class="col mb-5 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                            <h2 class="h5">短暫的休息</h2>
                            <p class="mb-0">不管你是從哪裡進到這個頁面，都稍微停留一下吧</p>
                        </div>
                    </div>
                    <div class="row gx-5">
                        <div class="col mb-5 mb-md-0 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                            <h2 class="h5">你沒想過的風格</h2>
                            <p class="mb-0">你有想過流行歌變成抒情風格聽起來是什麼感覺嗎？</p>
                        </div>
                        <div class="col h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                            <h2 class="h5">你還在猶豫？</h2>
                            <p class="mb-0">不用再猶豫了快去看看！</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="py-5 bg-light">
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-10 col-xl-7">
                    <div class="text-center">
                        <div class="fs-4 mb-4 fst-italic">"從哪裡跌倒，就從哪裡爬起來。<br>如果當下痛到爬不起來，就聽個音樂稍作休息吧！"</div>
                        <div class="d-flex align-items-center justify-content-center"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>Copyright © 2021 JackStudio. All rights reserved.</p>
    </footer>
</body>
</html>