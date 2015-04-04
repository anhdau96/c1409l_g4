<?php
require_once 'include/config.php';
require_once 'include/functions.php';
require_once 'include/process.php';

function update() {
    $orderid  = post("orderid");
    $date  = post("date");
    $typeid = post("typeid");
    $name = post("name");
    $phone = post("phone");
    $add = post("add");
    $memid = post("memid");    
    $totalprice = post ("totalcost");
    $status = post ("status");
   
    $query = "UPDATE `Order` SET `OrderId`='$orderid',`OrderStatus`='$status', `MemId`='$memid',`TotalCost`='$totalprice',`ReceiverDate`='$date',`ReceiverName`='$name',`ReceiverPhone`='$phone',`ReceiverAddress`='$add',`Note`='$note' WHERE `orderid`='$orderid'";
    $result = execute_query($query);
    redirect("index.php/admin/order_list");
}

function add_new() {
    // KHÃ”NG dung nhu the nay
    // $username = $_POST['username'];
    $date  = post("date");
    $typeid = post("typeid");
    $name = post("name");
    $phone = post("phone");
    $add = post("add");
    $memid = post("memid");    
    $totalprice = post ("price");
    
    
    
   $query = "INSERT INTO `Order` VALUES (NULL,'Đang chờ','$memid','$typeid','$totalprice','$date','$name','$phone','$add',NULL)";

    execute_query($query);
    
    $cart = $_SESSION["cart"];
    $i = 0;
    
    $query = "SELECT * FROM Food WHERE FoodId IN (";
    $comma = "";
    foreach ($_SESSION["cart"] as $key => $value) {
        $query .= $comma . $key;
        $comma = ",";
        
        $foodid[$i] = $key;
        $quantity[$i] = $value;
        $i++;
    }
    $query .= ")";
    $result = execute_query($query);
    $a = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $price[$a] = $row['FoodPrice'];
        $a++;
    }
    
    $productquantity = count($cart);    
    
    $orderid_query = "SELECT * FROM `Order` WHERE `Orderid` = (SELECT MAX(OrderId) FROM `Order`)";
    $orderid_result = execute_query($orderid_query);
    $orderid_row = mysqli_fetch_assoc($orderid_result);
    $orderid = $orderid_row['OrderId'];
    
    for ($b = 0; $b < $productquantity; $b++){
        $order_details_query = "INSERT INTO `OrderDetail` VALUES ( '$orderid', '$foodid[$b]', '$price[$b]', '$quantity[$b]')";
        execute_query($order_details_query);
}

    unset($_SESSION["cart"]);
    redirect("index.php");
}

function delete() {
    $orderid = get("orderid");
    $query = "DELETE FROM `Order` WHERE `Orderid`='$orderid'";
    $result = execute_query($query);
    redirect("admin/order_list");
}
