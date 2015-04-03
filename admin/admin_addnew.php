<?php
require_once 'admin/inc_header.php';
?>
<h1>
    Thêm mới Admin
</h1>
<br />
<form action="process/admin?do=add_new" method="post">
    <table>
        <tr>
            <th>Username</th>
            <td><input type="text" name="username" id="username" /></td>
        </tr>

        <tr>
            <th>Password</th>
            <td><input type="password" name="password" id="password" /></td>
        </tr>				


        <tr>
            <th>Fullname</th>
            <td><input type="text" name="fullname" id="fullname" /></td>
        </tr>
        
        <tr>
            <th>Address</th>
            <td><input type="text" name="address" id="address" /></td>
        </tr>
        
        <tr>
            <th>Email</th>
            <td><input type="text" name="email" id="email" /></td>
        </tr>
        
        <tr>
            <th>Phone</th>
            <td><input type="text" name="phone" id="phone" /></td>
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
