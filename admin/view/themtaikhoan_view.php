<!DOCTYPE html>
<html>
<head>
	<title>Thêm tài khoản</title>
	<link rel="stylesheet" type="text/css" href="view/css/themtaikhoan_view.css">
</head>
<body>
	<?= require_once "header_view.php" ?>
	<div class="container">
        <div class="container01">
            <div id="quanly">
                Thêm một tài khoản mới
            </div>
            <form action="?action=taikhoan_controller" method="post">
                <input class="input" type="text" name="username" placeholder="Tài Khoản"><br>
                <input class="input" type="password" name="password" placeholder="Nhập Lại Mật Khẩu"><br>
                <input class="input" type="password" name="password" placeholder="Mật Khẩu">
                <br>
                <input id="them" type="submit" name="submit" value="Thêm">
            </form>
        </div>
	</div>
</body>
</html>