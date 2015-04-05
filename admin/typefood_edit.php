<?php
require_once 'admin/inc_header.php';

$typeid = get("typeid");

$result = execute_query("SELECT * FROM `TypeFood` WHERE `TypeId` =$typeid");

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}
?>
<h1 style="text-align: center">
    Cập nhập kiểu đồ ăn
</h1>
<br />
<form action="process/typefood?do=update" method="post">
    <table>
        <tr>
            <th>Type Id</th>
            <td><input type="text" name="typeid" id="typeid" readonly
                       value="<?php echo get("typeid") ?>" /></td>
        </tr>

        <tr>
            <th>Type Name</th>
            <td><input type="text" name="typename" id="typename"
                       value="<?php echo $row["TypeName"] ?>" required/></td>
        
        <tr>
            
        <tr>
            <th>Type Description</th>
            <td><input type="text" name="typedes" id="typedes"
                       value="<?php echo $row["TypeDescription"] ?>" /></td>
        
        <tr>
            <td></td>
            <td><input type="submit" value="Cập nhật" /></td>

        </tr>
    </table>
</form>
<?php
require_once 'admin/inc_footer.php';
?>
