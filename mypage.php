<!DOCTYPE html>
<html lang="zh">
<?php header('Content-Type:text/html;charset=utf-8');
session_start();
header("Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" ); 
header("Cache-Control: no-cache, must-revalidate" );
?>

<head>
    <meta charset="UTF-8">
    <title>新能源汽车网站-首页</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/mypage.css">
    <link rel="stylesheet" href="css/iconfont.css">
    <style>
        .background-image {
            /* background-image: url("img/60a5d2780ff20.jpg-thumb220x146.jpg"); */
            background-size: cover;
            background-attachment: fixed;
            background-image: url("<?php if (isset($_SESSION['uploadfile'])) {
                                        echo $_SESSION['uploadfile'];
                                    } else {
                                        $arr = array("gif", "jpeg", "jpg", "png");
                                        for ($i = 0; $i < 4; $i++) {
                                            $path = "upload/" . $_SESSION['username'] . "." . $arr[$i];

                                            if (file_exists($path))
                                                echo $path;
                                        }
                                    }
                                    ?>");

           
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
                                        // unset($_SESSION['username']);
                                    } ?> </a><span>|</span>



            </div>
        </div>
    </div>


    <?php
    error_reporting(0);
    $flag = 0;
    $imgErr = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST['submit'] == '更换！') {

            if (!file_exists($_FILES['file']['tmp_name'])) {
                $imgErr = "您还没有选择图片";
                $flag = -1;
            }
            if ($flag == 0) {
                include "uploadfile.php";
            }
        }
        
    }

    ?>
    <!-- <div id="picture" style="background-image: url(
                                                        // $arr = array("gif", "jpeg", "jpg", "png");
                                                        // for ($i = 0; $i < 4; $i++) {
                                                        //     $path = "upload/" . $row['username'] . "." . $arr[$i];

                                                        //     if (file_exists($path))
                                                        //         echo $path;
                                                        // }

                                                        ?>);"> -->

    <!-- </div> -->
    <div class="background-image">
        <div class="mycontainer">

            <div class="container_content">
                <h1 style="text-align: center"><?php echo "{$_SESSION['username']}用户主页"; ?>
                </h1>
                <h2>您可以在此设置您喜欢的图片作为背景</h2>
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
                    上传图片：
                    <input type="file" name="file" id="file" class="uploadfile"><?php echo $imgErr ?></span>
                    <input type="submit" name="submit" value="更换！" id="submit" class="upload_button">
                </form>
            </div>
        </div>
    </div>




</body>