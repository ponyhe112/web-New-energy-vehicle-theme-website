<?php
header('Content-Type:text/html;charset=utf-8');
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "keshe_db";


// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);
// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// $_SESSION['username']=$_POST['username'];
// echo $_SESSION['username'];

$uname = $_POST['username'];
$upswd = $_POST['password'];
$sql_check = "SELECT *
FROM `keshe_table`
WHERE `username` = '$uname'";
$result = mysqli_query($conn, $sql_check);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if ($upswd != $row['password']) {
        echo "<script>alert('密码错误')</script>";
        echo "<script>location.assign('login.php');</script>";
    } else {
        $_SESSION['username'] = $uname;
        echo "<script>location.assign('homepage.php');</script>";
    }
} else {
    echo "<script>alert('用户不存在，请先注册')</script>";
    echo "<script>location.assign('login.php');</script>";
}
