<?php
require_once 'admin/inc_header.php';

$resid = get("resid");

$result = execute_query("SELECT * FROM `Restaurant` WHERE `ResId` =$resid");

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}
?>
<h1 style="text-align: center">
  Cập nhập nhà hàng
</h1>
<br />
<form action="process/restaurant?do=update" method="post">
    <table>
        <tr>
            <th>Restaurant Id</th>
            <td><input type="text" name="resid" id="resid" readonly
                       value="<?php echo get("resid") ?>" /></td>
        </tr>
        
        <tr>
            <th>Restaurant Address</th>
            <td><input type="text" name="resaddress" id="resaddress"
                       value="<?php echo $row["ResAddress"] ?>" /></td>
        </tr>

        <tr>
            <th>Restaurant Phone</th>
            <td><input type="text" name="resphone" id="resphone"
                       value="<?php echo $row["ResPhone"] ?>" /></td>
        </tr>        
        
        <tr>
            <th>Restaurant Manager</th>
            <td><input type="text" name="resmanager" id="resmanager"
                       value="<?php echo $row["ResManager"] ?>" /></td>
        </tr>
        
        <tr>
            <td></td>
            <td><input type="submit" value="Cập nhật" /></td>

        </tr>
    </table>
</form>
<?php
require_once 'admin/inc_footer.php';
?>
