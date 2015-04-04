<?php
require_once 'inc_header.php';

$name = get("search_food");
$choice = get("choice");
?>

<div class="container">
            <div class="jumbotron">
                <h1 style="font-family: Monotype Corsiva;color: red">Tìm món ăn</h1>
                <form style="text-align: center" action="" method="get">
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

        <?php
        for ($i = 1; $i <= $total_page; $i++) {
            echo "<a href='?search_food=$name&choice=$choice&page=$i'>$i</a> | ";
        }
        ?>
        <div class="row" style="color: blueviolet">
            <div class="col-md-2">
                <p style="font-family: Amazone ;font-size: 25px">Loại món ăn</p>
            </div>
            <div class="col-md-2"> 
                <p style="font-family: Amazone ;font-size: 25px">Tên món ăn</p>
            </div>
            <div class="col-md-4"> 
                <p style="font-family: Amazone ;font-size: 25px">Mô tả</p>
            </div>
            <div class="col-md-2"> 
                <p style="font-family: Amazone ;font-size: 25px">Giá bán</p>
            </div>
        </div>
        <hr />
        <?php 
            while ($row = mysqli_fetch_assoc($result)){
        ?>
            <div class="row" style="color: palevioletred">
                <div class="col-md-2">
                    <p style="font-family: Amazone;font-size: 27px"><?php echo $row["TypeName"]?></p>
                </div>
                <div class="col-md-2"> 
                    <p style="font-family: Amazone;font-size: 27px"><?php echo $row["FoodName"]?></p>
                </div>
                <div class="col-md-3"> 
                    <p style="font-family: Amazone;font-size: 27px"><?php echo $row["FoodDescription"]?></p>
                </div>
                <div class="col-md-2"> 
                    <p style="font-family: Amazone;font-size: 27px"><?php echo $row["FoodPrice"]?> VNĐ</p>
                </div>
            </div>
            <hr />
<?php
    }
?>
            <?php
        }
    }
    ?>
            </div>
</div>

<?php
require_once 'inc_footer.php';
?>
