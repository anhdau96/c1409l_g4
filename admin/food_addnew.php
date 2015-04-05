<?php
require_once 'admin/inc_header.php';

$result = execute_query("SELECT * FROM TypeFood");

?>
<h1 style="text-align: center">
    Thêm mới món ăn
</h1>
<br />
<form action="process/food?do=add_new" method="post">
    <table>
        <tr>
            <th>Food Name</th>
            <td><input type="text" name="foodname" id="foodname" required/></td>
        </tr>

        <tr>
            <th>Type Food</th>
            <td>
                <select name="typeid">
                    <?php while (($row = mysqli_fetch_assoc($result))) {
                    ?>                    
                    <option value="<?php echo $row["TypeId"] ?>"><?php echo $row["TypeName"] ?></option>
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
            <td><input type="number" name="foodprice" id="foodprice" required/></td>
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
