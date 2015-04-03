<?php
require_once 'admin/inc_header.php';

// tao ra query, phai chay trong navicat truoc
$query1 = "SELECT * FROM `TypeFood`";

// mysql
$result = execute_query($query1);
?>
<h1 style="text-align: center">
    Thêm mới kiểu đồ ăn
</h1>
<br />
<table border="1">
    <tr>
        <th>Type Id</th>
        <th>Type Name</th>
        <th>Type Description</th>
        <th>Cập nhập</th>
        <th>Xóa</th>
    </tr>

    <?php
    while (($row = mysqli_fetch_assoc($result))) {
        ?>
        <tr>
            <td><?php echo $row["TypeId"] ?></td>
            <td><?php echo $row["TypeName"] ?></td>
            <td><?php echo $row["TypeDescription"] ?></td>
            <td><a href="typefood?typeid=<?php echo $row["TypeId"] ?>">Cập
            nhật</a></td>
            <td><a href="process/typefood?do=delete&typeid=<?php echo $row["TypeId"] ?>">X</a></td> 
        </tr>	
    <?php } ?>	
</table>
<h5 style="text-align: center">
    <a href="typefood_addnew"> Thêm mới kiểu đồ ăn </a>
</h5>
<?php
require_once 'admin/inc_footer.php';
?>
