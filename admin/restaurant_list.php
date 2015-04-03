<?php
require_once 'admin/inc_header.php';

// tao ra query, phai chay trong navicat truoc
$query1 = "SELECT * FROM `Restaurant`";

// mysql
$result = execute_query($query1);
?>
<h1 style="text-align: center">
    Danh sách nhà hàng
</h1>
<br />
<table border="1">
    <tr>
        <th>Restaurant Id</th>
        <th>Restaurant Name</th>
        <th>Restaurant Address</th>
        <th>Restaurant Phone</th>
        <th>Restaurant Manager</th>
        <th>Cập nhập</th>
        <th>Xóa</th>
    </tr>

    <?php
    while (($row = mysqli_fetch_assoc($result))) {
        ?>
        <tr>
            <td><?php echo $row["ResId"] ?></td>
            <td><?php echo $row["ResName"] ?></td>
            <td><?php echo $row["ResAddress"] ?></td>
            <td><?php echo $row["ResPhone"] ?></td>
            <td><?php echo $row["ResManager"] ?></td>
            <td><a href="restaurant_edit?resid=<?php echo $row["ResId"] ?>">Cập
            nhật</a></td>
            <td><a href="process/restaurant?do=delete&resid=<?php echo $row["ResId"] ?>">X</a> </td>
        </tr>	
    <?php } ?>	
</table>
<h5 style="text-align: center">
<a href="restaurant_addnew">Thêm mới nhà hàng</a>
</h5>
<?php
require_once 'admin/inc_footer.php';
?>
