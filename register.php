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
    <!--end form-->
    
<?php
require_once 'inc_footer.php';
?>