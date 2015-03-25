<?php
define("DB_HOST","10.0.0.29");
define("DB_USER","c1409l_g4");
define("DB_PASS","12345678");
define("DB_NAME","c1409l_g4");
define("PAGE_ROW", 10);
define("BASE","c1409l_g4");

session_start();
$connection;
// nếu như không kết nối được db => die và thoong báo
if( ! ($connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME)) ) {
    die("Khong ket noi duoc DB");
}

mysqli_query($connection, "SET NAMES 'utf8'");


/*
 * false, NULL, 0 => if sẽ sai
 * true, NOT NULL, NOT 0 => if sẽ sai
 *  */
$title_map["/admin/admin_addnew"] ="Thêm mới Admin";
$title_map["/admin/admin_edit"] ="Cập nhật Admin";
$title_map["/admin/admin_list"] ="Danh sách Admin";

$title_map["/admin/typepay_addnew"] ="Thêm mới kiểu thanh toán";
$title_map["/admin/typepay_edit"] ="Cập nhật kiểu thanh toán";
$title_map["/admin/typepay_list"] ="Danh sách kiểu thanh toán";

$title_map["/admin/restaurant_addnew"] ="Thêm mới cử hàng";
$title_map["/admin/restaurant_edit"] ="Cập nhật cửa hàng";
$title_map["/admin/restaurant_list"] ="Danh sách cửa hàng";

$title_map["/admin/contact_addnew"] ="Thêm mới liên hệ";
$title_map["/admin/contact_edit"] ="Cập nhật liên hệ";
$title_map["/admin/contact_list"] ="Danh sách liên hệ";

$title_map["/admin/typefood_addnew"] ="Thêm mới kiểu đồ ăn";
$title_map["/admin/typefood_edit"] ="Cập nhật kiểu đồ ăn";
$title_map["/admin/typefood_list"] ="Danh sách kiểu đồ ăn";

$title_map["/admin/food_addnew"] ="Thêm mới đồ ăn";
$title_map["/admin/food_edit"] ="Cập nhật đồ ăn";
$title_map["/admin/food_list"] ="Danh sách đồ ăn";
$title_map["/admin/food_search"] ="Tìm kiếm đồ ăn";