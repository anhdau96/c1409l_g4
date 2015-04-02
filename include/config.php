<?php
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
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
$title_map["localhost:82/c1409l_g4/admin/contact_addnew"] ="Thêm mới Admin";
$title_map["/admin/admin_edit.php"] ="Cập nhật Admin";
$title_map["/admin/admin_list"] ="Danh sách Admin";

$title_map["/admin/typepay_addnew.php"] ="Thêm mới kiểu thanh toán";
$title_map["/admin/typepay_edit.php"] ="Cập nhật kiểu thanh toán";
$title_map["/admin/typepay_list.php"] ="Danh sách kiểu thanh toán";

$title_map["/admin/restaurant_addnew.php"] ="Thêm mới cử hàng";
$title_map["/admin/restaurant_edit.php"] ="Cập nhật cửa hàng";
$title_map["/admin/restaurant_list.php"] ="Danh sách cửa hàng";

$title_map["/admin/contact_addnew.php"] ="Thêm mới liên hệ";
$title_map["/admin/contact_edit.php"] ="Cập nhật liên hệ";
$title_map["/admin/contact_list.php"] ="Danh sách liên hệ";

$title_map["/admin/typefood_addnew.php"] ="Thêm mới kiểu đồ ăn";
$title_map["/admin/typefood_edit.php"] ="Cập nhật kiểu đồ ăn";
$title_map["/admin/typefood_list.php"] ="Danh sách kiểu đồ ăn";

$title_map["/admin/food_addnew.php"] ="Thêm mới đồ ăn";
$title_map["/admin/food_edit.php"] ="Cập nhật đồ ăn";
$title_map["/admin/food_list.php"] ="Danh sách đồ ăn";
$title_map["/admin/food_search.php"] ="Tìm kiếm đồ ăn";

$title_map["/admin/admin_home.php"] ="Trang chủ";