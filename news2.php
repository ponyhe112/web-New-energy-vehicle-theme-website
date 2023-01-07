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
                        <a href="">视频</a>
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
                <img src="img/61850cb0dbfc5.png" alt="" class="item_content_img">
                <p class="item_text_name"><b>松下电器与中集安瑞科签署谅解备忘录</b><br>
                </p>
                <p class="item_text_content">
                    2021年11月5日,第四届中国国际进口博览会在上海如约举行。松下集团连续四届参展,今年首次展出了以“环境”为主题的产品和解决方案。在进博会首日,松下电器中国东北亚公司(以下简称“松下电器”)宣布,与中集安瑞科控股有限公司(以下简称“中集安瑞科”)及其附属公司(统称“中集集团”)(香港股份代号:3899.HK)签订谅解备忘录,围绕松下氢能热电联供模块及技术,携手研发氢电综合应用(热电联供)端集成化产品(简称“氢能热电联供系统”),为氢电综合应用产品在中国的规模化推广进行技术投入及储备,提高氢能源利用效率,持续助力国家“双碳”战略目标的实施。签约双方在进博会展区内酒店举办了签约仪式,中集安瑞科董事长高翔先生,总经理杨晓虎先生,松下集团代表董事、全球副总裁本间哲朗先生,松下电器中国东北亚公司总裁CEO堂埜茂先生等双方高管出席了签约仪式。
                </p>

            </div>
            <div class="item_content"><img src="img/61850c18d4980.jpg" alt="" class="item_content_img">
                <p class="item_text_name"><b>科思创首次亮相中国国际进口博览会</b><br>
                </p>
                <p class="item_text_content">
                    遗产走进生活 遗产传承文明 ——世界遗产的大众传播... 从万里布鞋团走进世界遗产，助力世界遗产“活起来”，到《唐宫夜宴》《洛神水赋》等创新表达让“中国节日”...GLORYKYLIN：智能科技引领您的家居生活 随着AI和IoT技术的成熟，技术不再是智能家居产品的瓶颈，5G驱动的AIoT时代来临后，3C智能家居产品正在加速走向大众，产品不成熟，体验不够好、价格比较高等问题得到了优化处理，GLORYKYLIN品牌在智能3C破圈的关键...产经 </div>
            <div class="item_content"><img src="img/6180a51920583.jpg" alt="" class="item_content_img">
                <p class="item_text_name"><b>进军西南，产能再扩！曼德光电·重庆工厂实现全工艺投产</b><br>
                </p>
                <p class="item_text_content">
                    伴随汽车产业电气化、智能化发展，新技术与新产品的广泛应用，车灯被赋予了更多智能和造型的属性，其价值也在持续上升。有机构预测，到2025年我国车灯市场规模有望达到1021亿元。在此趋势下，车灯制造商正加紧在技术、产能等方面布局。 日前，车灯总制造商和设计方案提供商曼德光电在重庆新建的制造工厂实现了全工艺投产，当天，其全工艺生产的首支车灯正式下线。基于此，曼德光电在国内整车灯具年产能将在现有河北保定和徐水的制造工厂的基础上提升30万，达到230万套。 </div>
            <div class="item_content"><img src="img/616f8a3ca1268.png" alt="" class="item_content_img">
                <p class="item_text_name"><b>荣盛盟固利荣获“中国汽车工业科学技术奖”科技进步奖一等奖</b><br>
                </p>
                <p class="item_text_content">
                    10月19日,荣盛盟固利公司荣获汽车行业最具专业性及权威性的奖项 ——2021“中国汽车工业科学技术奖”科技进步奖一等奖。此次获奖的《高性能全气候电动客车动力平台关键技术与产业化应用》课题项目,解决了电动客车在低温条件下充电慢、不完全充电以及使用效率差的行业技术问题。为电动客车突破严寒,在寒区环境运营奠定了坚实的技术基础。 </div>


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
        <li><a href="news1.php">«</a></li>
        <li><a href="news1.php">1</a></li>
        <li><a class="active" href="news2.php">2</a></li>
        <li><a href="news3.php">3</a></li>
        <li><a href="news3.php">»</a></li>
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