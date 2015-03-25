<?php
require 'inc_header.php';
require 'inc_checklogin.php';
// tao ra query, phai chay trong navicat truoc
$query1 = "SELECT * FROM `Contact`";

// mysql
$result = execute_query($query1);
?>
<table border="1">
    <tr>
        <th>Contact Id</th>
        <th>Name</th>
        <th>Job</th>
        <th>Description</th>        
        <th>Email</th>
        <th>Phone</th>
        <th>Facebook</th>
        <th>Cập nhập</th>
        <th>Xóa</th>
    </tr>

    <?php
    while (($row = mysqli_fetch_assoc($result))) {
        ?>
        <tr>
            <td><?php echo $row["ContactId"] ?></td>
            <td><?php echo $row["Name"] ?></td>
            <td><?php echo $row["Job"] ?></td>
            <td><?php echo $row["Description"] ?></td>            
            <td><?php echo $row["Email"] ?></td>
            <td><?php echo $row["Phone"] ?></td>
            <td><?php echo $row["Facebook"] ?></td>
            <td><a href="contact_edit?contactid=<?php echo $row["ContactId"] ?>">Cập
            nhật</a></td>
            <td><a href="process/contact?do=delete&contacid=<?php echo $row["ContactId"] ?>">X</a> </td>
        </tr>	
    <?php } ?>	
</table>

<a href="contact_addnew">Thêm mới liên hệ</a>

<?php
require 'inc_footer.php';
?>