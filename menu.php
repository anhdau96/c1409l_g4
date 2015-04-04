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
                <h1 style="font-family: Monotype Corsiva;color: red">MENU</h1>      
                <p style="color: green; font-family: Amazone ;font-size: 30px"">Thực đơn có thể được thay đổi mỗi ngày</p>
                
    <ul class="nav nav-tabs">
        <li class="<?php if ($choose=='appetizer' || $choose == '') echo "active" ?>"><a href="menu.php?page=1&choose=appetizer" style="font-family: Amazone ;font-size: 30px">Khai vị</a></li>
        <li class="<?php if ($choose== 'main') echo "active" ?>"><a href="menu.php?page=1&choose=main" style="font-family: Amazone ;font-size: 30px">Món chính</a></li>
        <li class="<?php if ($choose== 'drink') echo "active" ?>"><a href="menu.php?page=1&choose=drink" style="font-family: Amazone ;font-size: 30px">Đồ uống</a></li>
  </ul>
    <?php
for ($i=1;$i<=$total_page; $i++) {
  echo "<a href='?page=$i&choose=$choose'>$i</a> | ";   
}
?>
    <div class="row" style="color: blueviolet">
    <div class="col-md-2">
      <p style="font-family: Amazone ;font-size: 25px">Loại món ăn</p>
    </div>
    <div class="col-md-2"> 
      <p style="font-family: Amazone ;font-size: 25px">Tên món ăn</p>
    </div>
    <div class="col-md-4"> 
      <p style="font-family: Amazone ;font-size: 25px">Mô tả</p>
    </div>
    <div class="col-md-2"> 
        <p style="font-family: Amazone ;font-size: 25px">Giá bán</p>
    </div>
     <div class="col-md-2"> 
      <p style="font-family: Amazone ;font-size: 25px">Giỏ hàng</p>
    </div>
  </div>
  <hr />
<?php 
    while ($row = mysqli_fetch_assoc($result)){
?>
  <div class="row" style="color: palevioletred">
    <div class="col-md-2">
      <p style="font-family: Amazone;font-size: 27px"><?php echo $row["TypeName"]?></p>
    </div>
    <div class="col-md-2"> 
      <p style="font-family: Amazone;font-size: 27px"><?php echo $row["FoodName"]?></p>
    </div>
    <div class="col-md-3"> 
      <p style="font-family: Amazone;font-size: 27px"><?php echo $row["FoodDescription"]?></p>
    </div>
    <div class="col-md-2"> 
      <p style="font-family: Amazone;font-size: 27px"><?php echo $row["FoodPrice"]?> VNĐ</p>
    </div>
    <div class="col-md-3"> 
      <p><a href="user/cart.php?do=add&choose=<?php echo $choose?>&page=<?php echo $n?>&foodid=<?php echo $row["FoodId"]?>" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-shopping-cart"></span>Cho vào giỏ hàng
        </a></p>
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
						<h4>Đăng ký tài khoản ngay</h4>
						<p>Để nhận thông báo và khuyến mãi mới nhất từ chúng tôi</p>
						<a href="register.php" class="btn btn-info" role="button">Đăng kí</a>
						</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	<!-- content-section-ends -->
<?php
require_once 'inc_footer.php';
?>