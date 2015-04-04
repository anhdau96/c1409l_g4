<?php
require_once 'admin/inc_header.php';
$rs_count = execute_query("SELECT COUNT(*) cnt FROM `Order` WHERE OrderStatus='Đang chờ'");
$count_row = mysqli_fetch_assoc($rs_count);
$total = $count_row["cnt"];
?>

<h2><a href="order_list">Có <?php echo($total); ?> đơn hàng đang chờ...</a></h2>
<?php
require_once 'admin/inc_footer.php';
?>

