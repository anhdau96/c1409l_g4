<?php 
require_once 'include/config.php';
require_once 'include/functions.php';
$path="";
if (isset($_SERVER['PATH_INFO'])){
    $path = $_SERVER['PATH_INFO'] ;
    $file = $path.".php";
}


