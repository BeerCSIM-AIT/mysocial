<?php
    $host="localhost:3306";
    $username = "root";
    $password = "12345678";
    $dbname = "mydb2";

    // (1) create connection
    //mysqli_connect()
    $conn = new mysqli($host, $username, $password, $dbname);

    if(!$conn){
        die("Connection failed ". $conn->connect_error);
    }

?>