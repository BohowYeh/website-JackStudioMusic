<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>音效Sound Effect</title>
        <link rel="icon" type="image/png" href="img/Browser icon.png">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">JackStudio Music</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/Yotube.jpg" alt="JackStudio" /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="soundeffect.php">Sound Effect</a>
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
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">介紹</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">分類</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#memes">迷因</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#sound">特效</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#wait1">敬請期待</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h2 class="mb-0">
                        您正在尋找影片素材所需的音效嗎?
                    </h2>
                    <div class="subheading mb-5">   
                        我們的音效可用於您手上正在剪輯的影片
                    </div>
                    <p class="lead mb-5">還在猶豫什麼？快來看看！</p>
                    <div class="social-icons">
                        <a class="social-icon" href="https://www.instagram.com/jack_studio_digital/"><i class="fab fa-instagram"></i></a>
                        <a class="social-icon" href="https://www.youtube.com/channel/UC2kPl51aqAUtTQigqjt_e3g"><i class="fab fa-youtube"></i></a>

                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">分類</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-3">迷因</h3>
                            <p>不來點meme就會沒命！我們的迷因音效由知名油土伯JACKSTUDIO精心收藏，如果你正在趕工手上的ㄎㄧㄤ片或.exe影片就不要錯過喔</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">June 2021</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-3">特效</h3>
                            <p>總是覺得你的影片少了點效果？來這裡準沒錯，由JACKSTUDIO精選的實用特效讓你的影片與眾不同</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">June 2021</span></div>
                    </div>
                        
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- memes-->
            <section class="resume-section" id="memes">
                <div class="resume-section-content">
                    <h2 class="mb-5">迷因</h2>
<?php 
    require('config.php');
    $sqlstr = "select * from Final_soundeffect";
    $result = mysqli_query($link,$sqlstr);
    while ($row = mysqli_fetch_array($result)){
        echo'
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">'.$row['SFXname'].'</h3>
                            <div class="subheading mb-3">'.$row['SFXintro'].'</div>
                            <div>
                                <audio src="SFX/memes/'.$row['SFXname'].'.'.$row['SFXtype'].'" controls = "controls" controlsList="nodownload" oncontextmenu="return false"></audio>
                            </div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">June 2021</span>
        ';
        if(!isset($_COOKIE['session_id'])){
            echo'</div>
                    </div>';
        }
        else
        {
            $guid = $_COOKIE['session_id'];
            $query1 = "SELECT * FROM Final_member WHERE guid = '$guid'";
            $result1 = mysqli_query($link,$query1);
            $row1 = mysqli_fetch_array($result1);
            if($row1['duedate'] >= date("Y-m-d")){
            echo'<br><br><a href="SFX/memes/'.$row['SFXname'].'.'.$row['SFXtype'].'" class="btn btn-primary" download = "'.$row['SFXname'].'.'.$row['SFXtype'].'">點此下載</a></div>
                    </div>';
            }
            else{
            echo'<br><br><a href="subscription.php" class="btn btn-primary">會員過期</a></div>
                    </div>';
            }
        }
    }
?>
                </div>
            </section>
            <hr class="m-0" />
            <!-- sound-->
            <section class="resume-section" id="sound">
                <div class="resume-section-content">
                    <h2 class="mb-5">特效</h2>
                    <ul class="fa-ul mb-5">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            他很讚
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            他很好用
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            應該啦
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            你試了不就知道了w
                        </li>
                    </ul>
<?php 
    require('config.php');
    $sqlstr = "select * from Final_soundeffect_1";
    $result = mysqli_query($link,$sqlstr);
    while ($row = mysqli_fetch_array($result)){
        echo'
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">'.$row['SFXname'].'</h3>
                            <div class="subheading mb-3">'.$row['SFXintro'].'</div>
                            <div>
                                <audio src="SFX/special/'.$row['SFXname'].'.'.$row['SFXtype'].'" controls = "controls" controlsList="nodownload" oncontextmenu="return false"></audio>
                            </div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">June 2021</span>
        ';
        if(!isset($_COOKIE['session_id'])){
            echo'</div>
                    </div>';
        }
        else
        {
            $guid = $_COOKIE['session_id'];
            $query1 = "SELECT * FROM Final_member WHERE guid = '$guid'";
            $result1 = mysqli_query($link,$query1);
            $row1 = mysqli_fetch_array($result1);
            if($row1['duedate'] >= date("Y-m-d")){
            echo'<br><br><a href="SFX/special/'.$row['SFXname'].'.'.$row['SFXtype'].'" class="btn btn-primary" download = "'.$row['SFXname'].'.'.$row['SFXtype'].'">點此下載</a></div>
                    </div>';
            }
            else{
            echo'<br><br><a href="subscription.php" class="btn btn-primary">會員過期</a></div>
                    </div>';
            }        
        }
    }
?>