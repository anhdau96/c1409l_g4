<?php
require_once 'admin/inc_header.php';

$typepayid = get("typeid");

$result = execute_query("SELECT * FROM `Type` WHERE `TypeId` =$typeid");

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}
?>
<h1 style="text-align: center">
Cập nhập kiểu thanh toán
</h1>
<br />
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
            <td></td>
            <td><input type="submit" value="Cập nhật" /></td>

        </tr>
    </table>
</form>
<?php
require_once 'admin/inc_footer';
?>
