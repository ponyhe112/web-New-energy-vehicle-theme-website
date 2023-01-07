<!DOCTYPE html>
<html lang="en">
<?php session_start();?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>视频</title>
    <link rel="stylesheet" href="css/video.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/iconfont.css">
</head>

<body>
    <div class="topbar">
        <div class="container">
            <div class="topbar-nav">
            <a href="homepage.php">首页</a><span>|</span>
                <a href="jianjie.php">新能源简介</a><span>|</span>
                <a href="<?php 
                            if (!(isset($_SESSION['username']))) {
                                echo "check_my.php";
                            } else echo "mypage.php"; ?>">我的</a><span>|</span>

            </div>
            <div class="topbar-info clearfix">
            <a href="<?php
                            if (!(isset($_SESSION['username']))) {
                                echo "login.php";
                            } else {
                                echo "";
                            }
                            ?>"><?php
                                if (!(isset($_SESSION['username']))) {
                                    echo "登录";
                                } else {
                                    echo "欢迎{$_SESSION['username']}用户";
                                }
                                ?></a><span>|</span>
                <a href="register.php"><?php
                                    if (!(isset($_SESSION['username']))) {
                                        echo "注册";
                                    } ?> </a><span>|</span>

                <a href="exit.php"><?php
                                    if ((isset($_SESSION['username']))) {
                                        echo "退出登录";
                                        // unset($_SESSION['username']);
                                    } ?> </a><span>|</span>

            </div>

        </div>
    </div>

    <div class="header">
        <div class="container">
            <div class="header-logo">
                <a href="homepage.php">
                    <img class="header-logo-image" src="img/汽车.png" alt="Logo">
                </a>

            </div>
            <div class="header-nav">
                <ul class="nav-list">
                    <li class="nav-category">
                        <a href="homepage.php">首页</a>
                    </li>
                    <li class="nav-item">
                        <a href="ceping.php">测评</a>
                    </li>
                    <li class="nav-item">
                        <a href="news1.php">新闻</a>
                    </li>

                    <li class="nav-item">
                        <a href=""><b>视频</b></a>
                    </li>

                </ul>


            </div>
            <div class="header-welcome">

                欢迎光临访问新能源汽车网！
            </div>

        </div>

    </div>

    <div class="video-header">
        <div>请欣赏新能源汽车相关宣传视频！</div>

    </div>

    <div class="grid-container">

        <div>
            <video src="video/Cybertruck - 特斯拉中国.mp4" class="grid-container_video" controls></video>
            <div class="video-text">
                <li>Cybertruck - 特斯拉中国</li>
            </div>
        </div>
        <div>
            <video src="video/Model S - 特斯拉中国.mp4" class="grid-container_video" controls></video>
            <div class="video-text">
                <li>Model S - 特斯拉</li>
            </div>
        </div>
        <div>
            <video src="video/Model S - 特斯拉中国_2.mp4" class="grid-container_video" controls></video>
            <div class="video-text">
                <li>Model S - 特斯拉</li>
            </div>
        </div>
        <div>
            <video src="video/Model Y - 特斯拉中国.mp4" class="grid-container_video" controls></video>
            <div class="video-text">
                <li>Model Y - 特斯拉</li>
            </div>
        </div>
        <div>
            <video src="video/Powerwall - 特斯拉中国.mp4" class="grid-container_video" controls></video>
            <div class="video-text">
                <li>Powerwall - 特斯拉</li>
            </div>
        </div>
        <div>
            <video src="video/中国高光车型！？比亚迪汉！.mp4" class="grid-container_video" controls></video>
            <div class="video-text">
                <li>中国高光车型！？比亚迪汉！</li>
            </div>

        </div>
        <div>
            <video src="video/华为牵手比亚迪-教科书级的宣传片.mp4" class="grid-container_video" controls></video>
            <div class="video-text">
                <li>华为牵手比亚迪-教科书级的宣传片</li>
            </div>

        </div>
        <div>
            <video src="video/比亚迪汉，也太帅了吧.mp4" class="grid-container_video" controls></video>
            <div class="video-text">
                <li>比亚迪汉，也太帅了吧</li>
            </div>

        </div>

    </div>



    <div class="footer">
        <div class="foot">
            <ul>
                <li class="fotlg">
                    <p>
                        <a href="/"><img src="img/汽车.png" width="100" height="70" alt="中国新能源汽车网"></a>
                    </p>
                    <p style="padding-top:35px;color: white;">
                        <span><a href="" style="color:white;">企业简介 </a></span> |
                        <span><a href="" style="color:white;">服务声明 </a></span> |
                        <span><a href="" style="color:white;">招贤纳士</a></span>
                    </p>
                    <p style="padding-top:10px;color: white">
                        <span><a href="" style="color:white;">联系我们</a></span> |
                        <span><a href="" style="color:white;">服务内容</a></span> |
                        <span><a href="" style="color:white;">网站地图</a></span>
                    </p>
                </li>
                <li class="fotxq">
                    <br>
                    <h2>新能源汽车门户网站<a href="" style="display:none;">花箱定制</a></h2>
                    <p>版权所有天津理工大学20195650贺浩原</p>
                    <p>新能源汽车网所有信息及作品，未经书面授权不得转载</p>
                    <br>
                    <p>20195650贺浩原 中加2班</p>
                    </p>

                </li>

                <li class="fotvx">
                    <div class="fotvx01">
                        <p style="float: left;">网站二维码</p>
                        <p style="float: right ;padding-left:20px ;">作者微信</p>
                        <p>
                            <img src="img/qrcode_chrome.png" width="99" height="99" alt="网站二维码" style="padding-right: 55px;margin-left: -20px;">
                            <img src="img/QQ图片20211213233751.jpg" width="99" height="99" alt="作者微信">
                        </p>
                    </div>


                    <div class="clear"></div>
                </li>
            </ul>

        </div>


    </div>
</body>