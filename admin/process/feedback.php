<?php
require_once 'include/process.php';

function add_new() {
    // KHÔNG dung nhu the nay
    // $username = $_POST['username'];
    $feedname = post("feedname");
    $feedemail = post("feedemail");
    $feedtitle = post("feedtitle");
    $feedcontent = post("feedcontent");
    execute_query("INSERT INTO `FeedBack` VALUES (NULL, '$feedname','$feedemail','$feedtitle','$feedcontent')");
    redirect("../feedback_list");
}


function delete() {
    $feedid= get("feedid");
    execute_query("DELETE FROM `FeedBack` WHERE FeedId='$feedid'");
    redirect("../feedback_list");
}