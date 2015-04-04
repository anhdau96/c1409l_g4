<?php
require_once 'inc_header.php';
?>
	<div class="contact-section-page">
		<div class="contact-head">
		    <div class="container">
				<h3>Liên hệ</h3>
				<p>Trang chủ/Liên hệ</p>
			</div>
		</div>
		<div class="contact_top">
			 		<div class="container">
			 			<div class="col-md-6 contact_left wow fadeInRight" data-wow-delay="0.4s">
			 				<h4>Đơn Liên hệ</h4>
			 				<p>ATDragon Restaurant</p>
                                                        <form action="feedback.php?do=add_new" method="post">
								 <div class="form_details">
                                                                        <input type="text" class="text" name="feedname" value="Tên"  onfocus="this.value = '';" onblur="if (this.value === '') {this.value = 'Name';}">
									 <input type="text" class="text" name="feedemail" value="Địa chỉ email" onfocus="this.value = '';" onblur="if (this.value === '') {this.value = 'Email Address';}">
									 <input type="text" class="text" name="feedtitle" value="Chủ đề" onfocus="this.value = '';" onblur="if (this.value === '') {this.value = 'Chủ Đề';}">
                                                                         <textarea value="Nội dung" name="feedcontent" onfocus="this.value = '';" onblur="if (this.value === '') {this.value = 'Nội dung';}">Nội dung</textarea>
									 <div class="clearfix"> </div>
									 <div class="sub-button wow swing animated" data-wow-delay= "0.4s">
									 	<input name="submit" type="submit" value="Gửi Tin nhắn">
									 </div>
						          </div>
						       </form>
					        </div>
					        <div class="col-md-6 company-right wow fadeInLeft" data-wow-delay="0.4s">
					        	<div class="contact-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.9278428411694!2d105.81856299999998!3d21.035573000000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x208a848932ac2109!2zSOG7hyB0aOG7kW5nIMSQw6BvIHThuqFvIEzhuq1wIHRyw6xuaCB2acOqbiBRdeG7kWMgdOG6vyBBcHJvdHJhaW4tQXB0ZWNo!5e0!3m2!1svi!2s!4v1427839609346" width="400" height="300" frameborder="0" style="border:0"></iframe>
		</div>
      
	  <div class="company-right">
					        	<div class="company_ad">
							     		<h3>Thông tin liên hệ</h3>
							     		<span>Phòng tư vấn</span>
			      						<address>
											 <p>email:<a href="mail-to: llzlokizll@gmail.com">llzlokizll@gmail.com</a></p>
											 <p>phone:  +03625593626</p>
									   		<p>67 Thụy khuê</p>
									   		<p>Tây Hồ,Hà Nội</p>
									 	 	
							   			</address>
							   		</div>
									</div>							
							 </div>
						</div>
					</div>

	</div>
<?php
require_once 'inc_footer.php';
?>