<!DOCTYPE html>
<html lang="en">
<?php session_start();
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . "GMT");
header("Cache-Control: no-cache, must-revalidate"); ?>

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
                <<a href="homepage.php">首页</a><span>|</span>
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
            <div class="header-welcome">

                欢迎光临访问新能源汽车网！
            </div>

        </div>

    </div>

    <div class="grid-container">
        <div class="item1">

            <div class="item_content">
                <img src="img/616e2804e5758.jpg" alt="" class="item_content_img">
                <p class="item_text_name"><b>创见未来 现代汽车集团中国前瞻数字研发中心正式在沪揭幕</b><br>
                </p>
                <p class="item_text_content">
                    - 现代汽车集团中国前瞻数字研发中心在上海正式开幕，这是集团海外首个前瞻数字化智能研发中心 - 全方位展示在自动驾驶、车辆设计、信息娱乐系统和数字服务等方面的最新成果 …首次对外展示搭载“L4级可实现无人化能力的自动泊车产品”的IONIQ(艾尼氪) 5 - 秉承“为中国及其他地区用户提供独特且无忧的出行体验”的愿景，中国前瞻数字研发中心将构建“4+6”先行研发体系，加速本土数字化转型 </p>

            </div>
            <div class="item_content"><img src="img/6164ebec9a36b.png" alt="" class="item_content_img">
                <p class="item_text_name"><b>特斯拉股东大会“透露”的电池策略</b><br>
                </p>
                <p class="item_text_content">
                    10月8日，特斯拉CEO马斯克在特斯拉2021年度股东大会上披露，预计到2030年将实现年销量2000万辆新车，并有信心保持至少50%的交付量增长率。上述“小目标”的提出背景是，2021年第三季度特斯拉生产了23.78万辆新车，交付量为24.13万辆，创历史新高。2021年前三季度，特斯拉累计交付新车62.7万辆，同比增长97%。 　　中国市场表现尤为突出，今年1-8月特斯拉在华累计销售23.9万辆，占其全球总市场份额的38.08%。 　　马斯克证实上海工厂在运营不足两年内，产量已超过弗里蒙特工厂，并计划在2023年对新工厂的选址作出决定。
            </div>
            <div class="item_content"><img src="img/5fb2248241855.jpg-thumb220x146.jpg" alt="" class="item_content_img">
                <p class="item_text_name"><b>Stellantis都灵工厂将变成电动汽车生产中心</b><br>
                </p>
                <p class="item_text_content">
                    盖世汽车讯 据外媒报道，Stellantis计划对其位于意大利都灵(Turin)的米拉菲奥里(Mirafiori )工厂进行改造，将其变成一座电动汽车生产中心，另外该公司还将在这里生产两款玛莎拉蒂轿车。此举旨在提高效率与保障就业，当前该公司正在进行电动化转型，希望销售更多的电动汽车。
            </div>
            <div class="item_content"><img src="img/60d2a6ba5af13.png-thumb220x146.png" alt="" class="item_content_img">
                <p class="item_text_name"><b>极氪001汽车报价及图片，zeekr001价格</b><br>
                </p>
                <p class="item_text_content">
                    倘若资金流动比较大的话可以选择按揭，通常有多种方案可供选择，以后面的内容为例，极氪001 2021款长续航双电机 WE版的裸车价(以官方指导价为例)是28.1万元，并选择首付比例50%，贷款期限48期的方案，那么首付总额就是14.05万元，贷款总额是14.05万元，月供是3146元，分期手续费是2000元，利息是1.05万元。再加上上表所示的上牌费、购置税、车船税、交强险费用、商业险费用等必要花费，贷款购买极氪001 2021款长续航双电机 WE版的总费用为30.61万元，相比全款购买则多出1.25万元。
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
        <li><a href="news2.php">«</a></li>
        <li><a href="news1.php">1</a></li>
        <li><a href="news2.php">2</a></li>
        <li><a class="active" href="news3.php">3</a></li>
        <li><a href="">»</a></li>
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