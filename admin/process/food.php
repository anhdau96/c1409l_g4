<?php
require_once 'include/process.php';

function add_new() {
    // KHÔNG dung nhu the nay
    // $username = $_POST['username'];
    $foodname = post("foodname");
    $typeid = post("typeid");
    $fooddes = post("fooddes");
    $foodimg = post("foodimg");
    $foodprice = post("foodprice");
    
    execute_query("INSERT INTO `Food` VALUES (NULL, '$foodname','$typeid','$fooddes','$foodimg','$foodprice')");
    redirect("../food_list");
}

function update() {
    $foodid = post("foodid");
    $foodname = post("foodname");
    $typeid = post("typeid");
    $fooddes = post("fooddes");
    $foodimg = post("foodimg");
    $foodprice = post("foodprice");
    execute_query("UPDATE `Food` SET FoodName = '$foodname', TypeId='$typeid', FoodDescription='$fooddes', FoodImage='$foodimg' , FoodPrice='$foodprice' WHERE FoodId=$foodid");
    redirect("../food_list");
}

function delete() {
    $foodid= get("foodid");
    execute_query("DELETE FROM `Food` WHERE FoodId='$foodid'");
    redirect("../food_list");
}