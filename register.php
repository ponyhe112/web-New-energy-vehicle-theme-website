<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注册</title>
    <link rel="stylesheet" href="css/register.css">
</head>

<body>
    <?php
    error_reporting(0);
    

    ?>
    <div class="registerbox">
        <form action="regester_inmysql.php" method="post">
            <div class="innner-box">
                <h1 class="header_text">账号注册</h1>
                <span class="tip_font">账号： </span><br><br>
                <input type="text" id="username" name="username" class="input_text" placeholder="在此输入账号/用户名"><span class="error"></span><br>
                <span class="tip_font">密码： </span><br><br>
                <input type="password" id="password" name="password" class="input_text" placeholder="在此输入密码"><span class="error"></span><br>
                <br>
                <input type="button" id="zhuce" value="注册" class="submitbutton" onclick="regsiter()">
            </div>
        </form>
    </div>
    <script type="text/javascript" src="js/register.js"></script>
</body>

</html>