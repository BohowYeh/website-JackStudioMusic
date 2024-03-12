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
        <div class="row gx-5 justify-content-center" style="margin-top: 10%;">
            <div class="col-lg-8 col-xl-6">
                    <div class="text-center">
                        <p class="title-font">確認付款</p>
                    </div>
            </div>
            <div style="margin-bottom: 25%;">
                <form action="pay.php" method="POST">
                <div style="width: 40%;margin: auto;">
                <div class="row">
                    <div class="col text-center" style="padding: 15px;border-top-style: solid;background-color: gray;">選擇方案：</div>
                    <div class="col text-center" style="padding: 15px;border-top-style: solid;background-color: white;">
                        <input type="hidden" name="payment" value="<?php echo $_GET['payment']; ?>">
                    <?php echo $_GET['payment'];?>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center" style="padding: 15px;border-top-style: solid;background-color: gray;">價錢：</div>
                    <div class="col text-center" style="padding: 15px;border-top-style: solid;background-color: white;">
                        <input type="hidden" name="price" value="<?php echo $_GET['price']; ?>">
                    <?php echo $_GET['price'];?>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center" style="padding: 15px;border-top-style: solid;background-color: gray;">名子：</div>
                    <div class="col text-center" style="padding: 15px;border-top-style: solid;background-color: white;">
                        <input type="text" name="name" placeholder="name">
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center" style="padding: 15px;border-top-style: solid;background-color: gray;">暱稱：</div>
                    <div class="col text-center" style="padding: 15px;border-top-style: solid;background-color: white;">
                        <?php 
                        if(!isset($_COOKIE['session_id']))
                            echo'請先登入';
                        else
                        {
                            $guid = $_COOKIE['session_id'];
                            $query = "SELECT * FROM Final_member WHERE guid = '$guid'";
                            $result = mysqli_query($link,$query);
                            while ($row = mysqli_fetch_array($result))
                            {
                                echo $row['mId'].'<input type="hidden" name="mId" value="'.$row['mId'].'">';
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center" style="padding: 15px;border-top-style: solid;background-color: gray;">電話：</div>
                    <div class="col text-center" style="padding: 15px;border-top-style: solid;background-color: white;">
                        <input type="text" name="phone" placeholder="phone number">
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center" style="padding: 15px;border-top-style: solid;background-color: gray;">信用卡號：</div>
                    <div class="col text-center" style="padding: 15px;border-top-style: solid;background-color: white;">
                        <div class="row">
                            <div class="col"><input type="text" size="4" name="card1" placeholder=""></div>
                            <div class="col"><input type="text" size="4" name="card2" placeholder=""></div>
                            <div class="col"><input type="text" size="4" name="card3" placeholder=""></div>
                            <div class="col"><input type="text" size="4" name="card4" placeholder=""></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center" style="padding: 15px;border-top-style: solid;background-color: gray;">地址：</div>
                    <div class="col text-center" style="padding: 15px;border-top-style: solid;background-color: white;">
                        <input type="text" placeholder="address">
                    </div>
                </div>
                <div class="row" style="border-top-style: solid;">
                    <?php 
                        if(!isset($_COOKIE['session_id']))
                            echo'<div class="col" style="padding-left: 375px;"><br>請先登入</div>';
                        else
                            echo'<div class="col" style="padding-left: 375px;"><br><button class="btn btn-primary" type="submit">送出</button></div>';
                    ?>
                </div>
                </div>
                </form>
            </div>
        </div>
</section>
    <footer>
        <p>Copyright © 2021 JackStudio. All rights reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>