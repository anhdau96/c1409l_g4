<?php
require 'inc_header.php';
?>
<h1>
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
            <th><input type="submit" value="Thêm mới" /></th>
            <td><input type="reset" value="Hủy" /></td>
        </tr>
    </table>
</form>
<?php
require 'inc_footer.php';
?>