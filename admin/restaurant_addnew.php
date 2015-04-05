<?php
require_once 'admin/inc_header.php';
?>

<h1 style="text-align: center">
    Thêm mới nhà hàng
</h1>
<br />
<form action="process/restaurant?do=add_new" method="post">
    <table>
        <tr>
            <th>Restaurant Name</th>
            <td><input type="text" name="resname" id="resname" required/></td>
        </tr>
        
        <tr>
            <th>Restaurant Address</th>
            <td><input type="text" name="resaddress" id="resaddress" required/></td>
        </tr>
        
        <tr>
            <th>Restaurant Phone</th>
            <td><input type="text" name="resphone" id="resphone" required/></td>
        </tr>        

        <tr>
            <th>Restaurant Manager</th>
            <td><input type="text" name="resmanager" id="resmanager" required/></td>
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
