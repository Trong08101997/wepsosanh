<!DOCTYPE html>
<html>
<head>
	<title>Thêm tài khoản</title>
	<link rel="stylesheet" type="text/css" href="view/css/themtaikhoan_view.css">
    <script src="view/js/jquery-3.3.1.min.js"></script>
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
                <input class="input" type="text" required="required" name="username"><br>
                <b>Mật khẩu</b><br/>
                <input class="input" id="password" type="password" required="required" name="password"><br/>
                <b>Nhập lại mật khẩu</b><br/>
                <input class="input" id="retype_password" type="password" required="required" name="retype_password"><br>
                <br>
                <input disabled id="them" type="submit" name="submit" value="Thêm">
            </form>
        </div>
	</div>
</body>
</html>