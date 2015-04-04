<?php
require_once 'admin/inc_header.php';

$n = get("page");
$n = ($n=="" ?  1  :  $n);

$rs_count = execute_query("SELECT COUNT(*) as cnt FROM `TypeFood`");
$count_row = mysqli_fetch_assoc($rs_count);
$total = $count_row["cnt"];

$rs = execute_query("SELECT * FROM `TypeFood`" . createLimitForPaging($n));
$total_page = ceil($total / PAGE_ROW);
?>

<h1>Order List <?php echo $n . "/" . $total_page ?> </h1>

<?php
for ($i=1;$i<=$total_page; $i++) {
  echo "<a href='?page=$i'>$i</a> | ";   
}
?>
<br />
<table border="1">
    <tr>
        <th>Type Id</th>
        <th>Type Name</th>
        <th>Type Description</th>
        <th>Cập nhập</th>
        <th>Xóa</th>
    </tr>

    <?php
    while (($row = mysqli_fetch_assoc($rs))) {
        ?>
        <tr>
            <td><?php echo $row["TypeId"] ?></td>
            <td><?php echo $row["TypeName"] ?></td>
            <td><?php echo $row["TypeDescription"] ?></td>
            <td><a href="typefood?typeid=<?php echo $row["TypeId"] ?>">Cập
            nhật</a></td>
            <td><a href="process/typefood?do=delete&typeid=<?php echo $row["TypeId"] ?>">X</a></td> 
        </tr>	
    <?php } ?>	
</table>
<h5 style="text-align: center">
    <a href="typefood_addnew"> Thêm mới kiểu đồ ăn </a>
</h5>
<?php
require_once 'admin/inc_footer.php';
?>
