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
//$guid = $_COOKIE['session_id'];
//$con = mysqli_connect("localhost","a0463","pwd0463");
//mysqli_select_db($link, "a0463");

//$query = "SELECT mid FROM Final_member WHERE guid = '$guid'";
//$result = mysqli_query($link,$query);

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
    <div class="d1">
        <iframe src="https://www.youtube.com/embed/y7w_Bu4KYzs?rel=0&autoplay=1&playlist=y7w_Bu4KYzs" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen class="f1" width="100%" height="960" ></iframe></div>
    <div class="row no-gutters justify-content-center align-items-center text">
        <div class="col-lg-6 text-center">
            <p class="title-font">"為你的生活增添節奏!"</p>
            <h6>JackStudio Music 是一個影音、素材平台<br>音效可用於您手上正在剪輯的影片<br>而琴譜可用在您最愛的休閒娛樂上</h6>
<?php
if (!isset($_COOKIE['session_id']))
    echo'<a href="Login_v1/login.php" class="btn btn-primary">Start Now</a>';
else
    echo'<a href="#" class="btn btn-primary">Start Now</a>';
?>
        </div>
    </div>
    <div>
        <table cellspacing="0"cellpadding="0">
            <tr>
                <td align="center" valign="center"><img src="img/intro_effect.png" alt=""></td>
                <td align="center" valign="center">
                    <h3 class="title mt-3">｜聲音音效<small>Sound Effect</small></h3>
                    <h4 class="mt-3">如果你正在趕工手上的ㄎㄧㄤ片<br>或.exe影片就不要錯過我們的音效喔！</h4>
<?php
if (!isset($_COOKIE['session_id']))
    echo'<a href="Login_v1/regist.html" class="btn btn-primary mt-3">加入會員</a>';
else
    echo'<a href="soundeffect.php" class="btn btn-primary">前往聲音音效</a>';
?>
                </td>
            </tr>
            <tr>
                <td style="line-height: 100px"> 　</td>
            </tr>
            <tr>
                <td align="center" valign="center">
                    <h3 class="title mt-3">｜鋼琴音樂<small>Piano Music</small></h3>
                    <h4 class="mt-3">人從出生的那一刻，就喜歡聽音樂。</h4>
<?php
if (!isset($_COOKIE['session_id']))
    echo'<a href="Login_v1/regist.html" class="btn btn-primary mt-3">加入會員</a>';
else
    echo'<a href="pianomusic.php" class="btn btn-primary">前往鋼琴音樂</a>';
?>
                </td>
                <td align="center" valign="center"><img src="img/intro_piano.png"></td>
            </tr>
            <tr>
                <td style="line-height: 100px">　</td>
            </tr>
            <tr>
                <td align="center" valign="center"><img src="img/intro_BGM.png"></td>
                <td align="center" valign="center">
                    <h3 class="title mt-3">｜背景音樂<small>BGM</small></h3>
                    <h4 class="mt-3">JACKSTUDIO music 提供多樣化的背景音樂<br>讓你的生活充滿節奏<br>你也可以將他們用在你正在編輯的影片上<br>為你的影片增添光彩。</h4>
<?php
if (!isset($_COOKIE['session_id']))
    echo'<a href="Login_v1/regist.html" class="btn btn-primary mt-3">加入會員</a>';
else
    echo'<a href="BGM.php" class="btn btn-primary">前往BGM</a>';
?>
                </td>
            </tr>
            <tr>
                <td style="line-height: 100px">　</td>
            </tr>
            <tr>
                <td align="center" valign="center">
                    <h3 class="title mt-3">｜鋼琴樂譜<small>Piano Sheet</small></h3>
                    <h4 class="mt-3">總是想找譜但是找不到嗎？<br>JackStudio提供給你。</h4>
<?php
if (!isset($_COOKIE['session_id']))
    echo'<a href="Login_v1/regist.html" class="btn btn-primary mt-3">加入會員</a>';
else
    echo'<a href="pianosheet.php" class="btn btn-primary">前往鋼琴琴譜</a>';
?>
                </td>
                <td align="center" valign="center"><img src="img/intro_sheet.png"></td>
            </tr>
        </table>
        <div class="row no-gutters justify-content-center">
            <div class="col-lg-5 text-center">
                <h3 class="final-font">感謝聆聽<br>沒時間解釋了，快加入!</h3>
                <a href="Login_v1/regist.html" class="btn btn-primary">加入會員</a>
            </div>
        </div>
    </div>
    <footer>
        <p>Copyright © 2021 JackStudio. All rights reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
