<?php 
require_once '../include/config.php';
require_once '../include/functions.php';


function add_new() {
    // KHÔNG dung nhu the nay
    // $username = $_POST['username'];
    $fullname = post("fullname");
    $email = post("email");
    $password = post("password");   
    $address = post("address");
    $phone = post("phone");
    
    execute_query("INSERT INTO `Member` VALUES (NULL, '$email','$password','$fullname','$address','$phone')");
     
    redirect("../index.php");
}

function do_login() {
    $mememail = post("mememail");
    $password = post("password");
    $query = "SELECT * FROM `Member` WHERE `MemEmail`='$mememail' AND `APassword`='$password'";

    //echo $query;	
    $result = execute_query($query);

    if ($row = mysqli_fetch_assoc($result)) {
        $_SESSION["mememail"] = $mememail;

        redirect("../index.php");
    } else {
        redirect("../login.php?error=1");
    }
}

function logout() {
    unset($_SESSION["username"]);
    redirect("../login.php?error=3");
}