<!DOCTYPE html>
<html>
<head>
<title>ATDragons restaurant</title>
<meta charset="UTF-8">
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="admin/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-2.1.1.min.js"></script>
<!-- Custom Theme files -->
<link href="admin/css/style.css" rel="stylesheet" type="text/css" media="all" />
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
<script src="js/user js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script src="js/user js/tms-0.4.1.js"></script>
<script src="../js/user js/jquery.easydropdown.js"></script>
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
						<li><a href="Order.php">Đặt Bàn</a></li>|
						<li><a href="contact.php">Liên Hệ</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="login-section">
					<ul>
						<li><a href="login.php">Đăng nhập</a>  </li> |
						<li><a href="register.php">Đăng kí</a> </li> |
						<li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>Giỏ Hàng</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
    </div>	
	<!-- header-section-ends -->
	<div class="order-section-page">
		<div class="ordering-form">
			<div class="container">
			<div class="order-form-head text-center wow bounceInLeft" data-wow-delay="0.4s">
						<h3>Đơn đặt bàn</h3>
						<p>Hãy đặt bàn cho chúng tôi ngay hôm nay</p>
					</div>
				<div class="col-md-6 order-form-grids">
					
					<div class="order-form-grid  wow fadeInLeft" data-wow-delay="0.4s">
						<h5>Thông tin đơn </h5>
								<span>Loại bàn</span>
								 <div class="dropdown-button">           			
            			<select class="dropdown">
            			<option value="0">Chọn</option>	
						<option value="1">Thường</option>
						<option value="2">Vip</option>
					  </select>
					</div>
		              <span>Địa điểm nhà hàng</span>
					   <div class="dropdown-button wow">           			
            			<select class="dropdown">
            			<option value="0">Nhà A phố B số 69</option>	
						<option value="1">Nhà X phố Y số 320</option>
					  </select> 
					</div>
					<span>Tên địa điểm</span>
								 <div class="dropdown-button">           			
            			<select class="dropdown">
            			<option value="0">Hà Nội</option>	
						<option value="1">Tp Hồ Chí Minh</option>						
					  </select>
					</div>				
					<input type="text" class="text" value="Time" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Time';}"><br>
					<div class="wow swing animated" data-wow-delay= "0.4s">
					<input type="button" value="Đặt ngay">
					</div>
					</div>
				</div>
				<div class="col-md-6 ordering-image wow bounceIn" data-wow-delay="0.4s">
					<img src="imgs/order.jpg" class="img-responsive" alt="" />
				</div>
			</div>
		</div>
	</div>
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