<?php
require_once 'admin/inc_header.php';
?>

<h1>
    Thêm mới loại đồ ăn
</h1>
<br />
<form action="process/typefood?do=add_new" method="post">
    <table>
        <tr>
            <th>Type Name</th>
            <td><input type="text" name="typename" id="typename" /></td>
        </tr>
        
        <tr>
            <th>Type Description</th>
            <td><input type="text" name="typedes" id="typedes" /></td>
        </tr>        
        
        <tr>
            <th><input type="submit" value="Thêm mới" /></th>
            <td><input type="reset" value="Hủy" /></td>
        </tr>							
    </table>
</form>
<?php
require_once 'admin/inc_footer.php';
?>
