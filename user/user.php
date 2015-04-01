<?php
require_once '../inc_all.php';

function add_new() {
    // KHÔNG dung nhu the nay
    // $username = $_POST['username'];
    $fullname = post("fullname");
    $email = post("email");
    $password = post("password");   
    $address = post("address");
    $phone = post("phone");
    
    execute_query("INSERT INTO `Member` VALUES (NULL, '$email','$password','$fullname','$address','$phone')");
    
    redirect("index.php");
}

function do_login() {
    $username = post("username");
    $password = post("password");
    $query = "SELECT * FROM `Admin` WHERE `AUsername`='$username' AND `APassword`='$password'";

    //echo $query;	
    $result = execute_query($query);

    if ($row = mysqli_fetch_assoc($result)) {
        $_SESSION["username"] = $username;

        redirect("../admin_list");
    } else {
        redirect("../admin_login?error=1");
    }
}

function logout() {
    unset($_SESSION["username"]);
    redirect("../admin_login?error=3");
}
