<?php
require_once 'include/process.php';

function add_new() {
    // KHÔNG dung nhu the nay
    // $username = $_POST['username'];
    $resname = post("resname");
    $resaddress = post("resaddress");
    $resphone = post("resphone");
    $resmanager = post("resmanager");
    execute_query("INSERT INTO `Restaurant` VALUES (NULL, '$resname','$resaddress','$resphone','$resmanager')");
    redirect("../restaurant_list");
}

function update() {
    $resid = post("resid");
    $resname = post("resname");
    $resaddress = post("resaddress");
    $resphone = post("resphone");
    $resmanager = post("resmanager");
    execute_query("UPDATE `Admin` SET ResName = '$resname',ResAddress='$resaddress' , ResPhone='$resphone', ResManager='$resmanager' WHERE ResId=$resid");
    redirect("../restaurant_list");
}