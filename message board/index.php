<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
<h1>写留言</h1>
<form action="add.php" method="GET">
    <textarea name="t" cols="100" rows="10" placeholder="说点什么..."></textarea>
    <p><input name="n" type="text" placeholder="你的名字"></p>
    <p><input type="submit" value="发表"></p>
    <p><a href="culculateNumberPerDay.php" type="button">查看每天留言数量</a></p>
</form>
<hr>
<h2>留言列表</h2>
<ul>
    <?php
    $sql = "SELECT * FROM `information` ORDER BY `information`.`id` DESC";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
        ?>
        <li>
            <p><?php echo $row["id"];?>楼</p>
            <p>留言内容：<?php echo $row["content"];?></p>
            <p>留言人：<?php echo $row["username"];?></p>
            <p>留言时间：<?php echo $row["date"];?></p>
            <p>
                <a href="delete.php?id=<?php echo $row['id'];?>">删除</a>
            </p>
        </li>
        <?php
        }
    } else {
        echo"暂无留言！";
    }
    ?>        
</ul>
</body>
</html>
