<?php
require 'inc_header.php';
require 'inc_checklogin.php';

$result = execute_query("SELECT * FROM TypeFood");

?>
<h1>
    Thêm mới đồ ăn
</h1>
<br />
<form action="process/food?do=add_new" method="post">
    <table>
        <tr>
            <th>Food Name</th>
            <td><input type="text" name="foodname" id="foodname" /></td>
        </tr>

        <tr>
            <th>Type Food</th>
            <td>
                <select>
                    <?php while (($row = mysqli_fetch_assoc($result))) {
                    ?>                    
                    <option name="typeid" value="<?php echo $row["TypeId"] ?>"><?php echo $row["TypeName"] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>				


        <tr>
            <th>Food Description</th>
            <td><input type="text" name="fooddes" id="fooddes" /></td>
        </tr>
        
        <tr>
            <th>Food Image</th>
            <td><input type="text" name="foodimg" id="foodimg" /></td>
        </tr>
        
        <tr>
            <th>Food Price</th>
            <td><input type="text" name="foodprice" id="foodprice" /></td>
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