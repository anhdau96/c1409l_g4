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
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
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
                                                <li><a href="home.php">Trang chủ</a></li>|
						<li><a href="menu.php">Thực Đơn</a></li>|
                                                <li><a href="about.php">Giới thiệu</a></li>|
						<li><a href="contact.php">Liên Hệ</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="login-section">
					<ul>
						<li><a href="login.php">Đăng nhập</a>  </li> |
						<li><a href="register.php">Đăng kí</a> </li> |
						<li><a href="cart_view.php"><span class="glyphicon glyphicon-shopping-cart"></span>Giỏ Hàng</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
    </div>	
	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<div class="content">
	<div class="container">
		<div class="login-page">
			    <div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.php" title="Về Trang chủ">Trang chủ</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                       Đăng nhập
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.php">Trở lại trang trước</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   <div class="account_grid">
			   <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
			  	 <h3>Thành viên mới</h3>
				 <p>Đăng kí tài khoản với chúng tôi bạn sẽ có thêm nhiều quyền lợi mới</p>
				 <a class="acount-btn" href="register.html">Tạo tài khoản</a>
			   </div>
			   <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
			  	<h3>Đã có tài khoản?</h3>
				<p>Hãy nhập thông tin tài khoản của bạn</p>
                                <form action="user/user.php?do=do_login&cart=<?php echo get("cart")?>" method="post">
				  <div>
					<span>Địa chỉ Email<label>*</label></span>
					<input type="text" name="email"> 
				  </div>
				  <div>
					<span>Mật khẩu<label>*</label></span>
                                        <input type="password" name="password"> 
				  </div>
				  <a class="forgot" href="#">Quên mật khẩu</a>
				  <input type="submit" value="Đăng nhập">
			    </form>
			   </div>	
			   <div class="clearfix"> </div>
			 </div>
		   </div>
</div>
<div class="clearfix"></div>
<div class="contact-section" id="contact">
			<div class="container">
				<div class="contact-section-grids">
					<div class="col-md-3 contact-section-grid wow fadeInLeft" data-wow-delay="0.4s">
						<h4>Trụ sở chính</h4>
						<ul>
							<li><i class="point"></i></li>
                                                        <li class="data"><a href="about.php">Giới thiệu</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
                                                        <li class="data"><a href="contact.php">Liên hệ</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
                                                        <li class="data"><a href="privacy.php">Chính sách bảo mật</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
                                                        <li class="data"><a href="term.php">Điều khoản</a></li>
						</ul>
					</div>
					<div class="col-md-3 contact-section-grid wow fadeInLeft" data-wow-delay="0.4s">
						<h4>Chi nhánh</h4>
						<ul>
							<li><i class="point"></i></li>
                                                        <li class="data"><a href="about.php">Giới thiệu</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
                                                        <li class="data"><a href="contact.php">Liên hệ</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
                                                        <li class="data"><a href="privacy.php">Chính sách bảo mật</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
                                                        <li class="data"><a href="term.php">Điều khoản</a></li>
						</ul>
					</div>
					<div class="col-md-3 contact-section-grid wow fadeInRight" data-wow-delay="0.4s">
						<h4>Theo dõi trên...</h4>
						<ul>
							<li><i class="fb"></i></li>
                                                        <li class="data"> <a href="https://www.facebook.com/"><img src="imgs/facebook.png"/>Facebook</a></li>
						</ul>
						<ul>
							<li><i class="tw"></i></li>
                                                        <li class="data"> <a href="https://www.twitter.com/"><img src="imgs/twitter.png"/>Twitter</a></li>
						</ul>
						<ul>
							<li><i class="in"></i></li>
                                                        <li class="data"><a href="https://Zing.vn"><img src="imgs/zing.png"/>Zing</a></li>
						</ul>
						<ul>
							<li><i class="gp"></i></li>
                                                        <li class="data"><a href="https://plus.google.com"><img src="imgs/google-plus.png"/>Google Plus</a></li>
						</ul>
					</div>
					<div class="col-md-3 contact-section-grid nth-grid wow fadeInRight" data-wow-delay="0.4s">
						<h4>Đăng ký nhận tin</h4>
						<p>Để nhận thông báo và khuyến mãi mới nhất từ chúng tôi</p>
						<input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
						<input type="submit" value="submit">
						</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	<!-- content-section-ends -->
	<!-- footer-section-starts -->
	<div class="footer">
		<div class="container">
			<p class="wow fadeInLeft" data-wow-delay="0.4s">&copy; 2015  All rights  Reserved | Designed by &nbsp;<a href="http://C1409L-G4.com" target="target_blank">C1409L-G4</a></p>
		</div>
	</div>
	<!-- footer-section-ends -->
	  <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>