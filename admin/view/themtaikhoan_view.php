<!DOCTYPE html>
<html>
<head>
	<title>Thêm tài khoản</title>
	<link rel="stylesheet" type="text/css" href="view/css/themtaikhoan_view.css">
    <script language="JavaScript" src="view/js/themtaikhoan.js"></script>
</head>
<body>
	<?= require_once "header_view.php" ?>
	<div class="container">
        <div class="container01">
            <div id="quanly">
                Thêm một tài khoản mới
            </div>
            <form action="?action=taikhoan_controller" method="post">
                <b>Tên tài khoản</b><br/>
                <input class="input" type="text" name="username" placeholder="Tài Khoản"><br>
                <b>Mật khẩu</b><br/>
                <input class="input" type="password" name="password" placeholder="Mật Khẩu"><br/>
                <b>Nhập lại mật khẩu</b><br/>
                <input class="input" type="password" name="password" placeholder="Nhập Lại Mật Khẩu"><br>
                <br>
                <input id="them" type="submit" name="submit" value="Thêm">
            </form>
        </div>
	</div>
</body>
</html>