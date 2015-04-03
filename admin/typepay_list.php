<?php
require_once 'admin/inc_header.php';

// tao ra query, phai chay trong navicat truoc
$query1 = "SELECT * FROM `Typepay`";

// mysql
$result = execute_query($query1);
?>
<h1 style="text-align: center">
    Danh sách kiểu thanh toán
</h1>
<br />
<table border="1">
    <tr>
        <th>TypePay Id</th>
        <th>TypePay Name</th>
        <th>Cập nhập</th>
        <th>Xóa</th>
    </tr>

    <?php
    while (($row = mysqli_fetch_assoc($result))) {
        ?>
        <tr>
            <td><?php echo $row["TypePayId"] ?></td>
            <td><?php echo $row["TypePayName"] ?></td>
            <td><a href="typepay_edit?typepayid=<?php echo $row["TypePayId"] ?>">Cập
            nhật</a></td>
            <td><a href="process/typepay?do=delete&typepayid=<?php echo $row["TypePayId"] ?>">X</a></td> 
        </tr>	
    <?php } ?>	
</table>
<h5 style="text-align: center">
<a href="typepay_addnew">Thêm mới kiểu thanh toán</a>
</h5>
<?php
require_once 'admin/inc_footer.php';
?>
