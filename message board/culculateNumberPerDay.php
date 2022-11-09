<?php
require_once 'config.php';
$sql = "SELECT count(*) as `number`,`date` FROM `information`  GROUP BY `date`  ORDER BY `date`  DESC;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
?>
        <li>
            <p>留言数量：<?php echo $row["number"]; ?></p>
            <p>时间：<?php echo $row["date"]; ?></p>
        </li>
<?php
    }
}
?>