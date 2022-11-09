<?php
require_once 'config.php';
$t = $_GET["t"];
$n = $_GET["n"];
if($t==NULL){
    echo "留言内容不能为空！";
    exit;
}
if($n==NULL){
    echo "留言人不能为空！";
    exit;
}
$time = date("Y-m-d",time());
$sql = "SELECT `id` FROM `information` ORDER BY `information`.`id` DESC;";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$id = $row["id"]+1;
$sql = "INSERT INTO `information` (`id`, `username`, `content`, `date`) VALUES ('$id', '$n', '$t', '$time');";
$conn->query($sql);
header("Location:index.php");
?>