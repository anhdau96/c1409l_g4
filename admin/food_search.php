<?php
require_once 'admin/inc_header.php';

$name = get("search_food");
$choice = get("choice");
?>

<h1>Food Search</h1>
<br />
<form action="" method="get">
    <input name="search_food" value="<?php echo get("search_food") ?>" type="text" />
    <select name="choice">
        <option value="FoodName" <?php echo $choice == 'FoodName' ? "selected" : "" ?>>Tên món ăn</option>
        <option value="TypeName"   <?php echo $choice == 'TypeName' ? "selected" : "" ?>>Kiểu món ăn</option>
        <option value="FoodPrice" <?php echo $choice == 'FoodPrice' ? "selected" : "" ?>>Giá món ăn</option> 
    </select>
    <input type="submit" value="Search" />
</form>


<?php
if ($name != "") {
    if ($choice == "FoodName" || $choice == "TypeName") {
        $result = execute_query("SELECT * FROM Food F JOIN TypeFood TF ON F.TypeId=TF.TypeId WHERE $choice  LIKE '%$name%'");
    } else {
        $result = execute_query("SELECT * FROM Food F JOIN TypeFood TF ON F.TypeId=TF.TypeId WHERE $choice = $name");
    }
    if (!$result || mysqli_num_rows($result) == 0) {
        echo "Not Found!!!!";
    } else {
        ?>
        <?php
        $n = get("page");
        $n = ($n == "" ? 1 : $n);

        if ($choice == "FoodName" || $choice == "TypeName") {
            $rs_count = execute_query("SELECT COUNT(*) as cnt FROM Food F JOIN TypeFood TF ON F.TypeId=TF.TypeId WHERE $choice  LIKE '%$name%'");
        } else {
            $rs_count = execute_query("SELECT COUNT(*) as cnt FROM Food F JOIN TypeFood TF ON F.TypeId=TF.TypeId WHERE $choice = $name");
        }

        $count_row = mysqli_fetch_assoc($rs_count);
        $total = $count_row["cnt"];

        if ($choice == "FoodName" || $choice == "TypeName") {
            $result1 = execute_query("SELECT * FROM Food F JOIN TypeFood TF ON F.TypeId=TF.TypeId WHERE $choice  LIKE '%$name%' ORDER BY TypeName" . createLimitForPaging($n));
        } else {
            $result1 = execute_query("SELECT * FROM Food F JOIN TypeFood TF ON F.TypeId=TF.TypeId WHERE $choice = $name ORDER BY TypeName " . createLimitForPaging($n));
        }

        $total_page = ceil($total / PAGE_ROW);
        ?>

        <h1>Search List <?php echo $n . "/" . $total_page ?> </h1>

        <?php
        for ($i = 1; $i <= $total_page; $i++) {
            echo "<a href='?search_food=$name&choice=$choice&page=$i'>$i</a> | ";
        }
        ?>
        <table border="1">
            <tr>
                <th>Type Name</th>
                <th>Food Name</th>
                <th>Food Description</th>
                <th>Food Image</th>
                <th>Food Price</th>
                <th>Cập nhập</th>
                <th>Xóa</th>
            </tr>

        <?php
        while ($row = mysqli_fetch_assoc($result1)) {
            ?>    
                <tr>
                    <td><?php echo $row["TypeName"] ?></td>
                    <td><?php echo $row["FoodName"] ?></td>
                    <td><?php echo $row["FoodDescription"] ?></td>
                    <td><?php echo $row["FoodImage"] ?></td>            
                    <td><?php echo $row["FoodPrice"] ?></td>
                    <td><a href="food_edit?foodid=<?php echo $row["FoodId"] ?>">Cập nhật</a></td>
                    <td><a href="process/foods?do=delete&foodid=<?php echo $row["FoodId"] ?>">X</a> </td>
                </tr>
        <?php }
        ?>

        </table>
            <?php
        }
    }
    ?>

<?php
require_once 'admin/inc_footer.php';
?>
