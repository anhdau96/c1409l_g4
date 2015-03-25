<?php

require_once 'include/process.php';

function add_new() {
    // KHÔNG dung nhu the nay
    // $username = $_POST['username'];
    $typepayname = post("typepayname");
    
    execute_query("INSERT INTO `TypePay` VALUES (NULL, '$typepayname')");
    redirect("../typepay_list");
}

function update() {
    $typepayid = post("typepayid");
    $typepayname = post("typepayname");
    execute_query("UPDATE `TypePay` SET typepayname = '$typepayname' WHERE TypePayId=$typepayid");
    redirect("../typepay_list");    
}

function delete() {
    $typepayid= get("typepayid");
    execute_query("DELETE FROM `TypePay` WHERE TypePayId='$typepayid'");
    redirect("../typepay_list");
}