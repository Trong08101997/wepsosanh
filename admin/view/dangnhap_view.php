<!DOCTYPE html>
<html>
<head>
	<title>Đăng Nhập</title>
	<link rel="stylesheet" type="text/css" href="view/css/login.css">
</head>
<body>

	<div class="login_container">
		<h2>Quản trị hệ thống so sánh các thiết bị công nghệ</h2>
		<div class="form_login">
			<form action="?action=form_login" method="post">
				<input type="text" name="username" placeholder="Tài Khoản"><br>
				<input type="password" name="password" placeholder="Mật Khẩu">
				<div class="check_login">
		        <?php 
		            session_start();
		            if (isset($_SESSION['error'])) {
		                echo "(*) " . $_SESSION['error'];
		                session_destroy(); 
		            }
		         ?>    
		        </div>
				<input id="dang_nhap" type="submit" name="submit" value="Đăng Nhập">
			</form>

		</div>
	</div>
</body>
</html>