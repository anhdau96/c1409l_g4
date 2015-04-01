<?php
require_once 'inc_header.php';
?>
	<!-- content-section-starts -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

        <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="imgs/slide1.jpg" alt="0">
            <div class="carousel-caption">
                   <h3>WELCOME TO ATDRAGON RESTAURANT</h3>
                    <p>Nơi đem đến sự thỏa mãn cho bạn</p>
            </div>
            </div>

            <div class="item">
                <img src="imgs/slide2.jpg" alt="1">
             <div class="carousel-caption">
                <h3>Ở đây chúng tôi luôn đặt chất lượng lên hàng đầu</h3>
                <p>Bạn luôn có thể tin tưởng ở chúng tôi mà không phải băn khoăn về chất lượng dịch vụ</p>
            </div>
            </div>

            <div class="item">
            <img src="imgs/slide3.jpg" alt="2">
            <div class="carousel-caption">
             <h3>Khách hàng là thượng đế</h3>
             <p>Bất kể bạn là ai!</p>
            </div>
             </div>

            <div class="item">
            <img src="imgs/slide4.jpg" alt="3">
            <div class="carousel-caption">
                <h3>Món ăn tuyệt ngon đặc biệt là pizza</h3>
             <p>Tất cả các món ăn của chúng tôi đều được làm bởi các đầu bếp hàng đầu </p>
            </div>
            </div>
            </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <div class="contact-section" id="contact">
			<div class="container">
				<div class="contact-section-grids">
					<div class="col-md-3 contact-section-grid wow fadeInLeft" data-wow-delay="0.4s">
						<h4>Chi nhánh 1</h4>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Giới thiệu</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Liên hệ</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Chính sách</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Điều khoản</a></li>
						</ul>
					</div>
					<div class="col-md-3 contact-section-grid wow fadeInLeft" data-wow-delay="0.4s">
						<h4>Chi nhánh 2</h4>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Giới thiệu</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Liên hệ</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Chính sách</a></li>
						</ul>
						<ul>
							<li><i class="point"></i></li>
							<li class="data"><a href="#">Điều khoản</a></li>
						</ul>
					</div>
					<div class="col-md-3 contact-section-grid wow fadeInRight" data-wow-delay="0.4s">
						<h4>Theo dõi trên...</h4>
						<ul>
							<li><i class="fb"></i></li>
							<li class="data"> <a href="https://www.facebook.com/">Facebook</a></li>
						</ul>
						<ul>
							<li><i class="tw"></i></li>
							<li class="data"> <a href="https://www.twitter.com/">Twitter</a></li>
						</ul>
						<ul>
							<li><i class="in"></i></li>
							<li class="data"><a href="https://Zing.vn">Zing</a></li>
						</ul>
						<ul>
							<li><i class="gp"></i></li>
							<li class="data"><a href="https://plus.google.com">Google Plus</a></li>
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
<?php
require_once 'inc_footer.php';
?>