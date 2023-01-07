<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, username-scalable=no">
    <title>登录/注册</title>
    <link rel="stylesheet" href="css/loginin.css">
</head>

<body>
    <div class="content">
        <div class="login-content">
            <a href="" class="banner-box"></a>
            <div class="login-box">
                <form action="login_mysql.php" class="login-box" id="act" method="post">
                    <h1>账号登录/注册</h1>
                    <input type="text" name="username" id="username" placeholder="账号"></input>
                    <input type="password" name="password" id="password" placeholder="密码"></input>
                    <input type="button" class="login-btn" id="log" value="登录" onclick="login()"></input>
                    <input type="submit" class="login-btn" value="注册" onclick="register()"></input>
                    <!-- <button class="login-btn">注册</button> -->
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/login.js"></script>
</body>



</html>