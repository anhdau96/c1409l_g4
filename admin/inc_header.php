<?php
require_once '../inc_all.php';
//require 'inc_checklogin.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin Home</title>
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
                <h2 style="color: #686868">Xin chÃ o, <?php echo ($_SESSION["username"]) ?></h2>
            <a href="process/admin.php?do=logout" style="color: blue">ÄÄƒng xuáº¥t</a>
                </div>
            </div>                           
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">                     
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Quáº£n LÃ½ Admin <span class="fa arrow"></span></a> 
        
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="admin_list"> Danh sách Admin</a>
                                </li>
                                <li>
                                    <a href="admin_addnew">Thêm mới Admin</a>
                                </li>
                                <li>
                                    <a href="admin_edit"> Cập nhật Admin</a>
                                </li>                               
                            </ul>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-phone fa-fw"></i> LiÃªn<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="contact_list">Danh SÃ¡ch LiÃªn Há»‡</a>
                                </li>
                                <li>
                                    <a href="contact_addnew">ThÃªm Má»›i LiÃªn Há»‡</a>
                                </li>
                                <li>
                                    <a href="contact_edit.php">Cáº­p Nháº­p LiÃªn Há»‡</a>
                                </li>
                            </ul>                        
                        </li> 
                        
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Thá»±c ÄÆ¡n<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="food_list">Danh SÃ¡ch MÃ³n Ä‚n</a>
                                </li>
                                <li>
                                    <a href="food_addnew">ThÃªm Má»›i MÃ³n Ä‚n</a>
                                </li>
                                 <li>
                                     <a href="food_edit">Chá»‰nh Sá»­a MÃ³n Ä‚n</a>
                                </li>
                                <li>
                                    <a href="food_search">TÃ¬m MÃ³n Ä‚n</a>
                                </li>                             
                            </ul>
                        </li>
  
                         <li>
                            <a href="#"><i class="fa fa-home fa-fw"></i> ThÃ´ng Tin NhÃ  HÃ ng<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="restaurant_list">Danh SÃ¡ch NhÃ  HÃ ng</a>
                                </li>
                                <li>
                                    <a href="restaurant_addnew">ThÃªm Má»›i NhÃ  HÃ ng</a>
                                </li>
                                 <li>
                                     <a href="restaurant_edit">Cáº­p Nháº­p NhÃ  HÃ ng</a>
                                </li>                                                           
                            </ul>
                        </li>
 
                         <li>
                            <a href="#"><i class="fa fa-list fa-fw"></i> Loáº¡i Thá»©c Ä‚n<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="typefood_list">Danh SÃ¡ch CÃ¡c Loáº¡i Thá»©c Ä‚n</a>
                                </li>
                                <li>
                                    <a href="typefood_addnew">ThÃªm Má»›i Loáº¡i Thá»©c Ä‚n</a>
                                </li>
                                 <li>
                                     <a href="typefood_edit">Cáº­p Nháº­p Loáº¡i Thá»©c Ä‚n</a>
                                </li>                                                           
                            </ul>
                        </li>
                      
                         <li>
                            <a href="#"><i class="fa fa-money fa-fw"></i> Thanh ToÃ¡n<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="typepay_list">CÃ¡c Kiá»ƒu Thanh ToÃ¡n</a>
                                </li>
                                <li>
                                    <a href="typepay_addnew">ThÃªm Má»›i Kiá»ƒu Thanh ToÃ¡n</a>
                                </li>
                                 <li>
                                     <a href="typepay_edit">Chá»‰nh Sá»­a CÃ¡c Kiá»ƒu Thanh ToÃ¡n</a>
                                </li>                                                           
                            </ul>
                        </li>
                          <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Pháº£n Há»“i KhÃ¡ch HÃ ng </a>
                          </li>
                        
                    </ul>
                </div>             
            </div>           
        </nav>
        <div id="page-wrapper">    