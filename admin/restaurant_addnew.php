<?php
require 'inc_header.php';
?>
<h1>
    Thêm mới cửa hàng
</h1>
<br />
<form action="process/restaurant?do=add_new" method="post">
    <table>
        <tr>
            <th>Restaurant Name</th>
            <td><input type="text" name="resname" id="resname" /></td>
        </tr>
        
        <tr>
            <th>Restaurant Address</th>
            <td><input type="text" name="resaddress" id="resaddress" /></td>
        </tr>
        
        <tr>
            <th>Restaurant Phone</th>
            <td><input type="text" name="resphone" id="resphone" /></td>
        </tr>        

        <tr>
            <th>Restaurant Manager</th>
            <td><input type="text" name="resmanager" id="resmanager" /></td>
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