<?php
    include("connect.inc.php");
    $file1 = $_FILES['file1'];

    $size_limit = 2*1024*1024;
    $upload_dir = 'images/uploaded';

    if($file1['size']>$size_limit){
        $fs = $file1['size']/1024/1024;
        echo "ไฟล์ต้องมีขนาดไม่เกิน 2MB, ปัจจุบัน: $fs MB";
    } else{
        //move file to server directory
        if($file1['error']=== 0){
            $timestamp = time();
            $file_ext = strtolower(pathInfo($file1['name'], PATHINFO_EXTENSION));
            $final_filename = "$timestamp.$file_ext";
            $upload_filename = "$upload_dir/$final_filename";
            move_uploaded_file($file1['tmp_name'], $upload_filename);

            $sql = "INSERT INTO users (name, tel, email, password, address,profilepic) 
                VALUES('Somchai', '9999999', 'somchai@gmail.com', md5('11111111'), 'Thailand', '$final_filename')";

            $qUser = $conn->query($sql);

            if($qUser){
                echo "Insert Complete";
            }
            
            //echo "Upload Complete";
        }
    }
