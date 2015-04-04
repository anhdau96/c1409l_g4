<?php
require_once 'admin/inc_header.php';

$orderid = get("orderid");

$result = execute_query("SELECT * FROM `Order` WHERE `OrderId` =$orderid");

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}
?>
<form action="../../order.php?do=update" method="post">
    <table>
        <tr>
            <th>Order Id</th>
            <td><input type="text" name="orderid" id="orderid" readonly
                       value="<?php echo get("orderid") ?>" /></td>
        </tr>
        
        <tr>
            <th>Order Status</th>
            <td><input type="text" name="status" id="status"
                       value="<?php echo $row["OrderStatus"] ?>" /></td>
        </tr>
        
        <tr>
            <th>Mem Id</th>
            <td><input type="text" name="memid" id="memid" readonly
                       value="<?php echo $row["MemId"] ?>" /></td>
        </tr>

        <tr>
            <th>TypePay Id</th>
            <td><input type="text" name="typepayid" id="typepayid"
                       value="<?php echo $row["TypePayId"] ?>" /></td>
        </tr>


        <tr>
            <th>TotalCost</th>
            <td><input type="number" name="totalcost" id="totalcost" readonly
                       value="<?php echo $row["TotalCost"] ?>" /></td>
        </tr>
        
        <tr>
            <th>Receiver Date</th>
            <td><input type="text" name="date" id="date"
                       value="<?php echo $row["ReceiverDate"] ?>" /></td>
        </tr>
        
        <tr>
            <th>Receiver Name</th>
            <td><input type="text" name="name" id="name"
                       value="<?php echo $row["ReceiverName"] ?>" /></td>
        </tr>
        
        <tr>
            <th>Receiver Phone</th>
            <td><input type="text" name="phone" id="phone"
                       value="<?php echo $row["ReceiverPhone"] ?>" /></td>
        </tr>
        
        <tr>
            <th>Receiver Address</th>
            <td><input type="text" name="add" id="add"
                       value="<?php echo $row["ReceiverAddress"] ?>" /></td>
        </tr>
        
        <tr>
            <th>Note</th>
            <td><input type="text" name="note" id="note"
                       value="<?php echo $row["Note"] ?>" /></td>
        </tr>
        
        <tr>
            <th><input type="submit" value="Cập nhật" /></th>

        </tr>
    </table>
</form>
<?php
require_once 'admin/inc_footer.php';
?>
