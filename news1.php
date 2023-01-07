<!DOCTYPE html>
<html lang="en">
<?php session_start();
header("Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" ); 
header("Cache-Control: no-cache, must-revalidate" );?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新闻</title>
    <link rel="stylesheet" href="css/news.css">
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
                        <a href="news1.php"><b>新闻</b></a>
                    </li>

                    <li class="nav-item">
                        <a href="video.php">视频</a>
                    </li>

                </ul>


            </div>
            <!-- <div class="header-welcome">

                欢迎光临访问新能源汽车网！
            </div> -->
            <header>
            <h2 style="text-align: center">欢迎光临访问新能源汽车网！</h2>
        </header>

        </div>

    </div>

    <div class="grid-container">
        <div class="item1">

            <div class="item_content">
                <img src="img/619c49fe8903f.png" alt="" class="item_content_img">
                <p class="item_text_name"><b>摩范速运MEP2.0平台正式上线，为城市物流行业发展再添新力！</b><br>
                </p>
                <p class="item_text_content">
                    2021年11月18日，摩范速运#城市物流数字科技平台#正式上线！（以下简称“摩范速运MEP2.0平台”）深挖城市物流行业痛点，以客户需求为导向，建立起一整套数字化解决方案，高效赋能业务运营和行业发展。 摩范速运自成立就以“打造城市物流数字科技”为使命，秉承“城运有道，速达天下”的发展理念，以数字科技驱动业务运营和行业发展。 摩范速运基于全国15城的运营经验积累、5000+自有运营车辆管理、超500家B端客户服务经历、累计110万车次城配业务出车，实现营收年复合增长率218%，历经28个月的积累与沉淀，厚积薄发摩范速运MEP2.0平台顺势而生。
                </p>

            </div>
            <div class="item_content"><img src="img/619b45bf9a305.png" alt="" class="item_content_img">
                <p class="item_text_name"><b>惊艳业界 全面开花——多款新车搭载孚能科技动力电池亮相广州车展</b><br>
                </p>
                <p class="item_text_content">
                    2021年11月19日，岚图梦想家MPV正式首发亮相广州车展，孚能科技作为全球三元软包动力电池领军企业之一，凭借其超强的能量密度、长循环寿命、快充优势和安全优势，与岚图成功牵手，共同打造全球首款大型豪华电动MPV。此外，奔驰、广汽埃安、广汽三菱等国内外知名车企的新款车型均搭载孚能科技动力电池，重磅亮相此次广州车展。 </p>
            </div>
            <div class="item_content"><img src="img/618c67ce345fc.png" alt="" class="item_content_img">
                <p class="item_text_name"><b>轻舟智航发布Driven-by-QCraft第三代自动驾驶硬件方案</b><br>
                </p>
                <p class="item_text_content">
                    近日,轻舟智航全新发布Driven-by-QCraft第三代L4级自动驾驶硬件方案,其中传感器套件结合了多类先进高精度传感器的特点,实现了360度无盲区感知,具备极强的稳定性和实时性。同时在传感器、计算平台、电源、通信等模块均采用全冗余设计。 在下一代硬件方案中,轻舟智航还将率先使用NVIDIA DRIVE Orin,让L4级自动驾驶的计算平台迈向量产车规级,这也意味着轻舟智航成为首个使用NVIDIA DRIVE Orin的L4级自动驾驶通用方案公司。 </p>
            </div>
            <div class="item_content"><img src="img/618897ba08596.jpeg" alt="" class="item_content_img">
                <p class="item_text_name"><b>飞行汽车现身第四届进博会，HRC助力实现未来绿色出行</b><br>
                </p>
                <p class="item_text_content">
                    11月5日，第四届中国国际进口博览会在国家会展中心拉开帷幕。本届展会聚焦“绿色低碳”主题，来自全球127个国家和地区的近3000家展商如约而至，争相展示企业品牌形象和实力，带来众多首次在国内公开展出的最新前沿技术及创新产品。 HRC作为进博会唯一的高性能复合材料综合解决方案供应商再一次隆重亮相，除了带来全面升级的更轻质更多样化的专业产品之外，还带来了一件神秘展品，引得观众们纷纷驻足观看，成为了全场当之无愧的焦点之一。 </p>
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


    <ul class="pagination">
        <li><a href="">«</a></li>
        <li><a class="active" href="news1.php">1</a></li>
        <li><a href="news2.php">2</a></li>
        <li><a href="news3.php">3</a></li>
        <li><a href="news2.php">»</a></li>
    </ul>




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