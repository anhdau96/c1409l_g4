<?php
require_once 'inc_header.php';

$choose= get("choose");

$n = get("page");
$n = ($n=="" ?  1  :  $n);
if ($choose=='appetizer' || $choose == '')
{
    $result = execute_query("SELECT * FROM Food F JOIN TypeFood TF ON F.TypeId=TF.TypeId WHERE F.TypeId=1 OR F.TypeId=2 OR F.TypeId=3 ORDER BY TypeName " . createLimitForPaging($n));
    $rs_count = execute_query("SELECT COUNT(*) AS cnt FROM Food F JOIN TypeFood TF ON F.TypeId=TF.TypeId WHERE F.TypeId=1 OR F.TypeId=2 OR F.TypeId=3");
}
if ($choose=='main')
{
    $result = execute_query("SELECT * FROM Food F JOIN TypeFood TF ON F.TypeId=TF.TypeId WHERE F.TypeId=4 OR F.TypeId=5 OR F.TypeId=6 OR F.TypeId=7  ORDER BY TypeName " . createLimitForPaging($n));
    $rs_count = execute_query("SELECT COUNT(*) AS cnt FROM Food F JOIN TypeFood TF ON F.TypeId=TF.TypeId WHERE F.TypeId=4 OR F.TypeId=5 OR F.TypeId=6 OR F.TypeId=7");
}
if ($choose=='drink')
{
    $result = execute_query("SELECT * FROM Food F JOIN TypeFood TF ON F.TypeId=TF.TypeId WHERE F.TypeId=8 OR F.TypeId=9 OR F.TypeId=10 OR F.TypeId=11 OR F.TypeId=12 OR F.TypeId=13 ORDER BY TypeName " . createLimitForPaging($n));
    $rs_count = execute_query("SELECT COUNT(*) AS cnt FROM Food F JOIN TypeFood TF ON F.TypeId=TF.TypeId WHERE F.TypeId=8 OR F.TypeId=9 OR F.TypeId=10 OR F.TypeId=11 OR F.TypeId=12 OR F.TypeId=13");
}


$count_row = mysqli_fetch_assoc($rs_count);
$total = $count_row["cnt"];

$total_page = ceil($total / PAGE_ROW);
?>
	<!-- content-section-starts -->
        <div class="container">
            <div class="jumbotron">
                <h1>Thực đơn của chúng tôi</h1>      
                <p>Thực đơn có thể đc thay đổi mỗi ngày</p>
                
    <ul class="nav nav-tabs">
    <li class="<?php if ($choose=='appetizer' || $choose == '') echo "active" ?>"><a href="menu.php?page=1&choose=appetizer">Khai vị</a></li>
    <li class="<?php if ($choose== 'main') echo "active" ?>"><a href="menu.php?page=1&choose=main">Món chính</a></li>
    <li class="<?php if ($choose== 'drink') echo "active" ?>"><a href="menu.php?page=1&choose=drink">Đồ uống</a></li>
  </ul>
    <?php
for ($i=1;$i<=$total_page; $i++) {
  echo "<a href='?page=$i&choose=$choose'>$i</a> | ";   
}
?>
  <div class="row">
    <div class="col-md-3">
      <p>Tên món ăn</p>
    </div>
    <div class="col-md-3"> 
      <p>Mô tả</p>
    </div>
    <div class="col-md-3"> 
      <p>Hình ảnh</p>
    </div>
    <div class="col-md-3"> 
      <p>Giá bán</p>
    </div>
  </div>
  <hr />
<?php 
    while ($row = mysqli_fetch_assoc($result)){
?>
  <div class="row">
    <div class="col-md-3">
      <p><?php echo $row["TypeName"]?></p>
    </div>
    <div class="col-md-3"> 
      <p><?php echo $row["FoodName"]?></p>
    </div>
    <div class="col-md-3"> 
      <p><?php echo $row["FoodDescription"]?></p>
    </div>
    <div class="col-md-3"> 
      <p><?php echo $row["FoodPrice"]?></p>
    </div>
  </div>
  <hr />
<?php
    }
?>
            </div>
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