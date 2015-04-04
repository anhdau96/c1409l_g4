<?php
require_once 'include/process.php';
require_once 'include/config.php';
require_once 'include/functions.php';

function add_new() {
    // KHÔNG dung nhu the nay
    // $username = $_POST['username'];
    $feedname = post("feedname");
    $feedemail = post("feedemail");
    $feedtitle = post("feedtitle");
    $feedcontent = post("feedcontent");
    execute_query("INSERT INTO `FeedBack` VALUES (NULL, '$feedname','$feedemail','$feedtitle','$feedcontent')");
    redirect("index.php");
}
