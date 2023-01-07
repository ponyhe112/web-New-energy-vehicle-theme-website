<?php
header('Content-Type:text/html;charset=utf-8');
header("Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" ); 
header("Cache-Control: no-cache, must-revalidate" );
error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "keshe_db";

$uname = $_POST['username'];
$upswd = $_POST['password'];

// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);
// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql1 = "SELECT * FROM keshe_table where `username`='$uname'";
$result = mysqli_query($conn, $sql1);
if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('该用户名以存在，请重新注册！');
                location.href='register.php';</script>";
    exit(0);
}

$sql = " INSERT INTO `keshe_db`.`keshe_table` (`username`, `password`) 
      VALUES ('$uname', '$upswd')";

if (mysqli_query($conn, $sql)) {

    echo "<script>alert('注册成功');
    location.href='login.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
exit(0);
