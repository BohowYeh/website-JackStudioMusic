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
            <div class="text-center mb-5">
                <h1 class="fw-bolder">BGM</h1>
                <p class="lead fw-normal text-muted mb-0">最後更新於June 01, 2021</p>
            </div>
<?php 
    require('config.php');
    $sqlstr = "select * from Final_BGM";
    $result = mysqli_query($link,$sqlstr);
    while ($row = mysqli_fetch_array($result)){
        if(strlen($row['BGMname'])>40){
            echo'
            <div class="card card_BGM box-shadow">
                <p></p>
                <h4 class="BGM_h1 text-center">'.$row['BGMname'].'</h4>
                    <span style="text-align: center;">
                        <audio src="BGM/'.$row['BGMname'].'.'.$row['BGMtype'].'" controls="controls" controlsList="nodownload" oncontextmenu="return false"></audio>
                    </span>
                </p>
            ';
            if(!isset($_COOKIE['session_id'])){
                echo'
                    </div>
                    <br><br><br>
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
                    <p class="text-center">
                        <a href="BGM/'.$row['BGMname'].'.'.$row['BGMtype'].'" class="btn btn-primary" download = "'.$row['BGMname'].'.'.$row['BGMtype'].'">點此下載</a>
                    </p>      
                    </div>
                    <br><br><br>
                    ';
                }
                else
                {
                    echo'
                    <p class="text-center">
                        <a href="subscription.php" class="btn btn-primary">會員過期</a>
                    </p>      
                    </div>
                    <br><br><br>
                    ';
                }
            }
        }
        else if(strlen($row['BGMname'])>30){
            echo'
            <div class="card card_BGM box-shadow">
                <p></p>
                <h2 class="BGM_h1 text-center">'.$row['BGMname'].'</h2>
                    <span style="text-align: center;">
                        <audio src="BGM/'.$row['BGMname'].'.'.$row['BGMtype'].'" controls="controls" controlsList="nodownload" oncontextmenu="return false"></audio>
                    </span>
                </p>
            ';
            if(!isset($_COOKIE['session_id'])){
                echo'
                    </div>
                    <br><br><br>
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
                    <p class="text-center">
                        <a href="BGM/'.$row['BGMname'].'.'.$row['BGMtype'].'" class="btn btn-primary" download = "'.$row['BGMname'].'.'.$row['BGMtype'].'">點此下載</a>
                    </p>      
                    </div>
                    <br><br><br>
                    ';
                }
                else
                {
                    echo'
                    <p class="text-center">
                        <a href="subscription.php" class="btn btn-primary">會員過期</a>
                    </p>      
                    </div>
                    <br><br><br>
                    ';
                }
            }
        }
        else{
            echo'
            <div class="card card_BGM box-shadow">
                <p></p>
                <h1 class="BGM_h1 text-center">'.$row['BGMname'].'</h1>
                    <span style="text-align: center;">
                        <audio src="BGM/'.$row['BGMname'].'.'.$row['BGMtype'].'" controls="controls" controlsList="nodownload" oncontextmenu="return false"></audio>
                    </span>
                </p>
            ';
            if(!isset($_COOKIE['session_id'])){
                echo'
                    </div>
                    <br><br><br>
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
                    <p class="text-center">
                        <a href="BGM/'.$row['BGMname'].'.'.$row['BGMtype'].'" class="btn btn-primary" download = "'.$row['BGMname'].'.'.$row['BGMtype'].'">點此下載</a>
                    </p>      
                    </div>
                    <br><br><br>
                    ';
                }
                else
                {
                    echo'
                    <p class="text-center">
                        <a href="subscription.php" class="btn btn-primary">會員過期</a>
                    </p>      
                    </div>
                    <br><br><br>
                    ';
                }
            }
        }
    };
?>
    </section>
    <?php
    if(!isset($_COOKIE['session_id'])){
        echo'
            <section class="py-3 bg-light">
                <div class="container px-5 my-3">
                    <h3 class="display-4 fw-bolder mb-4">還沒加入會員嗎？</h3>
                    <a class="btn btn-lg btn-primary" href="regist.html">加入會員</a>
                </div>
            </section>
        ';
    }
    ?>

    <footer>
        <p>Copyright © 2021 JackStudio. All rights reserved.</p>
    </footer>
</body>
</html>