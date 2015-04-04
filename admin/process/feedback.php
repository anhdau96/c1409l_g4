<?php

function delete() {
    $feedid= get("feedid");
    execute_query("DELETE FROM `FeedBack` WHERE FeedId='$feedid'");
    redirect("../feedback_list");
}