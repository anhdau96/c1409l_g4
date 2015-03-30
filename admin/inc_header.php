<?php
require 'inc_checklogin.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin Home</title>
<link href="<?php base_url("/admin/css/bootstrap.min.css") ?>" rel="stylesheet">
<link href="<?php base_url("/admin/css/admin.css") ?>" rel="stylesheet">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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
        <div id="wrapper">
            <div id="header">
                <ul>
                    <li><a href="admin_home">Home</a></li>
                    <li><a href="contact_list">Contact</a></li>              
                    <li><a href="food_list">Menu</a></li>  
                    <li><a href="restaurant_list">Info</a> </li>                         
                </ul>
            </div>
           
            <h2 style="color: #0174DF">Xin chào, <?php echo ($_SESSION["username"]) ?></h2>
            <a href="process/admin.php?do=logout" style="color: blue">Đăng xuất</a>
        
        </div>
	<div id="container">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="wrapper">           
                <a class="navbar-brand">ATDragons Admin</a>
            </div>                           
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                      

                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Quản Lý Admin <span class="fa arrow"></span></a> 
        
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="admin_list"> Danh Sách Admin</a>
                                </li>
                                <li>
                                    <a href="admin_addnew">Thêm Mới Admin</a>
                                </li>
                                <li>
                                    <a href="admin_edit"> Cập Nhập Admin</a>
                                </li>                               
                            </ul>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-phone fa-fw"></i> Liên Hệ<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="contact_list">Danh Sách Liên Hệ</a>
                                </li>
                                <li>
                                    <a href="contact_addnew">Thêm Mới Liên Hệ</a>
                                </li>
                                <li>
                                    <a href="contact_edit.php">Cập Nhập Liên Hệ</a>
                                </li>
                            </ul>                        
                        </li> 
                        
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Thực Đơn<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="food_list">Danh Sách Món Ăn</a>
                                </li>
                                <li>
                                    <a href="food_addnew">Thêm Mới Món Ăn</a>
                                </li>
                                 <li>
                                     <a href="food_edit">Chỉnh Sửa Món Ăn</a>
                                </li>
                                <li>
                                    <a href="food_search">Tìm Món Ăn</a>
                                </li>                             
                            </ul>
                        </li>
  
                         <li>
                            <a href="#"><i class="fa fa-home fa-fw"></i> Thông Tin Nhà Hàng<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="restaurant_list">Danh Sách Nhà Hàng</a>
                                </li>
                                <li>
                                    <a href="restaurant_addnew">Thêm Mới Nhà Hàng</a>
                                </li>
                                 <li>
                                     <a href="restaurant_edit">Cập Nhập Nhà Hàng</a>
                                </li>                                                           
                            </ul>
                        </li>
 
                         <li>
                            <a href="#"><i class="fa fa-list fa-fw"></i> Loại Thức Ăn<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="typefood_list">Danh Sách Các Loại Thức Ăn</a>
                                </li>
                                <li>
                                    <a href="typefood_addnew">Thêm Mới Loại Thức Ăn</a>
                                </li>
                                 <li>
                                     <a href="typefood_edit">Cập Nhập Loại Thức Ăn</a>
                                </li>                                                           
                            </ul>
                        </li>
                      
                         <li>
                            <a href="#"><i class="fa fa-money fa-fw"></i> Thanh Toán<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="typepay_list">Các Kiểu Thanh Toán</a>
                                </li>
                                <li>
                                    <a href="typepay_addnew">Thêm Mới Kiểu Thanh Toán</a>
                                </li>
                                 <li>
                                     <a href="typepay_edit">Chỉnh Sửa Các Kiểu Thanh Toán</a>
                                </li>                                                           
                            </ul>
                        </li>
                        
                    </ul>
                </div>             
            </div>           
        </nav>
        <div id="page-wrapper">
        </div>
        </div>      
    </div>