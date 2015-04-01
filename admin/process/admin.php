<?php
require_once '../../include/process.php';
require_once '../../inc_all.php';

function add_new() {
    // KHÔNG dung nhu the nay
    // $username = $_POST['username'];
    $username = post("username");
    $password = post("password");
    $fullname = post("fullname");
    $address = post("address");
    $email = post("email");
    $phone = post("phone");
    
    execute_query("INSERT INTO `Admin` VALUES (NULL, '$username','$password','$fullname','$address','$email','$phone')");
    redirect("../admin_list.php");
}

function update() {
    $adminid = post("adminid");
    $username = post("username");
    $password = post("password");
    $fullname = post("fullname");
    $address = post("address");
    $email = post("email");
    $phone = post("phone");
    execute_query("UPDATE `Admin` SET AUsername = '$username', APassword='$password', AFullname='$fullname', AAddress='$address' , AEmail='$email' , APhone='$phone' WHERE AdminId=$adminid");
    redirect("../admin_list.php");
}

function delete() {
    $adminid= get("adminid");
    execute_query("DELETE FROM `Admin` WHERE AdminId='$adminid'");
    redirect("../admin_list.php");
}
function do_login() {
    $username = post("username");
    $password = post("password");
    $query = "SELECT * FROM `Admin` WHERE `AUsername`='$username' AND `APassword`='$password'";
    //die($query);
    //echo $query;	
    $result = execute_query($query);
    

    if ($row = mysqli_fetch_assoc($result)) {
        $_SESSION["username"] = $username;

        redirect("../admin_home.php");
    } else {
        redirect("../admin_login.php?error=1");
    }
}

function logout() {
    unset($_SESSION["username"]);
    redirect("../admin_login.php?error=3");
}
