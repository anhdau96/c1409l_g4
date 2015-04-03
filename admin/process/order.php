<?php
require_once 'include/process.php';

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
    $value = post("value");
    $cus_username = post("cus_username");
    $cou_username = post("cou_username");
    
    $query = "INSERT INTO `order` VALUES (NULL,'$date','$value','$cus_username','$cou_username')";

    execute_query($query);
    redirect("../order_list");
}

function delete() {
    $orderid = get("orderid");
    $query = "DELETE FROM `order` WHERE `orderid`='$orderid'";
    $result = execute_query($query);
    redirect("../order_list.php");
}
