<?php
require_once 'include/process.php';

function add_new() {
    // KHÔNG dung nhu the nay
    // $username = $_POST['username'];
    $typename = post("typename");
    $typedes = post("typedes");
    
    execute_query("INSERT INTO `TypeFood` VALUES (NULL, '$typename','$typedes')");
    redirect("../typefood_list");
}

function update() {
    $typeid = post("typeid");
    $typename = post("typename");
    $typedes = post("typedes");
    
    execute_query("UPDATE `TypeFood` SET TypeName = '$typename', TypeDescription='$typedes' WHERE TypeId=$typeid");
    redirect("../typefood_list");
}

function delete() {
    $typeid= get("typeid");
    execute_query("DELETE FROM `TypeFood` WHERE TypeId='$typeid'");
    redirect("../typefood_list");
}