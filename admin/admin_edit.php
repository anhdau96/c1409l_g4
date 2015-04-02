<?php
require_once 'inc_header.php';

$adminid = get("adminid");

$result = execute_query("SELECT * FROM `Admin` WHERE `AdminId` =$adminid");

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}
?>
<form action="process/admin?do=update" method="post">
    <table>
        <tr>
            <th>Admin Id</th>
            <td><input type="text" name="adminid" id="adminid" readonly
                       value="<?php echo get("adminid") ?>" /></td>
        </tr>

        <tr>
            <th>Username</th>
            <td><input type="text" name="username" id="username"
                       value="<?php echo $row["AUsername"] ?>" /></td>
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
require 'inc_footer.php';
?>