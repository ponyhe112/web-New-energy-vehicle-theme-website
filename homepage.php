<!DOCTYPE html>
<html lang="zh">
<?php header('Content-Type:text/html;charset=utf-8'); ?>

<head>
    <meta charset="UTF-8">
    <title>新能源汽车网站-首页</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/shouye.css">
    <link rel="stylesheet" href="css/iconfont.css">

</head>
<script>
    function myFunction_changeSize() {
        alert("当前窗口大小已改变！");
    }

    function color(x) {
        x.style.color = "black";

    }

    function normal(x) {
        x.style.color = "white";

    }

    function myFunction() {
        alert("禁止复制这段文字！");
    }
</script>

<body onresize="myFunction_changeSize()">
    <div class="topbar">
        <div class="container">
            <div class="topbar-nav">
                <a href="homepage.php">首页</a><span>|</span>
                <a href="jianjie.php">新能源简介</a><span>|</span>
                <a href="<?php session_start();
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
                <ul class="nav-list clearfix">
                    <li class="nav-category">
                        <a href="#"><b>首页</b></a>
                    </li>
                    <li class="nav-item">
                        <a href="ceping.php">测评</a>
                    </li>
                    <li class="nav-item">
                        <a href="news1.php">新闻</a>
                    </li>

                    <li class="nav-item">
                        <a href="video.php">视频</a>
                    </li>
                </ul>
            </div>
            <div class="header-welcome" onmousemove="color(this)" onmouseout="normal(this)">


                欢迎光临访问新能源汽车网！
            </div>
        </div>
    </div>






    <div class="bottom">
        <span class="font">热点新闻</span>

    </div>
    <div class="seckill">

        <div class="container">
            <div class="seckill-nav">
                <ul id="tabs">
                    <li class="active">新车</li>
                    <li>行业</li>
                    <li>技术</li>
                    <li>政策</li>
                    <li>企业</li>
                </ul>
            </div>
            <div id="lists" class="seckill-goods">
                <ul class="clearfix active">
                    <li>
                        <div class="bg"><img src="img/60d0141420762.png" alt=""></div>

                        <div class="info">
                            <a href="" class="name" oncontextmenu="myFunction()">唤醒童年记忆，感受超A“真”值</a>
                            <br>
                            <a href="" class="content">作为吉利汽车集团的中高端纯电品牌，几何汽车一直被用户亲切的称为“最熟悉的陌生人<br>
                                了解几何汽车的人都知道...从长大后，我们就一直背负着“大人”的身份在生活，所做的事情都要符合“成年人”的标准，开始承担着各种生活和工作上的重任砥砺前行。以至于我们忘记了自己曾经也是“少年”。丢失了当年那一颗童真的童心。几何汽车希望给认真的你一个最好的嘉许，唤回你自己沉寂多年的童心，在6月20日这天，开启超A游乐场，只为了寻找那个童心未泯的你。放下一切身份和包袱，来这里放肆的玩。</a>
                        </div>
                    </li>
                    <li>
                        <div class="bg"><img src="img/619dec72c76d0.png" alt=""></div>

                        <div class="info">
                            <a href="" class="name">联袂推动复合材料助力汽车轻量化 励展博览集团与中国复合材料工业协会达成战略合作</a>
                            <br>
                            <a href="" class="content">11月22日上午，励展博览集团与中国复合材料工业协会举行战略合作签约仪式。中国复合材料工业协会秘书长孟弋洁、副秘书长卢宏萍，励展博览集团项目总监臧晓萌出席签约仪式。

                                当前，世界正经历百年未有之大变局。特别是2020年以来，在新冠肺炎疫情冲击世界经济的背景下，我国加快形成以国内大循环为主体、国内国际双循环相互促进的发展新格局的大战略。在“双循环”高质量发展驱动下，先进复合材料在多个产业特别是汽车产业发展中的需求持续扩大，在关键技术突破、全产业链整合及终端应用领域也在不断拓展。双方此次战略合作即是在此时代背景下达成。</a>
                        </div>

                    </li>
                    <li>
                        <div class="bg"><img src="img/6164eabbf26d8.jpg" alt=""></div>

                        <div class="info">
                            <a href="" class="name">Stellantis都灵工厂将变成电动汽车生产中心</a>
                            <br>
                            <a href="" class="content">据外媒报道，Stellantis计划对其位于意大利都灵(Turin)的米拉菲奥里(Mirafiori
                                )工厂进行改造，将其变成一座电动汽车生产中心，另外该公司还将在这里生产两款玛莎拉蒂轿车。此举旨在提高效率与保障就业，当前该公司正在进行电动化转型，希望销售更多的电动汽车。</a>
                        </div>

                    </li>
                </ul>
                <ul class="clearfix">
                    <li>
                        <div class="bg"><img src="img/61b6af4c91c78.png" alt=""></div>

                        <div class="info">
                            <a href="" class="name">商汤绝影全栈亮相广州创交会，首发车舱乘员健康检测功能</a>
                            <br>
                            <a href="" class="content">12月10日,中国创新创业成果交易会(以下简称“创交会”)在广州盛大开幕。全球领先的人工智能软件公司商汤科技SenseTime携SenseAuto绝影智能汽车平台全栈亮相,并首发SenseAuto
                                Cabin-O商汤绝影车舱乘员健康检测产品。该产品创新地将前沿的AI技术应用于健康检测领域,可在不到半分钟内检测出车舱乘员的多种健康指标,为消费者打造全新车载健康管理体验。商汤科技致力于用AI链接智能汽车新未来,让智能车舱不仅仅是生活空间的拓展,更是人们可信赖的伴侣。
                            </a>
                        </div>

                    </li>
                    <li>
                        <div class="bg"><img src="img/61adac13dfb54.png" alt=""></div>

                        <div class="info">
                            <a href="" class="name">道通科技快速高质发展 助力粤港澳大湾区绿色转型</a>
                            <br>
                            <a href="" class="content">2019年中共中央、国务院印发的《粤港澳大湾区发展规划纲要》提出大湾区未来发展导向，强调绿色发展、保护生态，到2022年，需初步确立绿色智慧节能低碳的生产生活方式和城市建设运营模式。根据《新发展格局下的大湾区——“十四五”时期粤港澳大湾区发展重点》白皮书，大湾区将坚持“创新、开放、绿色、协调、共享”的新发展理念，成为绿色转型标杆，加快绿色转型和低碳发展的进程。</a>
                        </div>

                    </li>
                    <li>
                        <div class="bg"><img src="img/61a9867d037e1.png" alt=""></div>

                        <div class="info">
                            <a href="" class="name">孚能科技800VTC超充超压技术破局充电焦虑 兼顾高安全和长续航</a>
                            <br>
                            <a href="" class="content">12月4日晚，孚能科技800VTC超充超压技术在2021中国汽车供应链峰会暨第六届铃轩奖盛典低调亮相，该技术获奖后瞬间成为行业关注焦点。铃轩奖作为车企提供技术为先的供应链考量和国内权威的汽车零部件产业评价机构，孚能科技能获得此次荣誉，也证明800VTC超充超压技术获得了主流车企和行业资深专家的认可。
                                要知道，孚能科技800VTC超充超压技术是迄今为止业内首个可达到量产的800V高压平台，同时充电倍率能达到2.2C-4C的超充平台技术。可以说，这给行业解决用户充电焦虑做出了正确示范。</a>
                        </div>

                    </li>
                </ul>
                <ul class="clearfix">
                    <li>
                        <div class="bg"><img src="img/6164ebec9a36b.png" alt=""></div>

                        <div class="info">
                            <a href="" class="name">特斯拉股东大会“透露”的电池策略</a>
                            <br>
                            <a href="" class="content">10月8日，特斯拉CEO马斯克在特斯拉2021年度股东大会上披露，预计到2030年将实现年销量2000万辆新车，并有信心保持至少50%的交付量增长率。

                                上述“小目标”的提出背景是，2021年第三季度特斯拉生产了23.78万辆新车，交付量为24.13万辆，创历史新高。2021年前三季度，特斯拉累计交付新车62.7万辆，同比增长97%。

                                中国市场表现尤为突出，今年1-8月特斯拉在华累计销售23.9万辆，占其全球总市场份额的38.08%。

                                马斯克证实上海工厂在运营不足两年内，产量已超过弗里蒙特工厂，并计划在2023年对新工厂的选址作出决定。</a>
                        </div>

                    </li>
                    <li>
                        <div class="bg"><img src="img/615fb1b20777d.png" alt=""></div>

                        <div class="info">
                            <a href="" class="name">瑞士一公司推出全球最快充电桩：15分钟可充满一辆电动汽车</a>
                            <br>
                            <a href="" class="content">毫无疑问，当前电动车主之所以存在续航焦虑，除了充电站建设数量不够之外，还与充电时间过长有关。

                                目前，电动车的充电时间，即便是采用快充，也需要30-60分钟，而对于那些长途出行的朋友而言，充电时间就要1小时左右，再加上排队充电的时间，耗费的时长甚至要比本身驾车的时间更长。

                                那么，如果15分钟就能够把电池充满，想必不少朋友对电动车的态度也会大大改变，毕竟这样的充电时间，已经快接近于燃油车加油的时长。

                                日前，据瑞士ABB公司官网公布的信息显示，该公司宣布推出了全球最快的电动汽车充电桩Terra360。</a>
                        </div>

                    </li>
                    <li>
                        <div class="bg"><img src="img/615287e4e2ad5.png" alt=""></div>

                        <div class="info">
                            <a href="" class="name">松下的动力电池技术路线</a>
                            <br>
                            <a href="" class="content">松下发布了一个电池技术路线和制造的视频介绍《Evolution of Battery Technology and
                                Manufacturing at Panasonic》。在这个视频里面，松下确定了一些有趣的内容：

                                1、松下确认动力电池开发的下一阶段是转向更大容量的电池，特斯拉所提出的4680 型(直径为 46 毫米，高度为 80
                                毫米)，也是松下认同的方向。目前开发正在进行中，松下后期将进行大资金的投资。

                                2、在正极材料方面，松下分了NCA和NCM两条路线往高镍方向走，负极往低成本高容量和低成本高功率的两个方向再走。

                                3、在技术路线方面，松下是继续采用自己的无钴电池也在进行，性能和当前的NCA相当。</a>
                        </div>

                    </li>
                </ul>
                <ul class="clearfix">
                    <li>
                        <div class="bg"><img src="img/6163b6c8d6049.jpg" alt=""></div>

                        <div class="info">
                            <a href="" class="name">深圳拟出台新能源车免限行及停车优惠，正公开征求意见!</a>
                            <br>
                            <a href="" class="content">近日，深圳市发展改革委员会发布《关于新能源汽车停车收费减免优惠有关事项的通知(征求意见稿)》。《征求意见稿》显示，新能源汽车的停车优惠时限和使用范围将更为灵活。深圳鼓励实行市场调节价的停车场，对新能源汽车予以停车优惠。

                                《征求意见稿》显示，本通知所指的新能源汽车，是指采用新型动力系统，完全或者主要依靠新型能源驱动的汽车，包括插电式混合动力(含増程式)汽车、纯电动汽车和燃料电池汽车等。</a>
                        </div>

                    </li>
                    <li>
                        <div class="bg"><img src="img/615135d0c6c41.jpeg" alt=""></div>

                        <div class="info">
                            <a href="" class="name">推进新能源车发展倡导绿色低碳出行</a>
                            <br>
                            <a href="" class="content">【潇湘晨报】整齐划一的蓝色车身、平稳安全的乘车体验……日前，几辆新能源公交车驶入市公交总公司的停车场准备充电。“为保障安全运营，公交车电量不能低于20%，线路较远的车辆会充电一个小时后继续工作。”充电站的工作人员一边介绍，一边将车辆充电接口一端接入直流桩。

                                如今的城市里，一辆辆蓝色的纯电动公交车和纯电动出租车行驶在道路上，构成了一道亮丽的风景线。这些新能源交通工具不仅成为市民出行的首选，还引领了全市交通运输行业的环保潮流。

                                近年来，我市高度重视环保工作，积极响应国家号召，以改善空气环境质量为突破口，抢抓政策机遇，大力倡导绿色出行，促进新能源车产业发展。</a>
                        </div>

                    </li>
                    <li>
                        <div class="bg"><img src="img/61356df8e1db2.jpeg" alt=""></div>

                        <div class="info">
                            <a href="" class="name">工信部副部长辛国斌：统筹加快完善新能源汽车发展系列政策举措</a>
                            <br>
                            <a href="" class="content">9月4日，工业和信息化部副部长辛国斌在2021中国汽车产业发展(泰达)国际论坛上表示，今年是"十四五"规划的开局之年，做好后续汽车产业发展工作意义重大。工信部将发挥部级联席会议制度，统筹加快(完善)新能源汽车发展系列政策举措，保持相关支持政策连续稳定有效衔接，进一步完善锂钴镍保障体系。

                                在强化融合创新，加快新型产业发展方面，工信部将立足电动化、网络化、智能化发展趋势，同步推动基础设施、数据平台和标准法规完善，协同推进电车智能、智慧道路、通讯网络、云控技术发展。启动公共领域车辆全面电动化城市试点，组织行业机构编制发布汽车产业低碳发展的技术路线图。</a>
                        </div>

                    </li>
                </ul>
                <ul class="clearfix">
                    <li>
                        <div class="bg"><img src="img/6163b77e76a68.jpg" alt=""></div>

                        <div class="info">
                            <a href="" class="name">特斯拉柏林工厂或下月投产 12月交付</a>
                            <br>
                            <a href="" class="content">盖世汽车讯
                                据外媒报道，10月9日，特斯拉首席执行官埃隆·马斯克在新工厂的参观活动上表示，特斯拉德国柏林工厂首批新车最早将于11月下线，并在12月向客户交付，但量产需要更长的时间才能实现。该厂的周产量将达到约5,000辆，“但是马斯克希望”能达到1万辆。马斯克还补充说，他希望在明年年底前在该工厂实现电池的量产。

                                马斯克表示，“新工厂开启生产很容易，但实现量产非常困难，实现量产所需的时间将比建厂所需的时间更长。”</a>
                        </div>

                    </li>
                    <li>
                        <div class="bg"><img src="img/6163b4edca92e.jpg" alt=""></div>

                        <div class="info">
                            <a href="" class="name">恒大恒驰新能源汽车研究院资本增至10亿</a>
                            <br>
                            <a href="" class="content">日前，据企查查显示，恒大恒驰新能源汽车研究院(上海)有限公司发生工商变更，企业注册资本由1亿元增至10亿元，增幅达900%。资料显示，恒大恒驰新能源汽车研究院(上海)有限公司成立于2019年6月，法定代表人为方驰，经营范围包括货物进出口;技术进出口;新能源汽车整车、智能产品的生产、销售等，由恒大新能源汽车投资控股集团有限公司全资持股。另外，我们从招聘网站上获悉，当前恒大恒驰新能源汽车研究院(上海)有限公司发布了车型集成主任资深高级工程师、EDU结构件主任工程师、电机集成资深工程师、悬架系统资深工程师等职位，其月薪普遍设定为2-2.5万元/月。</a>
                        </div>

                    </li>
                    <li>
                        <div class="bg"><img src="img/6163adbe31fc6.jpg" alt=""></div>

                        <div class="info">
                            <a href="" class="name">印度不准特斯拉销售中国产汽车</a>
                            <br>
                            <a href="" class="content">盖世汽车讯 据外媒报道，10月8日，印度道路交通部长Nitin Gadkarii在“今日印度”(India
                                Today)的秘密会议上表示，他要求特斯拉在进入印度市场前，避免在印度销售中国制造的电动汽车。特斯拉应该“在印度生产、销售汽车，从印度出口”，并依赖当地供应商。

                                Gadkari表示，“我们要求特斯拉引进其技术和专业知识，帮助印度建立一个电动汽车生态系统，而不是从中国进口汽车。考虑到印度是一个巨大的市场，而且对电动汽车也有需求，我们的政府将尽一切可能提供帮助。”据悉，特斯拉车型在印度的售价约为350万卢比(约46,671美元)。</a>
                        </div>

                    </li>
                </ul>
            </div>

        </div>



    </div>
    <div class="bottom">
        <span class="font">热门活动</span>

    </div>


    <div class="grid-container">
        <div class="item1">
            <img src="img/608670974d7c0.png" alt="" class="item_pic"></img>
        </div>
        <div class="item2">
            <a class="item_newsname"><b>2022上海国际新能源物流车与绿色城配展览会</b></a>
            <br>
            <br>
            <a class="item_newscontent">在电子商务需求增长的带动下，中国快递物流业、邮政业飞速发展。快递业务量连续7年稳居世界首位，快递物流业、邮政业、电子商务市场的发展，对物流配送交通工具需求量越来越大，在环保理念的倡导下，绿色环保的新能源物流车逐渐成为各地政府及物流企业的重点选择。 </a>
            <!-- <img src="img/6131c1cbe9a1e.jpg" alt="" class="item_news_pic"></img> -->
        </div>
        <div class="item3">
            <a class="item_newsname"><b>第十九届上海国际汽车工业展览会</b></a>
            <br>
            <br>
            <a class="item_newscontent">2020年，全球汽车行业遭受了新冠肺炎疫情的严重打击，各主要汽车市场均受到不同程度的影响。这其中，快速触底反弹的中国汽车市场焕发活力。中汽协数据显示，2020年中国汽车累计销量为2531.1万辆，仅同比下降1.9%，降幅低于全球其他主要汽车市场。中国汽车市场的巨大潜力，不仅吸引了外资汽车企业持续在上海和长三角加码投资，选择在上海车展首发新技术、首展新车型，也为中国自主品牌的车型亮相、发展乃至“走出去”提供了重要的舞台。 </a>

        </div>
        <form action="" method="get">
            <input list="browsers" name="browser">
            <datalist id="browsers">
                <option value="新能源">
                <option value="新车">
                <option value="行业">
                <option value="技术">
                <option value="政策">
            </datalist>
            <input type="submit">
        </form>
    </div>

    <div class="anipic">
        <img style="height:180px;width:330px;margin-top:10px;margin-left:10px;" src="img/6164eabbf26d8.jpg">
    </div>
    <br><br><br><br><br><br><br><br><br><br><br>
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


    <script src="js/index.js"></script>
</body>

</html>