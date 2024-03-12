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
    <script src="js/product.js"></script>
    
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
                        <a class="nav-link active" href="product.php">產品項目</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="joindate.php">加入日期查詢</a>
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
                        <h1 class="fw-bolder">項目管理</h1>
                        <p class="lead fw-normal text-muted mb-5">確認已登錄的項目</p>
                    </div>
                </div>
            </div>
            <div id="contents" class="row" style="width: 80%;margin: auto;border-top-style: solid;background-color: gray;">
                <div class="col text-center" style="padding: 15px;"><a href="#SoundEffect" class="btn current">Sound Effect</a></div>
                <div class="col text-center" style="padding: 15px;"><a href="#PianoMusic" class="btn ">Piano Music</a></div>
                <div class="col text-center" style="padding: 15px;"><a href="#BGM" class="btn ">BGM</a></div>
                <div class="col text-center" style="padding: 15px;"><a href="#PianoSheet" class="btn ">Piano Sheet</a></div>
            </div>
            <br>
            <div id="contents">
            <div id="SoundEffect" style="margin-bottom: 25%;">
                <div class="row" style="width: 80%;margin: auto;border-top-style: solid;background-color: gray;">
                    <div class="col text-center" style="padding: 15px;">標題</div>
                    <div class="col text-center" style="padding: 15px;">版本</div>
                    <div class="col text-center" style="padding: 15px;">狀態</div>
                    <div class="col text-center" style="padding: 15px;">檔案格式</div>
                    <div class="col text-center" style="padding: 15px;">其他</div>
                </div>
            <?php 
            require('config.php');
            $sqlstr = "select * from Final_soundeffect order by SFXname ASC";
            $result = mysqli_query($link,$sqlstr);
            while ($row = mysqli_fetch_array($result)){
                echo'
                    <div class="row" style="width: 80%;margin: auto;border-bottom-style: solid;border-color: gray;word-break: break-all;display: flex;align-items: center">
                        <div class="col text-center" style="padding: 15px;">'.$row['SFXname'].'</div>
                        <div class="col text-center" style="padding: 15px;">1.0</div>
                        <div class="col text-center" style="padding: 15px;">已上架</div>
                        <div class="col text-center" style="padding: 15px;">'.$row['SFXtype'].'</div>
                        <div class="col text-center" style="padding: 15px;">無</div>
                    </div>
                ';
            }
            $sqlstr = "select * from Final_soundeffect_1 order by SFXname ASC";
            $result = mysqli_query($link,$sqlstr);
            while ($row = mysqli_fetch_array($result)){
                echo'
                    <div class="row" style="width: 80%;margin: auto;border-bottom-style: solid;border-color: gray;word-break: break-all;display: flex;align-items: center">
                        <div class="col text-center" style="padding: 15px;">'.$row['SFXname'].'</div>
                        <div class="col text-center" style="padding: 15px;">1.0</div>
                        <div class="col text-center" style="padding: 15px;">已上架</div>
                        <div class="col text-center" style="padding: 15px;">'.$row['SFXtype'].'</div>
                        <div class="col text-center" style="padding: 15px;">無</div>
                    </div>
                ';
            }
            ?>
            </div>
            <div id="PianoMusic" style="margin-bottom: 25%;">
                <div class="row" style="width: 80%;margin: auto;border-top-style: solid;background-color: gray;">
                    <div class="col text-center" style="padding: 15px;">縮圖</div>
                    <div class="col text-center" style="padding: 15px;">標題</div>
                    <div class="col text-center" style="padding: 15px;">版本</div>
                    <div class="col text-center" style="padding: 15px;">狀態</div>
                    <div class="col text-center" style="padding: 15px;">檔案格式</div>
                    <div class="col text-center" style="padding: 15px;">其他</div>
                </div>
            <?php
            $sqlstr = "select * from Final_pianomusic order by PMname ASC";
            $result = mysqli_query($link,$sqlstr);
            while ($row = mysqli_fetch_array($result)){
                echo'
                    <div class="row" style="width: 80%;margin: auto;border-bottom-style: solid;border-color: gray;word-break: break-all;display: flex;align-items: center">
                        <div class="col text-center" style="padding: 15px;"><img src="img/'.$row['PMename'].'.'.$row['PICtype'].'" style="width: 80%"></div>
                        <div class="col text-center" style="padding: 15px;">'.$row['PMname'].'</div>
                        <div class="col text-center" style="padding: 15px;">1.0</div>
                        <div class="col text-center" style="padding: 15px;">已上架</div>
                        <div class="col text-center" style="padding: 15px;">'.$row['PMtype'].'</div>
                        <div class="col text-center" style="padding: 15px;">無</div>
                    </div>
                ';
            }
            ?>
            </div>
            <div id="BGM" style="margin-bottom: 25%;">
                <div class="row" style="width: 80%;margin: auto;border-top-style: solid;background-color: gray;">
                    <div class="col text-center" style="padding: 15px;">標題</div>
                    <div class="col text-center" style="padding: 15px;">版本</div>
                    <div class="col text-center" style="padding: 15px;">狀態</div>
                    <div class="col text-center" style="padding: 15px;">檔案格式</div>
                    <div class="col text-center" style="padding: 15px;">其他</div>
                </div>
            <?php
            $sqlstr = "select * from Final_BGM order by BGMname ASC";
            $result = mysqli_query($link,$sqlstr);
            while ($row = mysqli_fetch_array($result)){
                echo'
                    <div class="row" style="width: 80%;margin: auto;border-bottom-style: solid;border-color: gray;word-break: break-all;display: flex;align-items: center">
                        <div class="col text-center" style="padding: 15px;">'.$row['BGMname'].'</div>
                        <div class="col text-center" style="padding: 15px;">1.0</div>
                        <div class="col text-center" style="padding: 15px;">已上架</div>
                        <div class="col text-center" style="padding: 15px;">'.$row['BGMtype'].'</div>
                        <div class="col text-center" style="padding: 15px;">無</div>
                    </div>
                ';
            }
            ?>
            </div>
            <div id="PianoSheet" style="margin-bottom: 25%;">
                <div class="row" style="width: 80%;margin: auto;border-top-style: solid;background-color: gray;">
                    <div class="col text-center" style="padding: 15px;">縮圖</div>
                    <div class="col text-center" style="padding: 15px;">標題</div>
                    <div class="col text-center" style="padding: 15px;">版本</div>
                    <div class="col text-center" style="padding: 15px;">狀態</div>
                    <div class="col text-center" style="padding: 15px;">檔案格式</div>
                    <div class="col text-center" style="padding: 15px;">其他</div>
                </div>
            <?php
            $sqlstr = "select * from Final_pianosheet order by PSname ASC";
            $result = mysqli_query($link,$sqlstr);
            while ($row = mysqli_fetch_array($result)){
                echo'
                    <div class="row" style="width: 80%;margin: auto;border-bottom-style: solid;border-color: gray;word-break: break-all;display: flex;align-items: center">
                        <div class="col text-center" style="padding: 15px;"><img src="img/'.$row['PSename'].'.'.$row['PICtype'].'" style="width: 80%"></div>
                        <div class="col text-center" style="padding: 15px;">'.$row['PSname'].'</div>
                        <div class="col text-center" style="padding: 15px;">1.0</div>
                        <div class="col text-center" style="padding: 15px;">已上架</div>
                        <div class="col text-center" style="padding: 15px;">'.$row['PStype'].'</div>
                        <div class="col text-center" style="padding: 15px;">無</div>
                    </div>
                ';
            }
            ?>
            </div>
            </div>
    <footer>
        <p>Copyright © 1011 JackStudio. All rights reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>