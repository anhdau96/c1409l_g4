<?php
require_once '../inc_all.php';
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css") rel="stylesheet">
 <link href="css/admin_login.css") rel="stylesheet" type="text/css" media="all" />
<title>Admin Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
	<form role="form" action="process/admin?do=do_login" method="post">
		<fieldset>
                    <div class="form-group">
                        <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                                <?php
				if (get("error") == 1) {
					echo "Đăng nhập không thành công";
				} else  if(get("error") == 2) {
					echo "Bạn phải đăng nhập mới vào được";
				} else  if(get("error") == 3) {
					echo "Bạn đã ra khỏi hệ thống";
				}
				?>
			                             
                </fieldset>
	</form>
                         </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/jquery-2.1.1.min"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/metisMenu.min.js"></script>
    <script src="../js/admin2.js"></script>
</body>
</html>


