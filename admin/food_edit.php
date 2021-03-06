<?php
require_once 'admin/inc_header.php';

$foodid = get("foodid");

$result = execute_query("SELECT * FROM `Food` WHERE `FoodId` =$foodid");

$result1 = execute_query("SELECT * FROM TypeFood");

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $choice = $row["TypeId"];
}
?>

<h1 style="text-align: center">
    Cập nhập món ăn
</h1>
<br />
<form action="process/food?do=update" method="post">
    <table>
        <tr>
            <th>Food Id</th>
            <td><input type="text" name="foodid" id="foodid" readonly
                       value="<?php echo get("foodid") ?>" /></td>
        </tr>

        <tr>
            <th>Food Name</th>
            <td><input type="text" name="foodname" id="foodname"
                       value="<?php echo $row["FoodName"] ?>" required/></td>
        </tr>

        <tr>
            <th>Type Food</th>
            <td>
                <select name="typeid">
                    <?php while (($row1 = mysqli_fetch_assoc($result1))) {
                    ?>                    
                    <option value="<?php echo $row1["TypeId"] ?>" <?php echo $choice == $row1["TypeId"] ? "selected" : "" ?>><?php echo $row1["TypeName"] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>	


        <tr>
            <th>Food Description</th>
            <td><input type="text" name="fooddes" id="fooddes"
                       value="<?php echo $row["FoodDescription"] ?>" /></td>
        </tr>
        
        <tr>
            <th>Food Image</th>
            <td><input type="text" name="foodimg" id="foodimg"
                       value="<?php echo $row["FoodImage"] ?>" /></td>
        </tr>
        
        <tr>
            <th>Food Price</th>
            <td><input type="text" name="foodprice" id="foodprice"
                       value="<?php echo $row["FoodPrice"] ?>" required/></td>
        </tr>
                
        <tr>
            <td></td>
            <td><input type="submit" value="Cập nhật" /></td>

        </tr>
    </table>
</form>
<?php
require_once 'admin/inc_footer.php';
?>
