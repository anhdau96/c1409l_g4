<?php
require_once 'admin/inc_header.php';

// tao ra query, phai chay trong navicat truoc
$query1 = "SELECT * FROM `FeedBack`";

// mysql
$result = execute_query($query1);
?>
<h1 style="text-align: center">
    Phản hồi khách hàng
</h1>
<br />
<table border="1">
    <tr>
        <th>FeedBack Id</th>
        <th>FeedBack Sender</th>
        <th>FeedBack Title</th>
        <th>FeedBack Email</th>
        <th>FeedBack Content</th>
        <th>Xóa</th>
    </tr>

    <?php
    while (($row = mysqli_fetch_assoc($result))) {
        ?>
        <tr>
            <td><?php echo $row["FeedId"] ?></td>
            <td><?php echo $row["FeedName"] ?></td>
            <td><?php echo $row["FeedTitle"] ?></td>
            <td><?php echo $row["FeedEmail"] ?></td>
            <td><?php echo $row["FeedContent"] ?></td>
            <td><a href="process/feedback?do=delete?feedid=<?php echo $row["FeedId"] ?>">X</a> </td>
        </tr>	
    <?php } ?>	
</table>

<?php
require_once 'admin/inc_footer.php';
?>
