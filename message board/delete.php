<?php
require_once "config.php";
$id = $_GET['id'];
$sql = "DELETE FROM `information` WHERE `information`.`id` = $id";
$conn->query($sql);
header("Location:index.php");
?>