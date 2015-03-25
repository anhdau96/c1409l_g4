<?php
require 'inc_header.php';
require 'inc_checklogin.php';

// tao ra query, phai chay trong navicat truoc
$query1 = "SELECT * FROM `Admin`";

// mysql
$result = execute_query($query1);
?>
<table border="1">
    <tr>
        <th>Admin Id</th>
        <th>Username</th>
        <th>Password</th>
        <th>Fullname</th>
        <th>Address</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Cập nhập</th>
        <th>Xóa</th>
    </tr>

    <?php
    while (($row = mysqli_fetch_assoc($result))) {
        ?>
        <tr>
            <td><?php echo $row["AdminId"] ?></td>
            <td><?php echo $row["AUsername"] ?></td>
            <td><?php echo $row["APassword"] ?></td>
            <td><?php echo $row["AFullname"] ?></td>
            <td><?php echo $row["AAddress"] ?></td>
            <td><?php echo $row["AEmail"] ?></td>
            <td><?php echo $row["APhone"] ?></td>
            <td><a href="admin_edit?adminid=<?php echo $row["AdminId"] ?>">Cập
            nhật</a></td>
             <td><a href="process/admin?do=delete&adminid=<?php echo $row["AdminId"] ?>">X</a> </td>
        </tr>	
    <?php } ?>	
</table>

<a href="admin_addnew">Thêm mới admin</a>

<?php
require 'inc_footer.php';
?>