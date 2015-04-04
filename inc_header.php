<?php
require_once 'include/config.php';
require_once 'include/functions.php';
require_once 'include/process.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>ATDragons restaurant</title>
<meta charset="UTF-8">
<link href="admin/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-2.1.1.min.js"></script>
<!-- Custom Theme files -->
<link href="admin/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Animation-->
<script src="js/user js/wow.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="admin/css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
<script type="text/javascript" src="js/user js/move-top.js"></script>
<script type="text/javascript" src="js/user js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('php,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
</head>
<body>
    <!-- header-section-starts -->
	<div class="header">
		<div class="container-fluid"  style="background-color: #262626">
                    <div class="top-header">
				<div class="logo">
                                    <a href="home.php"><img src="imgs/logo.png" class="img-responsive" alt="" /></a>
				</div>                                
				<div class="queries">
                                    <p><span> Call us: 1900-1280-6969 </span><label style="color: greenyellow">(8AM to 11PM)</label></p>
				</div>
                        <div><p style="color: red;font-family: Monotype Corsiva;font-size: 72px;text-align: center">ATDRAGON RESTAURANT</p></div>
				<div class="clearfix"></div>
			</div>
		</div>
			<div class="menu-bar">
			<div class="container">
				<div class="top-menu">
					<ul>
                                            <li><a href="index.php">Trang chủ</a></li>|
						<li><a href="menu.php">Thực Đơn</a></li>|
                                                <li><a href="about.php">Giới thiệu</a></li>|
						<li><a href="contact.php">Liên Hệ</a></li>|
                                                <li><a href="search.php">Tìm kiếm</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="login-section">
					<ul>
                                            <?php
                                                if (isset($_SESSION["fullname"])) {
                                            ?>
                                                <li><a href="">Xin Chào, <?php echo $_SESSION["fullname"] ?></a>  </li> |
                                                <li><a href="user/user.php?do=logout">Đăng xuất</a>  </li> |
                                            <?php
                                                }
                                                else{
                                            ?>    
						<li><a href="login.php">Đăng nhập</a>  </li> |
						<li><a href="register.php">Đăng kí</a> </li> |
                                            <?php
                                                }
                                            ?>
						<li><a href="cart_view.php"><span class="glyphicon glyphicon-shopping-cart"></span>Giỏ Hàng</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
    </div>	
	<!-- header-section-ends -->