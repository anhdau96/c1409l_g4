<?php
require_once 'include/process.php';

function add_new() {
    // KHÔNG dung nhu the nay
    // $username = $_POST['username'];
    $name = post("name");
    $job = post("job");
    $description = post("description");
    $email = post("email");
    $phone = post("phone");
    $facebook = post("facebook");
    
    execute_query("INSERT INTO `Contact` VALUES (NULL, '$name','$job','$description','$email','$phone','$facebook')");
    redirect("../contact_list");
}

function update() {
    $contactid = post("contactid");
    $name = post("name");
    $job = post("job");
    $description = post("description");
    $email = post("email");
    $phone = post("phone");
    $facebook = post("facebook");
    execute_query("UPDATE `Contact` SET Name = '$name', Job='$job', Description='$description', Email='$email' , Phone='$phone', Facebook='$facebook' WHERE ContactId=$contactid");
    redirect("../contact_list");
}

function delete() {
    $contactid= get("contactid");
    execute_query("DELETE FROM `Contact` WHERE ContactId='$contactid'");
    redirect("../contact_list");
}