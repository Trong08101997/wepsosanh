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
            <form action="?action=themtaikhoan_controller" method="post">
                <b>Tên tài khoản</b><br/>
                <input class="input" type="text" required="required" name="username"><br>
                <b>Mật khẩu</b><br/>
                <input class="input" id="password" type="password" required="required" name="password"><br/>
                <b>Nhập lại mật khẩu</b><br/>
                <input class="input" id="retype_password" type="password" required="required" name="retype_password"><br>
                <br>
                <div class="check_login">
                <?php 
                    if (isset($_SESSION['add_error'])) {
                        echo "(*) " . $_SESSION['add_error'];
                        unset($_SESSION['add_error']);
                    }
                 ?>    
                </div>
                <input disabled id="them" type="submit" name="submit" value="Thêm">
            </form>
        </div>
        <?php include_once '../view/footter.php'; ?>
	</div>

</body>
</html>