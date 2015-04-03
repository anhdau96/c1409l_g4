<?php
require_once 'admin/inc_header.php';

$orderid = get("orderd");

$result = execute_query("SELECT * FROM `Order` WHERE `OrderId` =$orderid");

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}
?>
<form action="process/order?do=update" method="post">
    <table>
        <tr>
            <th>Admin Id</th>
            <td><input type="text" name="orderid" id="adminid" readonly
                       value="<?php echo get("orderid") ?>" /></td>
        </tr>

        <tr>
            <th>Mem Id</th>
            <td><input type="text" name="memid" id="username" readonly
                       value="<?php echo $row["MemId"] ?>" /></td>
        </tr>

        <tr>
            <th>Password</th>
            <td><input type="password" name="password" id="password"
                       value="<?php echo $row["APassword"] ?>" /></td>
        </tr>


        <tr>
            <th>Fullname</th>
            <td><input type="text" name="fullname" id="fullname"
                       value="<?php echo $row["AFullname"] ?>" /></td>
        </tr>
        
        <tr>
            <th>Address</th>
            <td><input type="text" name="address" id="address"
                       value="<?php echo $row["AAddress"] ?>" /></td>
        </tr>
        
        <tr>
            <th>Email</th>
            <td><input type="text" name="email" id="email"
                       value="<?php echo $row["AEmail"] ?>" /></td>
        </tr>
        
        <tr>
            <th>Phone</th>
            <td><input type="text" name="phone" id="phone"
                       value="<?php echo $row["APhone"] ?>" /></td>
        </tr>
        
        <tr>
            <th><input type="submit" value="Cập nhật" /></th>

        </tr>
    </table>
</form>
<?php
require_once 'admin/inc_footer.php';
?>
