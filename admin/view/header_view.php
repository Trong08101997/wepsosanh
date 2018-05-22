<?php 
    session_start();
    if (!isset($_SESSION['login'])) {
        header("Location: index.php");
    }
 ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="view/css/header_view.css">
</head>
<body>
	
	<div class="menu_header">
		<ul>
            <li><a id="categorys" href="?action=sanpham_view">Sản Phẩm</a></li>
            <li id="logout_near"><a id="categorys" href="?action=taikhoan_view">Tài Khoản</a></li>
            <li id="logout">
                <span>
                    <?= $_SESSION['login']?>,
                </span>
                <a href="?action=dangxuat">Đăng Xuất</a>
            </li>
        </ul>
    </div>

</body>
</html>