<?php
    // 1 create connection
    include("connect.inc.php");

    // 2 query
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $pic = $_FILES['pic'];

    $password = md5($password);

    $sql = "INSERT INTO users (name, tel, email, password, address) 
        VALUES ('$name', '$tel','$email', '$password','$address')";

$size_limit = 2*1024*1024;
$upload_dir = 'images/uploaded';

if($pic['size']>$size_limit){
    $fs = $pic['size']/1024/1024;
    echo "ไฟล์ต้องมีขนาดไม่เกิน 2MB, ปัจจุบัน: $fs MB";
} else{
    //move file to server directory
    if($pic['error']=== 0){
        $timestamp = time();
        $file_ext = strtolower(pathInfo($pic['name'], PATHINFO_EXTENSION));
        $final_filename = "$timestamp.$file_ext";
        $upload_filename = "$upload_dir/$final_filename";
        move_uploaded_file($pic['tmp_name'], $upload_filename);

        $sql = "INSERT INTO users (name, tel, email, password, address, profilepic) 
        VALUES ('$name', '$tel','$email', '$password','$address', '$final_filename')";

        $qUser = $conn->query($sql);

        if($qUser){
            header("Location: login.php");
        }
    }
}


?>