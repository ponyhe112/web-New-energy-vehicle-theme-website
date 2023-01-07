<?php
header('Content-Type:text/html;charset=utf-8');
header("Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" ); 
header("Cache-Control: no-cache, must-revalidate" );
echo "<script>alert('你还没登录，请先登录')</script>";
echo "<script>location.assign('homepage.php')</script>";