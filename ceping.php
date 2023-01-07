<!DOCTYPE html>
<html lang="en">
<?php session_start();
header("Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" ); 
header("Cache-Control: no-cache, must-revalidate" );?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>测评</title>
    <link rel="stylesheet" href="css/ceping.css">
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
                        <a href="ceping.php"><b>测评</b></a>
                    </li>
                    <li class="nav-item">
                        <a href="news1.php">新闻</a>
                    </li>

                    <li class="nav-item">
                        <a href="video.php">视频</a>
                    </li>

                </ul>


            </div>
            <div class="header-welcome">

                欢迎光临访问新能源汽车网！
            </div>

        </div>

    </div>

    <div class="grid-container">
        <div class="item1">

            <div class="item_content">
                <img src="img/60a5d2780ff20.jpg-thumb220x146.jpg" alt="" class="item_content_img">
                <p class="item_text_name"><b>新款特斯拉Model S:这样的方向盘让人又爱又恨</b><br>
                </p>
                <p class="item_text_content">
                    作为特斯拉的旗舰轿车，Model S Plaid身上汇聚了特斯拉最新的内外饰设计风格、最强劲的电驱动系统，以及非常颠覆认知的智能座舱设计风格。 颠覆传统用车习惯的Yoke矩形方向盘、性能叫板PS5的车机、1020马力的超强电驱动系统，还有1.99秒的百公里加速时间…都让它吊足了粉丝和媒体们的胃口。
                </p>

            </div>
            <div class="item_content"><img src="img/60a4d3f614f4d.jpg-thumb220x146.jpg" alt="" class="item_content_img">
                <p class="item_text_name"><b>比亚迪宋ev500真实续航详细讲解</b><br>
                </p>
                <p class="item_text_content">
                    说起比亚迪确实让国产车在行业内里处理一口气，尤其是在新能源汽车上，更是可以和电动汽车大佬特斯拉叫板，今天我们来看一款比亚迪的电动汽车，比亚迪宋EV500共推出四款车型，补贴后售价区间为18.99—21.99万。搭载62kWh三元锂电池组，工况续航达400km，60km/h等速续航最大里程为500km。车身尺寸与老款车型基本保持一致。
                </p>
            </div>
            <div class="item_content"><img src="img/5fdab59830867.jpg-thumb220x146.jpg" alt="" class="item_content_img">
                <p class="item_text_name"><b>五菱宏光mini真的是女孩子的快乐</b><br>
                </p>
                <p class="item_text_content">
                    人民需要什么五菱就为人民创造什么。自宏光mini发布以后销量直线上升。第一次在看到它的时候就被它的外表吸引了。五菱宏光MINI作为一辆电动车对于上下班非常合适的选择。小巧玲珑，性价比高，代步神奇。遮风挡雨。因为价格实惠，在同等级价格方面已经很实惠。而且保养也便宜，4s店免费送了3年。充电也非常方便，车身小，在城市堵车的时候也比较好开。同样停车也是十分方便。
                </p>
            </div>
            <div class="item_content"><img src="img/5fb2248241855.jpg-thumb220x146.jpg" alt="" class="item_content_img">
                <p class="item_text_name"><b>融合舒适与运动的插混SUV 试驾MG领航PHEV</b><br>
                </p>
                <p class="item_text_content">
                    『家族化设计』这个词，相信广大车友们已经听到耳根生茧。 家族化设计几乎是每个汽车品牌都需要做的事，但这件事搞不好就会搞成同质化。如果一个汽车品牌能把几项恰到好处的设计元素广泛应用于各类车型，车型之间又做到足够的差异化，这样的家族化设计才能真正指出这个品牌的前进方向。从我们今天试驾的这台『MG领航PHEV』身上，我们能看一系列的家族化设计。
                </p>
            </div>


        </div>
        <div class="item2">
            <div class="item_review">
                <div class="item_review_name"><b>网友评论</b></div>
                <div class="item_review_content">
                    <p><i><B>@不羁的闲鱼</B></i>:在交付活动上，Model S Plaid的车机能够玩赛博朋克2077这样的3A游戏，引起了现场一阵欢呼。但拿到车后大家却发现车机上根本没有任何3A大作…</p>
                    <p><i><B>@不妨早点睡</B></i>:海外知名汽车媒体Motor Trend还对这款车进行了续航里程测试和加速制动测试，以更直观的形式展现新热管理系统和新电机带来的改变。</p>
                    <p><i><B>@GenshinH</B></i>:在转向模式选为舒适模式时，方向盘的阻尼会非常小，单手开也非常轻松。</p>
                    <p><i><B>@暗猎</B></i>:五菱宏光mini真的是女孩子的快乐</p>
                    <p><i><B>@Tsundere</B></i>:就你这思维也能起这个名字，会误导多少人啊，首先不是每个人都在意你说的这几条，不知道在现在的新能源销售量上得到多少回馈？比例占多少？如果就那么你认识的几个人说后悔，也代表不了这么多车主，但估计后悔的最多的原因应该是早期买的续航里程太短而后悔吧，应该没有你说的这几个原因</p>
                    <p><i><B>@心在花都</B></i>:新能源yyds</p>
                    <p><i><B>@零度Alen</B></i>:充电桩少，充电速度慢，还有停车费，使用成本比柴油车或者改气的高，卖二手亏的怀疑人生，修车到处不会修，换电池比买车还贵！</p>
                    <p><i><B>@不瘦十斤不改名字</B></i>:价格便宜，车身尺寸小，停车方便，作为代步车来说还是挺合适的。</p>
                    <p><i><B>@豆浆</B></i>:应应急也是相当合适。</p>

                </div>
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

</html>