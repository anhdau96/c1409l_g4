<?php
require_once 'admin/inc_header.php';
?>

<h1 style="text-align: center">
    Thêm mới liên hệ
</h1>
<br />
<form action="process/contact?do=add_new" method="post">
    <table>
        <tr>
            <th>Name</th>
            <td><input type="text" name="name" id="username" required/></td>
        </tr>

        <tr>
            <th>Job</th>
            <td><input type="job" name="job" id="job" required/></td>
        </tr>				


        <tr>
            <th>Description</th>
            <td><input type="text" name="description" id="description" required/></td>
        </tr>
        
        <tr>
            <th>Email</th>
            <td><input type="text" name="email" id="email" required/></td>
        </tr>
        
        <tr>
            <th>Phone</th>
            <td><input type="text" name="phone" id="phone" required/></td>
        </tr>
        
        <tr>
            <th>Facebook</th>
            <td><input type="text" name="facebook" id="facebook" required/></td>
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
