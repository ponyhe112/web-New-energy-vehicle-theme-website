<?php
header("Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" ); 
header("Cache-Control: no-cache, must-revalidate" );
session_start();
$allowedExts = array("gif", "jpeg", "jpg", "png", "x-png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
$oldName = $_FILES['file']['name'];  //form表单中的上传图片的name值(pics)
if (file_exists($_FILES['file']['tmp_name'])) {
    if ((($_FILES["file"]["type"] == "image/gif")
            || ($_FILES["file"]["type"] == "image/jpeg")
            || ($_FILES["file"]["type"] == "image/jpg")
            || ($_FILES["file"]["type"] == "image/pjpeg")
            || ($_FILES["file"]["type"] == "image/x-png")
            || ($_FILES["file"]["type"] == "image/png"))
        && in_array($extension, $allowedExts)
    ) {
        if ($_FILES["file"]["error"] > 0) {
            echo "错误：: " . $_FILES["file"]["error"] . "<br>";
        } else {

            // $tmp = explode(".", $oldName);
            // // var_dump($tmp);
            // //$newName = time().".".$tmp[1];
            // $newName = $_SESSION['username'];
            // $name = $_POST['username'] . "." . $tmp[1]; //文件名
            // $uploadfile = "upload/" .$newName . "." . $tmp[1]; //图片存放的路径
            // $_SESSION["uploadfile"]=$uploadfile ;
            // unlink($uploadfile);
            // // 判断当前目录下的 upload 目录是否存在该文件
            // // 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
            $tmp = explode(".", $oldName);
            // var_dump($tmp);
            $extension = end($tmp);
            //$newName = time().".".$tmp[1];
            $newName = $_SESSION['username'];
            // $name = $_POST['username'] . "." . $extension; //文件名
            $uploadfile = "upload/" . $newName . "." . $extension;
            $_SESSION["uploadfile"] = $uploadfile; //图片存放的路径
            //删除该路径下的文件
            $brr = array();
            $j = 0;
            $arr = array("gif", "jpeg", "jpg", "PNG");
            for ($i = 0; $i < 4; $i++) {
                $path = "upload/" . $newName . "." . $arr[$i];

                if (file_exists($path)) {
                    $brr[$j] = $path;
                    $j = $j + 1;
                }
            }
            for ($i = 0; $i < 1; $i++) {
                unlink($brr[$i]);
            }
            // unlink($uploadfile);
            // 判断当前目录下的 upload 目录是否存在该文件
            // 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
            if (file_exists($uploadfile)) {

                // echo " 文件已经存在。 ";
            } else {
                // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
                move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
                // echo "文件存储在: " . $uploadfile;
            }
        }
    } else {
        echo "<script>alert('非法的图片文件格式，请重新上传')</script>";
        echo "<script>history.go(-1);</script>";
        exit(0);
    }
}
