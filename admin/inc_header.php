<?php
require 'inc_checklogin.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $title_map[$path] ?></title>
<link href= "<?php base_url("admin/css/bootstrap.min.css")?>" rel="stylesheet">
<link href= "<?php base_url("admin/css/admin.css")?>" rel="stylesheet">
<link rel= "stylesheet" href="<?php base_url("admin/fonts/font-awesome.min.css")?>">
<script src= "<?php base_url("js/metisMenu.min.js")?>"></script>
<script type="text/javascript" src= "<?php base_url("js/jquery-2.1.1.min.js")?>">
</script>
<script src="<?php base_url("js/bootstrap.min.js")?>"></script>
<script src="<?php base_url("js/admin2.js")?>"></script>
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
                <a class="navbar-brand" href="admin_home">ATDragons Admin</a>
                <div id="head">
                <h2 style="color: #686868">Xin chào, <?php echo ($_SESSION["username"]) ?></h2>
            <a href="process/admin?do=logout" style="color: blue">Đăng xuất</a>
                </div>
            </div>                           
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">                     
                        <li>
                            <a href="admin_list"><i class="fa fa-user fa-fw"></i> Quản lý Admin <span class="fa arrow"></span></a> 
        
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="admin_list"> Danh Sách Admin</a>
                                </li>
                                <li>
                                    <a href="admin_addnew">Thêm Mới Admin</a>
                                </li>                            
                            </ul>
                        </li>
                         <li>
                              <a href="#"><i class="fa fa fa-list-alt fa fa-fw"></i>Đơn Hàng</a>
                          </li> 
                        <li>
                            <a href="contact_list"><i class="fa fa-phone fa-fw"></i> Liên Hệ<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="contact_list">Danh Sách Liên Hệ</a>
                                </li>
                                <li>
                                    <a href="contact_addnew">Thêm Mới Liên Hệ</a>
                                </li>
                            </ul>                        
                        </li> 
                        
                        <li>
                            <a href="food_list"><i class="fa fa-sitemap fa-fw"></i>Thực Đơn<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="food_list">Danh Sách Món Ăn</a>
                                </li>
                                <li>
                                    <a href="food_addnew">Thêm Mới Món Ăn</a>
                                </li>
                                <li>
                                    <a href="food_search">Tìm Kiếm Món Ăn</a>
                                </li>                             
                            </ul>
                        </li>
  
                         <li>
                            <a href="restaurant_list"><i class="fa fa-home fa-fw"></i>Thông Tin Nhà Hàng<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="restaurant_list">Danh Sách Nhà Hàng</a>
                                </li>
                                <li>
                                    <a href="restaurant_addnew">Thêm Mới Nhà Hàng</a>
                                </li>                                                     
                            </ul>
                        </li>
 
                         <li>
                            <a href="typefood_list"><i class="fa fa-list fa-fw"></i>Kiểu đồ ăn<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="typefood_list">Danh sách kiểu đồ ăn</a>
                                </li>
                                <li>
                                    <a href="typefood_addnew">Thêm mới kiểu đồ ăn</a>
                                </li>                                                         
                            </ul>
                        </li>
                      
                         <li>
                            <a href="typepay_list"><i class="fa fa-money fa-fw"></i>Kiểu Thanh Toán<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="typepay_list">Danh Sách Kiểu Thanh Toán</a>
                                </li>
                                <li>
                                    <a href="typepay_addnew">Thêm Mới Kiểu Thanh Toán</a>
                                </li>                                                           
                            </ul>
                        </li>
                          <li>
                              <a href="feedback_list"><i class="fa fa-users fa-fw"></i>Phản Hồi Khách Hàng</a>
                          </li> 
                    </ul>
                </div>             
            </div>           
        </nav>
        <div id="page-wrapper"> 