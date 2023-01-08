<?php
    session_start();

    include("connect.inc.php");
    $email = $_POST['email'];
    $password = md5($_POST['password']); 
    // sql injection

    $sql = "SELECT * FROM users 
        WHERE email = '$email' AND password = '$password'";
    $qUser = $conn->query($sql);
    $num_row = $qUser->num_rows;
    if($num_row==1){
        // verified
        $user = $qUser->fetch_object();
        unset($_SESSION['errMsg']);
        $_SESSION['user']=$user;
        header("Location: index.php");
    }else{
        // not valid
        $_SESSION['errMsg'] = "Incorrect email or password!";
        header("Location: login.php");
    }

    


?>