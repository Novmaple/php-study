<?php
    $servername="localhost";
    $username="root";
    $password="123456";
    $dbname="message_board";
    $conn = new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die("连接失败：".$conn->connect_error);
    }
?>