<?php
require_once 'admin/inc_header.php';

//Paging
$n = get("page");
$n = ($n=="" ?  1  :  $n);

$rs_count = execute_query("SELECT COUNT(*) as cnt FROM `Order`");
$count_row = mysqli_fetch_assoc($rs_count);
$total = $count_row["cnt"];

$rs = execute_query("SELECT * FROM `Order`" . createLimitForPaging($n));
$total_page = ceil($total / PAGE_ROW);
?>

<h1>Order List <?php echo $n . "/" . $total_page ?> </h1>

<?php
for ($i=1;$i<=$total_page; $i++) {
  echo "<a href='?page=$i'>$i</a> | ";   
}
?>

<table border="1">
    <tr>
        <th>Order Status</th>
        <th>Mem Id</th>
        <th>Type Pay Id</th>
        <th>Total Cost</th>
        <th>Receiver Date</th>
        <th>Receiver Name</th>
        <th>Receiver Phone</th>
        <th>Receiver Address</th>
        <th>Note</th>
        <th>Chi tiết</th>
        <th>Cập nhập</th>
    </tr>

    <?php
    while (($row = mysqli_fetch_assoc($rs))) {
        ?>
        <tr>
            <td><?php echo $row["OrderStatus"] ?></td>
            <td><?php echo $row["MemId"] ?></td>
            <td><?php echo $row["TypePayId"] ?></td>
            <td><?php echo $row["TotalCost"] ?></td>
            <td><?php echo $row["ReceiverDate"] ?></td>            
            <td><?php echo $row["ReceiverName"] ?></td>
            <td><?php echo $row["ReceiverPhone"] ?></td>
            <td><?php echo $row["ReceiverAddress"] ?></td>
            <td><?php echo $row["Note"] ?></td>
            <td><a href="order_detail?orderid=<?php echo($row["OrderId"])?>">Chi tiết</a></td>
            <td><a href="order_edit?orderid=<?php echo $row["OrderId"] ?>&status=<?php echo $row["OrderStatus"] ?>">Cập
            nhật</a></td>
        </tr>	
    <?php } ?>	
</table>

<?php
require_once 'admin/inc_footer.php';
?>
