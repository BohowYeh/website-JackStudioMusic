<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="img/Browser icon.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/pianosheet.css">
	<script src="js/jquery-2.1.4.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/label.js"></script>
    <script src="js/script.js"></script>

	<title>JackStudio Music</title>
</head>
<body>
	<div class="banner"></div>
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="sideNav">
            <div class="container">
            <span class="d-lg-block navbar-brand"><button value="open"><img class="img-login" src="img/login.png"/></button></span>
            <span class="d-lg-block navbar-brand"><img class="img-logo"  href="index.html" src="img/logo.png" alt="JackStudio" /></span>
            <button value="none" class="navbar-toggler" value="All" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
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
                        <a class="nav-link" href="BGM_index.php">BGM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="pianosheet.php">Piano Sheet</a>
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

    <div align="center">
        <button class="label btn btn-secondary" value="All">#All</button>
        <button class="label btn btn-secondary" value="Aron">#Aron</button>
        <button class="label btn btn-secondary" value="Eric">#Eric</button>
    </div>

    <div class="container mt-3 pt-6"></div>
    <div id="list">
        <div class="Aron Eric row" align="center">
        <div class="Aron col-sm-6 col-lg mb-3">
            <div class="Aron card" style="width: 40rem;">
                <img src="img/aron.jpg" class="Aron card-img-top" alt="...">
                <div class="Aron card-body">
                    <h5 class="Aron card-title"><b>Aron</b></h5>
                    <p class="Aron card-text">我們的主要編曲者之一</p>
                    <a href="http://120.107.152.110/~a0480/image/image0.html" class="Aron btn btn-primary">瀏覽他的資料</a>
                </div>
            </div>
        </div>
        <div class="Eric col-sm-6 col-lg mb-3">
            <div class="Eric card" style="width: 40rem;">
                <img src="img/Eric Chang.jpg" class="Eric card-img-top" alt="...">
                <div class="Eric card-body">
                    <h5 class="Eric card-title"><b>Eric Chang</b></h5>
                    <p class="Eric card-text">我們主要的編曲者之一</p>
                    <a href="Eric.html" class="Eric btn btn-primary">瀏覽他的資料</a>
                </div>
            </div>
        </div>
    <div class="Aron Eric row" align="center" id="list">
        <div class="Aron col-sm-6 col-lg mb-3">
            <div class="Aron card" style="width: 20rem;">
                <img src="img/Nanno.jpg" class="Aron card-img-top" alt="...">
                <div class="Aron card-body">
                    <h5 class="Aron card-title"><b>霧裡</b></h5>
                    <p class="Aron card-text">在b站and抖音配上《禁忌女孩》娜诺的cut，瞬間變成熱門歌曲，也讓《禁忌女孩》的討論度大漲。</p>
                    <p class="Aron card-text"><b>編曲 By Aron</b></p>
                    <?php
                    if(!isset($_COOKIE['session_id']))
                    {
                        echo'';
                    }
                    else
                    {
                        $guid = $_COOKIE['session_id'];
                        $query1 = "SELECT * FROM Final_member WHERE guid = '$guid'";
                        $result1 = mysqli_query($link,$query1);
                        $row1 = mysqli_fetch_array($result1);
                        if($row1['duedate'] >= date("Y-m-d"))
                        {
                        echo'
                            <a href="http://120.107.152.110/~a0480/image/image3.html" class="Aron btn btn-primary">視聽&預覽琴譜</a>
                        ';
                        }
                        else
                        {
                        echo'
                            <a href="subscription.php" class="Aron btn btn-primary">會員過期</a>
                        ';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="Aron col-sm-6 col-lg mb-3">
            <div class="Aron card" style="width: 20rem;">
                <img src="img/sea.jpg" class="Aron card-img-top" alt="...">
                <div class="Aron card-body">
                    <h5 class="Aron card-title"><b>陰陽師─遠海航船</b></h5>
                    <p class="Aron card-text">和風遊戲「陰陽師」再推出遊戲內的新庭院外觀，不但精美且BGM優美耐聽，瞬間贏得遊戲玩家一片好評。</p>
                    <p class="Aron card-text">我們的Aron老師也加緊時間完成了BGM譜子的電子版本，在Youtube頻道上更親自演奏，歡迎點選連結觀看。</p>
                    <p class="Aron card-text"><b>編曲 By Aron</b></p>
                    <?php
                    if(!isset($_COOKIE['session_id']))
                    {
                        echo'';
                    }
                    else
                    {
                        $guid = $_COOKIE['session_id'];
                        $query1 = "SELECT * FROM Final_member WHERE guid = '$guid'";
                        $result1 = mysqli_query($link,$query1);
                        $row1 = mysqli_fetch_array($result1);
                        if($row1['duedate'] >= date("Y-m-d"))
                        {
                        echo'
                            <a href="https://www.youtube.com/watch?v=h3AaOuxQKmQ" class="Aron btn btn-success">觀看真人演奏</a>
                            <a href="http://120.107.152.110/~a0480/image/image7.html" class="Aron btn btn-primary">視聽&預覽琴譜</a>
                        ';
                        }
                        else
                        {
                        echo'
                            <a href="subscription.php" class="Aron btn btn-primary">會員過期</a>
                        ';
                        }

                    }
                    ?>

                </div>
            </div>
        </div>            
        <div class="Eric col-sm-6 col-lg mb-3">
            <div class="Eric card" style="width: 20rem;">
                <img src="img/Ninelie.jpg" class="Eric card-img-top" alt="...">
                <div class="Eric card-body">
                    <h5 class="Eric card-title"><b>Ninelie</b></h5>
                    <p class="Eric card-text">在同一片天空底下　想透過星星　傳遞聲音給在另一端的你　但就像被雨淋溼的夢想一樣　它們已失去了光芒<br>--節錄自歌詞翻譯<br><b>編曲 By Eric</b></p>
                    <?php
                    if(!isset($_COOKIE['session_id']))
                    {
                        echo'';
                    }
                    else
                    {
                        $guid = $_COOKIE['session_id'];
                        $query1 = "SELECT * FROM Final_member WHERE guid = '$guid'";
                        $result1 = mysqli_query($link,$query1);
                        $row1 = mysqli_fetch_array($result1);
                        if($row1['duedate'] >= date("Y-m-d"))
                        {
                        echo'
                            <a href="pianosheet/Ninelie.html" class="Eric btn btn-primary">視聽&預覽琴譜</a>
                        ';
                        }
                        else
                        {
                        echo'
                            <a href="subscription.php" class="Eric btn btn-primary">會員過期</a>
                        ';
                        }
                    }
                    ?>

                </div>
            </div>
        </div>            
        <div class="Eric col-sm-6 col-lg mb-3">
            <div class="Eric card" style="width: 20rem;">
                <img src="img/Date A Live OST.png" class="Eric card-img-top" alt="...">
                <div class="Eric card-body">
                    <h5 class="Eric card-title"><b>Date A Live OST</b></h5>
                    <p class="Eric card-text">精靈，那是從異世界出現、一切都是謎團的存在，其現身伴隨引發了空間震的災害，但精靈本身的力量卻遠遠超過人類的認知。<br><b>編曲 By Eric</b></p>
                    <?php
                    if(!isset($_COOKIE['session_id']))
                    {
                        echo'';
                    }
                    else
                    {
                        $guid = $_COOKIE['session_id'];
                        $query1 = "SELECT * FROM Final_member WHERE guid = '$guid'";
                        $result1 = mysqli_query($link,$query1);
                        $row1 = mysqli_fetch_array($result1);
                        if($row1['duedate'] >= date("Y-m-d"))
                        {
                        echo'
                            <a href="pianosheet/Date A Live OST.html" class="Eric btn btn-primary">視聽&預覽琴譜</a>
                        ';
                        }
                        else
                        {
                        echo'
                            <a href="subscription.php" class="Eric btn btn-primary">會員過期</a>
                        ';
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <div class="Aron Eric row" align="center" id="list">
        <div class="Aron col-sm-6 col-lg mb-3">
            <div class="Aron card" style="width: 20rem;">
                <img src="img/still_sleeping.jpg" class="Aron card-img-top" alt="...">
                <div class="Aron card-body">
                    <h5 class="Aron card-title"><b>依然睡公主</b></h5>
                    <p class="Aron card-text">改編自鄧紫棋在13歲時自己創作的參賽歌曲《Sleeping Beauty》的中文版「睡公主」，歌曲收錄於她個人第七張專輯《摩天動物園》中。</p>
                    <p class="Aron card-text"><b>編曲 By Aron</b></p>
                    <?php
                    if(!isset($_COOKIE['session_id']))
                    {
                        echo'';
                    }
                    else
                    {
                        $guid = $_COOKIE['session_id'];
                        $query1 = "SELECT * FROM Final_member WHERE guid = '$guid'";
                        $result1 = mysqli_query($link,$query1);
                        $row1 = mysqli_fetch_array($result1);
                        if($row1['duedate'] >= date("Y-m-d"))
                        {
                        echo'
                            <a href="http://120.107.152.110/~a0480/image/image1.html" class="Aron btn btn-primary">視聽&預覽琴譜</a>
                        ';
                        }
                        else
                        {
                        echo'
                            <a href="subscription.php" class="Aron btn btn-primary">會員過期</a>
                        ';
                        }
                    }
                    ?>
                    
                </div>
            </div>
        </div>
        <div class="Aron col-sm-6 col-lg mb-3">
            <div class="Aron card" style="width: 20rem;">
                <img src="img/dust.jpg" class="Aron card-img-top" alt="...">
                <div class="Aron card-body">
                    <h5 class="Aron card-title"><b>Dust</b></h5>
                    <p class="Aron card-text">泰劇《欲火蝴蝶》Ost.。於今年5月完結的電視劇，其片頭旋律簡單動聽。GMMTV旗下女演員สรัลชนา อภิสมัยมงคล演唱的女聲版本也深得觀眾的心。<br><b>編曲 By Aron</b></p>
                    <?php
                    if(!isset($_COOKIE['session_id']))
                    {
                        echo'';
                    }
                    else
                    {
                        $guid = $_COOKIE['session_id'];
                        $query1 = "SELECT * FROM Final_member WHERE guid = '$guid'";
                        $result1 = mysqli_query($link,$query1);
                        $row1 = mysqli_fetch_array($result1);
                        if($row1['duedate'] >= date("Y-m-d"))
                        {
                        echo'
                            <a href="http://120.107.152.110/~a0480/image/image4.html" class="Aron btn btn-primary">視聽&預覽琴譜</a>
                        ';
                        }
                        else
                        {
                        echo'
                            <a href="subscription.php" class="Aron btn btn-primary">會員過期</a>
                        ';
                        }
                    }
                    ?>
                    
                </div>
            </div>
        </div>            
        <div class="Eric col-sm-6 col-lg mb-3">
            <div class="Eric card" style="width: 20rem;">
                <img src="img/In my dreams.png" class="Eric card-img-top" alt="...">
                <div class="Eric card-body">
                    <h5 class="Eric card-title"><b>In my dreams</b></h5>
                    <p class="Eric card-text">在Eric上網搜尋純音樂的曲集時，意外的覺得很符合他的胃口，因此就決定把這份音樂給譜寫下來了。</p>
                    <p class="Eric card-text"><b>編曲 By Eric</b></p>
                    <?php
                    if(!isset($_COOKIE['session_id']))
                    {
                        echo'';
                    }
                    else
                    {
                        $guid = $_COOKIE['session_id'];
                        $query1 = "SELECT * FROM Final_member WHERE guid = '$guid'";
                        $result1 = mysqli_query($link,$query1);
                        $row1 = mysqli_fetch_array($result1);
                        if($row1['duedate'] >= date("Y-m-d"))
                        {
                        echo'
                            <a href="pianosheet/In my dreams.html" class="Eric btn btn-primary">視聽&預覽琴譜</a>
                        ';
                        }
                        else
                        {
                        echo'
                            <a href="subscription.php" class="Eric btn btn-primary">會員過期</a>
                        ';
                        }
                    }
                    ?>
                    
                </div>
            </div>
        </div>
        <div class="Eric col-sm-6 col-lg mb-3">
            <div class="Eric card" style="width: 20rem;">
                <img src="img/Help - Thaehan.jpg" class="Eric card-img-top" alt="...">
                <div class="Eric card-body">
                    <h5 class="Eric card-title"><b>Help - Thaehan</b></h5>
                    <p class="Eric card-text">這首是Eric在遊玩osu時意外覺得好聽的歌曲，也耗費了不少時間將他譜寫出來。</p>
                    <p class="Eric card-text">　</p>
                    <p class="Eric card-text"><b>編曲 By Eric</b></p>
                    <?php
                    if(!isset($_COOKIE['session_id']))
                    {
                        echo'';
                    }
                    else
                    {
                        $guid = $_COOKIE['session_id'];
                        $query1 = "SELECT * FROM Final_member WHERE guid = '$guid'";
                        $result1 = mysqli_query($link,$query1);
                        $row1 = mysqli_fetch_array($result1);
                        if($row1['duedate'] >= date("Y-m-d"))
                        {
                        echo'
                            <a href="pianosheet/Help - Thaehan.html" class="Eric btn btn-primary">視聽&預覽琴譜</a>
                        ';
                        }
                        else
                        {
                        echo'
                            <a href="subscription.php" class="Eric btn btn-primary">會員過期</a>
                        ';
                        }
                    }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="Aron Eric row" align="center" id="list">
        <div class="Aron col-sm-6 col-lg mb-3">
            <div class="Aron card" style="width: 20rem;">
                <img src="img/nlove.jpg" class="Aron card-img-top" alt="...">
                <div class="Aron card-body">
                    <h5 class="Aron card-title"><b>憾情</b></h5>
                    <p class="Aron card-text">療癒系半糖修真MMO《天涯幻夢》。因為其主題曲動人反而讓網友不是去找遊戲反而去找音樂了XD</p>
                    <p class="Aron card-text"><b>編曲 By Aron</b></p>
                    <?php
                    if(!isset($_COOKIE['session_id']))
                    {
                        echo'';
                    }
                    else
                    {
                        $guid = $_COOKIE['session_id'];
                        $query1 = "SELECT * FROM Final_member WHERE guid = '$guid'";
                        $result1 = mysqli_query($link,$query1);
                        $row1 = mysqli_fetch_array($result1);
                        if($row1['duedate'] >= date("Y-m-d"))
                        {
                        echo'
                            <a href="http://120.107.152.110/~a0480/image/image6.html" class="Aron btn btn-primary">視聽&預覽琴譜</a>
                        ';
                        }
                        else
                        {
                        echo'
                            <a href="subscription.php" class="Aron btn btn-primary">會員過期</a>
                        ';
                        }
                    }
                    ?>
                    
                </div>
            </div>
        </div>
        <div class="Aron col-sm-6 col-lg mb-3">
            <div class="Aron card" style="width: 20rem;">
                <img src="img/collapsing_world.jpg" class="Aron card-img-top" alt="...">
                <div class="Aron card-body">
                    <h5 class="Aron card-title"><b>[抖音神曲]Collapsing World</b></h5>
                    <p class="Aron card-text">在抖音上被用作檢出分手回憶的畫面，隔著屏幕都能感受到的心痛。『早知道分手後勁那麼大，當初不認識你就好了。』</p>
                    <p class="Aron card-text"><b>編曲 By Aron</b></p>
                    <?php
                    if(!isset($_COOKIE['session_id']))
                    {
                        echo'';
                    }
                    else
                    {
                        $guid = $_COOKIE['session_id'];
                        $query1 = "SELECT * FROM Final_member WHERE guid = '$guid'";
                        $result1 = mysqli_query($link,$query1);
                        $row1 = mysqli_fetch_array($result1);
                        if($row1['duedate'] >= date("Y-m-d"))
                        {
                        echo'
                            <a href="http://120.107.152.110/~a0480/image/image8.html" class="Aron btn btn-primary">視聽&預覽琴譜</a>
                        ';
                        }
                        else
                        {
                        echo'
                            <a href="subscription.php" class="Aron btn btn-primary">會員過期</a>
                        ';
                        }
                    }
                    ?>
                    
                </div>
            </div>
        </div>
        <div class="Eric col-sm-6 col-lg mb-3">
            <div class="Eric card" style="width: 20rem;">
                <img src="img/Memory.jpg" class="Eric card-img-top" alt="...">
                <div class="Eric card-body">
                    <h5 class="Eric card-title"><b>Memory</b></h5>
                    <p class="Eric card-text">來自恐怖美術館的記憶。</p>
                    <p class="Eric card-text"><b>編曲 By Eric</b></p>
                    <?php
                    if(!isset($_COOKIE['session_id']))
                    {
                        echo'';
                    }
                    else
                    {
                        $guid = $_COOKIE['session_id'];
                        $query1 = "SELECT * FROM Final_member WHERE guid = '$guid'";
                        $result1 = mysqli_query($link,$query1);
                        $row1 = mysqli_fetch_array($result1);
                        if($row1['duedate'] >= date("Y-m-d"))
                        {
                        echo'
                            <a href="pianosheet/Memory.html" class="Eric btn btn-primary">視聽&預覽琴譜</a>
                        ';
                        }
                        else
                        {
                        echo'
                            <a href="subscription.php" class="Eric btn btn-primary">會員過期</a>
                        ';
                        }
                    }
                    ?>
                    
                </div>
            </div>
        </div>            
        <div class="Eric col-sm-6 col-lg mb-3">
            <div class="Eric card" style="width: 20rem;">
                <img src="img/Orange.jpg" class="Eric card-img-top" alt="...">
                <div class="Eric card-body">
                    <h5 class="Eric card-title"><b>Orange</b></h5>
                    <p class="Eric card-text">歌曲來自《四月是你的謊言》（日語：四月は君の嘘）當中的片尾曲。這份譜是從網路上找別人cover的版本在自行聽音編曲的。</p>
                    <p class="Eric card-text"><b>編曲 By Eric</b></p>
                    <?php
                    if(!isset($_COOKIE['session_id']))
                    {
                        echo'';
                    }
                    else
                    {
                        $guid = $_COOKIE['session_id'];
                        $query1 = "SELECT * FROM Final_member WHERE guid = '$guid'";
                        $result1 = mysqli_query($link,$query1);
                        $row1 = mysqli_fetch_array($result1);
                        if($row1['duedate'] >= date("Y-m-d"))
                        {
                        echo'
                            <a href="pianosheet/Orange.html" class="Eric btn btn-primary">視聽&預覽琴譜</a>
                        ';
                        }
                        else
                        {
                        echo'
                            <a href="subscription.php" class="Eric btn btn-primary">會員過期</a>
                        ';
                        }
                    }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="Eric row" align="center" id="list">
        <div class="Eric col-sm-6 col-lg mb-3">
            <div class="Eric card" style="width: 20rem;">
                <img src="img/Phoenix.jpg" class="Eric card-img-top" alt="...">
                <div class="Eric card-body">
                    <h5 class="Eric card-title"><b>Phoenix</b></h5>
                    <p class="Eric card-text">2019年<br>英雄聯盟世界賽主題曲</p>
                    <p class="Eric card-text">　</p>
                    <p class="Eric card-text"><b>編曲 By Eric</b></p>
                    <?php
                    if(!isset($_COOKIE['session_id']))
                    {
                        echo'';
                    }
                    else
                    {
                        $guid = $_COOKIE['session_id'];
                        $query1 = "SELECT * FROM Final_member WHERE guid = '$guid'";
                        $result1 = mysqli_query($link,$query1);
                        $row1 = mysqli_fetch_array($result1);
                        if($row1['duedate'] >= date("Y-m-d"))
                        {
                        echo'
                            <a href="pianosheet/Phoenix.html" class="Eric btn btn-primary">視聽&預覽琴譜</a>
                        ';
                        }
                        else
                        {
                        echo'
                            <a href="subscription.php" class="Eric btn btn-primary">會員過期</a>
                        ';
                        }
                    }
                    ?>
                    
                </div>
            </div>
        </div>
        <div class="Eric col-sm-6 col-lg mb-3">
            <div class="Eric card" style="width: 20rem;">
                <img src="img/Rise.jpg" class="Eric card-img-top" alt="...">
                <div class="Eric card-body">
                    <h5 class="Eric card-title"><b>Rise</b></h5>
                    <p class="Eric card-text">2018年<br>英雄聯盟世界賽主題曲</p>
                    <p class="Eric card-text">　</p>
                    <p class="Eric card-text"><b>編曲 By Eric</b></p>
                    <?php
                    if(!isset($_COOKIE['session_id']))
                    {
                        echo'';
                    }
                    else
                    {
                        $guid = $_COOKIE['session_id'];
                        $query1 = "SELECT * FROM Final_member WHERE guid = '$guid'";
                        $result1 = mysqli_query($link,$query1);
                        $row1 = mysqli_fetch_array($result1);
                        if($row1['duedate'] >= date("Y-m-d"))
                        {
                        echo'
                            <a href="pianosheet/Rise.html" class="Eric btn btn-primary">視聽&預覽琴譜</a>
                        ';
                        }
                        else
                        {
                        echo'
                            <a href="subscription.php" class="Eric btn btn-primary">會員過期</a>
                        ';
                        }
                    }
                    ?>
                    
                </div>
            </div>
        </div>            
        <div class="Eric col-sm-6 col-lg mb-3">
            <div class="Eric card" style="width: 20rem;">
                <img src="img/There Is A Reason Full Version.jpg" class="Eric card-img-top" alt="...">
                <div class="Eric card-body">
                    <h5 class="Eric card-title"><b>There Is A Reason</b></h5>
                    <p class="Eric card-text">本曲為「遊戲人生」劇場版主題曲<br><s>A.K.A 你老婆爆了</s></p>
                    <p class="Eric card-text">　</p>
                    <p class="Eric card-text"><b>編曲 By Eric</b></p>
                    <?php
                    if(!isset($_COOKIE['session_id']))
                    {
                        echo'';
                    }
                    else
                    {
                        $guid = $_COOKIE['session_id'];
                        $query1 = "SELECT * FROM Final_member WHERE guid = '$guid'";
                        $result1 = mysqli_query($link,$query1);
                        $row1 = mysqli_fetch_array($result1);
                        if($row1['duedate'] >= date("Y-m-d"))
                        {
                        echo'
                            <a href="pianosheet/There Is A Reason Full Version.html" class="Eric btn btn-primary">視聽&預覽琴譜</a>
                        ';
                        }
                        else
                        {
                        echo'
                            <a href="subscription.php" class="Eric btn btn-primary">會員過期</a>
                        ';
                        }
                    }
                    ?>
                    
                </div>
            </div>
        </div>            
        <div class="Eric col-sm-6 col-lg mb-3">
            <div class="Eric card" style="width: 20rem;">
                <img src="img/xian jian wen qing.jpg" class="Eric card-img-top" alt="...">
                <div class="Eric card-body">
                    <h5 class="Eric card-title"><b>仙劍問情</b></h5>
                    <p class="Eric card-text">翠柳戲炊烟，發草疏欄。桃源別有一片天，解劍放舟清波上，隨遇而安，鴛鴦不羡仙，今夕何年？人生有酒需盡歡，醉臥紅塵最深處，遙望千山。</p>
                    <p class="Eric card-text"><b>編曲 By Eric</b></p>
                    <?php
                    if(!isset($_COOKIE['session_id']))
                    {
                        echo'';
                    }
                    else
                    {
                        $guid = $_COOKIE['session_id'];
                        $query1 = "SELECT * FROM Final_member WHERE guid = '$guid'";
                        $result1 = mysqli_query($link,$query1);
                        $row1 = mysqli_fetch_array($result1);
                        if($row1['duedate'] >= date("Y-m-d"))
                        {
                        echo'
                            <a href="pianosheet/xian jian wen qing.html" class="Eric btn btn-primary">視聽&預覽琴譜</a>
                        ';
                        }
                        else
                        {
                        echo'
                            <a href="subscription.php" class="Eric btn btn-primary">會員過期</a>
                        ';
                        }
                    }
                    ?>
                    
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