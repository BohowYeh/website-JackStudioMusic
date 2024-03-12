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
                        <a class="nav-link" href="pianomusic_index.php">Piano Music</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="BGM_index.php">BGM</a>
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
    <div style="line-height: 150px;">　</div>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="text-center my-5">
                    <h1 class="fw-bolder mb-3">BACKGROUND MUSIC</h1>
                    <p class="lead fw-normal text-muted mb-4">JACKSTUDIO music 提供多樣化的背景音樂， 讓你的生活充滿節奏，你也可以將他們用在你正在編輯的影片上，為你的影片增添光彩。</p>
                    <a class="btn btn-primary btn-lg" href="BGM.php">立即前往</a>
                </div>
            </div>
        </div>
        <section class="py-5 bg-light" id="scroll-target">
            <div class="container px-5 my-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-5">
                        <img class="img-fluid rounded mb-5 mb-lg-0" src="img/BGM1.jpg" alt="title">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="fw-bolder">「讓音樂把你的獨處時光變成享受」</h2>
                        <p class="lead fw-normal text-muted mb-0">Background music 多樣化的音樂選擇讓你能根據心情挑選適合的音樂，有了音樂你的獨處時光再也不孤單！</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                    <div class="col-lg-5 order-first order-lg-last">
                        <img class="img-fluid rounded mb-5 mb-lg-0" src="img/BGM2.jpg" alt="title">
                    </div>
                    <div class="col-lg-6">
                            <h2 class="fw-bolder">「任何情境，無限創意」</h2>
                            <p class="lead fw-normal text-muted mb-0">我們的音樂，能讓你用在你現在正在編輯的影片上。讓你的故事，充滿生動的配樂。喜愛編輯影片的你，可別錯過了。</p>
                    </div>
                </div>
            </div>
        </section>
    <footer>
        <p>Copyright © 2021 JackStudio. All rights reserved.</p>
    </footer>
</body>
</html>