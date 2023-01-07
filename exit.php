<?php
header('Content-Type:text/html;charset=utf-8');
header("Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" ); 
header("Cache-Control: no-cache, must-revalidate" );
session_start();
unset($_SESSION['username']);
if (isset($_SESSION['uploadfile'])) {
    unset($_SESSION['uploadfile']);
}

echo "<script>alert('退出登录成功')</script>";
echo "<script>location.assign('homepage.php')</script>";
