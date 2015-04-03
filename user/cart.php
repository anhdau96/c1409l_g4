<?php
require_once '../include/config.php';
require_once '../include/functions.php';
require_once '../include/process.php';


function add() {
    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = array();
    }
    $cart = $_SESSION["cart"];
    ///

    $foodid = get("foodid");
    $choose = get("choose");
    $page = get("page");

    if (array_key_exists($foodid, $cart)) {
        $cart[$foodid] = $cart[$foodid] + 1;
    } else {
        $cart[$foodid] = 1;
    }

    $_SESSION["cart"] = $cart;
    redirect("../menu.php?choose=$choose&page=$page");
}



function delete() {
    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = array();
    }
    $cart = $_SESSION["cart"];
    ///

    $foodid = get("foodid");
    unset($cart[$foodid]);

    $_SESSION["cart"] = $cart;
    redirect("../cart_view.php");
}

