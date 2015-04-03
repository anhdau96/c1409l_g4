<?php
require_once 'admin/inc_header.php';

$contactid = get("contactid");

$result = execute_query("SELECT * FROM `Contact` WHERE `ContactId` =$contactid");

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}
?>
<form action="process/contact?do=update" method="post">
    <table>
        <tr>
            <th>Contact Id</th>
            <td><input type="text" name="contactid" id="contact" readonly
                       value="<?php echo get("contactid") ?>" /></td>
        </tr>

        <tr>
            <th>Name</th>
            <td><input type="text" name="name" id="name"
                       value="<?php echo $row["Name"] ?>" /></td>
        </tr>

        <tr>
            <th>Job</th>
            <td><input type="Job" name="job" id="Job"
                       value="<?php echo $row["Job"] ?>" /></td>
        </tr>


        <tr>
            <th>Description</th>
            <td><input type="text" name="description" id="Description"
                       value="<?php echo $row["Description"] ?>" /></td>
        </tr>        
        
        <tr>
            <th>Email</th>
            <td><input type="text" name="email" id="email"
                       value="<?php echo $row["Email"] ?>" /></td>
        </tr>
        
        <tr>
            <th>Phone</th>
            <td><input type="text" name="phone" id="phone"
                       value="<?php echo $row["Phone"] ?>" /></td>
        </tr>
        
        <tr>
            <th>Facebook</th>
            <td><input type="text" name="facebook" id="facebook"
                       value="<?php echo $row["Facebook"] ?>" /></td>
        </tr>
        
        <tr>
            <th><input type="submit" value="Cập nhật" /></th>

        </tr>
    </table>
</form>
<?php
require_once 'admin/inc_footer.php';
?>
