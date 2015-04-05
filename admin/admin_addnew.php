<?php
require_once 'admin/inc_header.php';
?>
<h1 style="text-align: center">
    Thêm mới Admin
</h1>
<br />
<form action="process/admin?do=add_new" method="post">
    <table>
        <tr>
            <th>Username</th>
            <td><input type="text" name="username" id="username" required/></td>
        </tr>

        <tr>
            <th>Password</th>
            <td><input type="password" name="password" id="password" required /></td>
        </tr>				


        <tr>
            <th>Fullname</th>
            <td><input type="text" name="fullname" id="fullname" required /></td>
        </tr>
        
        <tr>
            <th>Address</th>
            <td><input type="text" name="address" id="address" required /></td>
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
            <td><input type="submit" value="Thêm mới" /></td>
            <td><input type="reset" value="Hủy" /></td>
        </tr>							
    </table>
</form>
<?php
require_once 'admin/inc_footer.php';
?>
