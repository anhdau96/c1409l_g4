<?php
require_once '../inc_all.php';
//require 'inc_checklogin.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $title_map[$path] ?></title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href=" css/admin.css"rel="stylesheet">
<link rel="stylesheet" href="fonts/font-awesome.min.css">
<script src="../js/metisMenu.min.js"></script>
<script type="text/javascript" src="js/jquery-2.1.1.min.js">
</script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/admin2.js"></script>
<script  type="text/javascript">
	$(function(){
		$("#menu-link").click(function(){
			$("#menu-list").slideToggle();
		});		
	});
	
</script> 
</head>
<body>
	<div id="container">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="wrapper">           
                <a class="navbar-brand">ATDragons Admin</a>
                <div id="head">
                <h2 style="color: #686868">Xin chào, <?php echo ($_SESSION["username"]) ?></h2>
            <a href="process/admin.php?do=logout" style="color: blue">Đăng xuất</a>
                </div>
            </div>                           
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">                     
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Quản lý Admin <span class="fa arrow"></span></a> 
        
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="admin_list.php"> Danh Sách Admin</a>
                                </li>
                                <li>
                                    <a href="admin_addnew.php">Thêm Mới Admin</a>
                                </li>                            
                            </ul>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-phone fa-fw"></i> Liên Hệ<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="contact_list.php">Danh Sách Liên Hệ</a>
                                </li>
                                <li>
                                    <a href="contact_addnew.php">Thêm Mới Liên Hệ</a>
                                </li>
                            </ul>                        
                        </li> 
                        
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i>Thực Đơn<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="food_list.php">Danh Sách Món Ăn</a>
                                </li>
                                <li>
                                    <a href="food_addnew.php">Thêm Mới Món Ăn</a>
                                </li>
                                <li>
                                    <a href="food_search.php">Tìm Kiếm Món Ăn</a>
                                </li>                             
                            </ul>
                        </li>
  
                         <li>
                            <a href="#"><i class="fa fa-home fa-fw"></i>Thông Tin Nhà Hàng<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="restaurant_list.php">Danh Sách Nhà Hàng</a>
                                </li>
                                <li>
                                    <a href="restaurant_addnew.php">Thêm Mới Nhà Hàng</a>
                                </li>                                                     
                            </ul>
                        </li>
 
                         <li>
                            <a href="#"><i class="fa fa-list fa-fw"></i>Loại đồ ăn<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="typefood_list.php">Danh sách loại đồ ăn</a>
                                </li>
                                <li>
                                    <a href="typefood_addnew.php">Thêm mới loại đồ ăn</a>
                                </li>                                                         
                            </ul>
                        </li>
                      
                         <li>
                            <a href="#"><i class="fa fa-money fa-fw"></i>Kiểu Thanh Toán<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="typepay_list.php">Danh Sách Kiểu Thanh Toán</a>
                                </li>
                                <li>
                                    <a href="typepay_addnew.php">Thêm Mới Kiểu Thanh Toán</a>
                                </li>                                                           
                            </ul>
                        </li>
                          <li>
                              <a href="feedback_list.php"><i class="fa fa-users fa-fw"></i>Phản Hồi Khách Hàng</a>
                          </li>
                        
                    </ul>
                </div>             
            </div>           
        </nav>
        <div id="page-wrapper">    