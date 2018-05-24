<!DOCTYPE html>
<html>
<head>
	<title>Sửa sản phẩm</title>
	<link rel="stylesheet" type="text/css" href="view/css/themsanpham_view.css">
    <script src="view/js/jquery-3.3.1.min.js"></script>
    <script language="JavaScript" src="view/js/themtaikhoan.js"></script>
</head>
<body>
    <?= require_once "header_view.php" ?>
	<div class="container">
        <div class="container01">
            <div id="quanly">
                Sửa sản phẩm
            </div>
            <form action="?action=themsanpham_controller" method="post" enctype="multipart/form-data">
				<input type="text" name="sp_ten" placeholder="Tên sản phẩm"><br>

				<input type="text" name="sp_loai_san_pham" placeholder="Loại sản phẩm"><br>
				<h3>Cấu hình:</h3><input type="text" name="sp_cau_hinh" placeholder="Nhập link sản phẩm (fptshop.com.vn)"><br>
				<h3>Cấu hình chi tiết:</h3><input type="text" name="sp_cau_hinh_chi_tiet" placeholder="Nhập link sản phẩm (cellphones.com.vn)"><br>
				<input type="text" name="sp_gia" placeholder="Giá sản phẩm"><br>
				<input type="submit" value="Sửa">
            </form>
        </div>
	</div>
</body>
</html>