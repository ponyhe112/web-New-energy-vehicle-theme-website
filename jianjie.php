<!DOCTYPE html>
<html lang="zh">
<?php header('Content-Type:text/html;charset=utf-8');
session_start();
?>

<head>
    <meta charset="UTF-8">
    <title>新能源简介</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/jianjie.css">
    <link rel="stylesheet" href="css/iconfont.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".flip").click(function() {
                $(".panel").slideToggle("slow");
            });
        });

        $(document).ready(function() {
            $("details").dblclick(function() {
                alert("不要一直点我");
            });
        });



        function jingxi() {
            document.getElementsByName('button').innerHTML = "hahahaha";
        }

        function gettime() {
            var d = new Date();
            var x = document.getElementById("demo");
            x.innerHTML = d.getFullYear();
        }

        function getday() {
            var d = new Date();
            var x = document.getElementById("demo1");
            x.innerHTML = d.toUTCString();
        }

        function copy() {
            alert("禁止复制");
        }

        $(document).ready(function() {


            $("#btn1").click(function() {
                $("p").prepend("<b>20195650</b> ");
            });

            $("#btn2").click(function() {
                $("ol").append("<li>北汽新能源</li>");
            });
        });

        $(document).ready(function() {
            $("#btn3").click(function() {
                $("#div1").remove();
            });
            $("#btn4").click(function() {
                $("#div2").remove();
            });
            $("#btn5").click(function() {
                $("#div3").remove();
            });
            $("#btn6").click(function() {
                $("#div4").remove();
            });
        });

        $(document).ready(function() {
            $("#button_addclass").click(function() {
                $("#addclassdiv").addClass("addcolor");
            });
        });


        $(document).ready(function() {
            $("#button_remoclass").click(function() {
                $("#addclassdiv").removeClass("addcolor");
            });
        });
    </script>
    <style>
        .addcolor {
            color: pink;
        }
    </style>

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
                                    } ?> </a><span>|</span>



            </div>
        </div>
    </div>
    <div class="mycontainer">
        2021年即将结束：<progress value="360" max="365"></progress>
        现在是<time datetime="2021-12-26">圣诞节</time>
        <button onclick="gettime()" id="demo">点我获取今年年份</button>
        <button onclick="getday()" id="demo1">点我获取具体时间</button>
        <div class="panel">
            <h1>新能源汽车-新能源简介</h1>
            <h2>在这里你可以找到你所需要的新能源基本介绍</h2>
        </div>
        <p class="flip">点击展开</p>
        <div class="video_text" style="float:left;">
            <video src="video/三维新能源汽车宣传片.mp4" width="500px" controls></video>
            <span class="myspan">
                <details oncopy="copy()">
                    <summary>新能源汽车基本介绍（点击展开）：</summary><br>
                    新能源汽车是指采用非常规的车用燃料作为动力来源（或使用常规的车用燃料、采用新型车载动力装置），综合车辆的动力控制和驱动方面的先进技术，形成的技术原理先进、具有新技术、新结构的汽车。
                    新能源汽车包括四大类型混合动力电动汽车（HEV）、纯电动汽车（BEV，包括太阳能汽车）、燃料电池电动汽车（FCEV）、其他新能源（如超级电容器、飞轮等高效储能器）汽车等。非常规的车用燃料指除汽油、柴油之外的燃料。
                </details>
            </span>


        </div>
        <audio src="mp3/川井憲次 - 激戦開始.mp3" controls autoplay>
        </audio>


        中国新能源汽车保有量：<meter value="5" min="0" max="10">5 out of 10</meter>

        <div class="imgheadertext" id="addclassdiv">请欣赏新能源汽车精选美图</div>
        <button id="button_addclass">改变字体颜色</button>
        <button id="button_remoclass">恢复字体颜色</button>
        <div class="grid-container">
            <div id="div1">
                <img src="img/5fdab59830867.jpg-thumb220x146.jpg" class="grid-container_img">
                <figcaption>新能源——特斯拉</figcaption>
                <button id="btn3">移除图片</button>
            </div>
            <div id="div2">
                <img src="img/5fb2248241855.jpg-thumb220x146.jpg" class="grid-container_img">
                <figcaption>新能源——比亚迪</figcaption>
                <button id="btn4">移除图片</button>
            </div>
            <div id="div3">
                <img src="img/6164003c9b885.jpg" class="grid-container_img">
                <figcaption>新能源——北汽新能源</figcaption>
                <button id="btn5">移除图片</button>
            </div>
            <div id="div4">


                <img src="img/6164eabbf26d8.jpg" class="grid-container_img">
                <figcaption>新能源——吉利</figcaption>
                <button id="btn6">移除图片</button>

            </div>

        </div>

        <p>在此添加你的车型</p>

        <ol>
            <li>比亚迪</li>
            <li>特斯拉</li>
            <li>吉利</li>
        </ol>
        <button id="btn1">添加我的学号</button>
        <button id="btn2">添加车型</button>


    </div>

</body>