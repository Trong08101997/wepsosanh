<!DOCTYPE html>
<html>
<head>
	<title>Sửa giá nhiều sản phẩm</title>
	<link rel="stylesheet" type="text/css" href="view/css/themsanpham_view.css">
    <script src="view/js/jquery-3.3.1.min.js"></script>
    <script language="JavaScript" src="view/js/themtaikhoan.js"></script>
</head>
<body>
    <?= require_once "header_view.php" ?>
	<div class="container">
        <div class="container01">
            <div id="quanly">
                Sửa giá nhiều phẩm theo hãng
            </div>
            <form action="?action=suagia_nhieu_sanpham_controller_function" method="post" enctype="multipart/form-data">
				
				<b>Tên các hãng:</b>
                <select name="hang">
                    <option value="samsung">samsung</option>
                    <option value="iphone">iphone</option>
                    <option value="sony">sony</option>
                    <option value="oppo">oppo</option>
                    <option value="xiaomi">xiaomi</option>
                    <option value="tất cả">tất cả</option>
                    
                </select><br/>
                
				<input type="text" name="phan_tram" placeholder="Giá sản phẩm cần tăng (vd 30%)"><br>
				<input type="submit" value="Sửa" id="sua_nhieu_sp">

            </form>
        </div>
        <?php include_once '../view/footter.php'; ?>
	</div>
</body>
</html>