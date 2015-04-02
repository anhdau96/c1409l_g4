<?php
require_once 'inc_header.php';

$typepayid = get("typeid");

$result = execute_query("SELECT * FROM `Type` WHERE `TypeId` =$typeid");

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}
?>
<form action="process/typepay?do=update" method="post">
    <table>
        <tr>
            <th>TypePay Id</th>
            <td><input type="text" name="typepayid" id="typepayid" readonly
                       value="<?php echo get("typepayid") ?>" /></td>
        </tr>

        <tr>
            <th>TypePay Name</th>
            <td><input type="text" name="typepayname" id="typepayname"
                       value="<?php echo $row["TypePayName"] ?>" /></td>
        
        <tr>
            <th><input type="submit" value="Cập nhật" /></th>

        </tr>
    </table>
</form>
<?php
require 'inc_footer.php';
?>