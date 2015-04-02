<?php
require 'inc_header.php';

//Paging
$n = get("page");
$n = ($n=="" ?  1  :  $n);

$rs_count = execute_query("SELECT COUNT(*) as cnt FROM Food");
$count_row = mysqli_fetch_assoc($rs_count);
$total = $count_row["cnt"];

$rs = execute_query("SELECT * FROM Food F JOIN TypeFood TF ON F.TypeId=TF.TypeId ORDER BY TypeName " . createLimitForPaging($n));
$total_page = ceil($total / PAGE_ROW);
?>

<h1>Food List <?php echo $n . "/" . $total_page ?> </h1>

<?php
for ($i=1;$i<=$total_page; $i++) {
  echo "<a href='?page=$i'>$i</a> | ";   
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
    while (($row = mysqli_fetch_assoc($rs))) {
        ?>
        <tr>
            <td><?php echo $row["TypeName"] ?></td>
            <td><?php echo $row["FoodName"] ?></td>
            <td><?php echo $row["FoodDescription"] ?></td>
            <td><?php echo $row["FoodImage"] ?></td>            
            <td><?php echo $row["FoodPrice"] ?></td>
            <td><a href="food_edit?foodid=<?php echo $row["FoodId"] ?>">Cập
            nhật</a></td>
            <td><a href="process/food?do=delete&foodid=<?php echo $row["FoodId"] ?>">X</a> </td>
        </tr>	
    <?php } ?>	
</table>

<h2><a href="food_addnew">Thêm mới đồ ăn</a></h2>

<?php
require 'inc_footer.php';
?>