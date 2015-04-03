<?php
require_once '../include/process.php';

function update() {
    $orderid = get("orderid");
    $date = post("date");
    $value = post("value");
    $cus_username = post("cus_username");
    $cou_username = post("cou_username");
   
    $query = "UPDATE `order` SET `date`='$date',`value`='$value', `cus_username`='$cus_username',`cou_username`='$cou_username' WHERE `orderid`='$orderid'";
    $result = execute_query($query);
    redirect("../order_list");
}

function add_new() {
    // KHÃ”NG dung nhu the nay
    // $username = $_POST['username'];
    $date  = post("date");
    $typeid = post("typeid");
    $name = post("name");
    $name = post("phone");
    $name = post("add");
    $memid = $_SESSION["memid"];
    
    $totalprice = 0;
    if (isset($_SESSION["cart"])) {
    $cart = $_SESSION["cart"];
    $i = count($_SESSION["cart"]);
    $query = "SELECT * FROM Food WHERE FoodId IN (";
    $comma = "";


    foreach ($_SESSION["cart"] as $key => $value) {
        $query .= $comma . $key;
        $comma = ",";
    }
    $query .= ")";
    $rs = execute_query($query);
    }
    while ($row = mysqli_fetch_assoc($rs)) {
        $totalprice += ($_SESSION["cart"][$row["FoodId"]] * $row["FoodPrice"]);
    }
    
    
   $query1 = "INSERT INTO `order` VALUES (NULL,'Đang chờ','$memid','$typeid','$totalprice','$date','$name','$phone','$add',NULL)";

    execute_query($query);
    unset($_SESSION["cart"]);
    redirect("../index.php");
}

function delete() {
    $orderid = get("orderid");
    $query = "DELETE FROM `order` WHERE `orderid`='$orderid'";
    $result = execute_query($query);
    redirect("../order_list.php");
}
