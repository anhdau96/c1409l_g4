<?php
require_once 'admin/inc_header.php';
$orderid=get("orderid");
// tao ra query, phai chay trong navicat truoc
$query1 = "SELECT * FROM `OrderDetail` OD JOIN `FOOD` F ON OD.FoodId=F.FoodId WHERE OrderId=$orderid";

// mysql
$result = execute_query($query1);
?>
<h1 style="text-align: center">
    Chi tiết đơn hàng
</h1>
<br />
<table border="1">
    <tr>
        <th>Order ID</th>
        <th>Food Id</th>
        <th>Price</th>
        <th>Quantity</th>        
    </tr>

    <?php
    while (($row = mysqli_fetch_assoc($result))) {
        ?>
        <tr>
            <td><?php echo $row["OrderId"] ?></td>
            <td><?php echo $row["FoodName"] ?></td>
            <td><?php echo $row["Price"] ?></td>
            <td><?php echo $row["Quantity"] ?></td>          
        </tr>	
    <?php } ?>	
</table>
<h5 style="text-align: center">
    <a href="order_list">Quay lại</a>
</h5>
<?php
require_once 'admin/inc_footer.php';
?>