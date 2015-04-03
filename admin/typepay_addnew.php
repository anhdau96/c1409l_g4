<?php
require_once 'admin/inc_header.php';
?>
<h1 style="text-align: center">
    Thêm mới kiểu thanh toán
</h1>
<br />
<form action="process/typepay?do=add_new" method="post">
    <table>
        <tr>
            <th>TypePay Name</th>
            <td><input type="text" name="typepayname" id="typepayname" /></td>
        </tr>	
        <tr>
            <td><input type="submit" value="Thêm mới" /></td>
            <td><input type="reset" value="Hủy" /></td>
        </tr>
    </table>
</form>
<?php
require_once 'admin/inc_footer.php';
?>
