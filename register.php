<?php
require_once 'inc_header.php';
?>
    <!--form-->
    
    <div class="container">
    <div class="row">
        <form action="user/user.php?do=add_new" method="post" >
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Thông tin bắt buộc</strong></div>
                <div class="form-group">
                    <label for="InputName" class="control-label">Tên của bạn</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="fullname" id="InputName" placeholder="Tên của bạn" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail" class="control-label">Nhập Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmailFirst" name="email" placeholder="sample@mail.com" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputPassword" class="control-label">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="InputPasswordFirst" name="password" placeholder="Password" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                    <div class="form-group">
                        <label for="InputAddress" class="control-label">Địa chỉ</label>
                        <div class="input-group">
                            <input type="text" name="address" class="form-control" id="InputAddress" placeholder="Địa chỉ" required> 
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>    
                    <div class="form-group">
                        <label for="InputPhoneNumber" class="control-label">Số điện thoại</label>
                        <div class="input-group">
                            <input type="number" name="phone" class="form-control" id="InputPhoneNumber" placeholder="Số điện thoại" required> 
                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                        </div>
                    </div>
                <div class="btn-group" role="group" aria-label="...">
                    <input type="submit" name="submit" class="btn btn-success btn-block " value="ĐĂNG KÍ" />
                </div>
            </div>
        </form>
    </div>
    </div>
    <br />
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
						<h4>Bạn đã có tài khoản?</h4>
						<p>Vậy còn chờ gì nữa hãy đăng nhập và đặt món của chúng tôi ngay hôm nay</p>
                                                <a href="login.php" class="btn btn-info" role="button">Đăng nhập</a>
						</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
    <!--end form-->
    
<?php
require_once 'inc_footer.php';
?>