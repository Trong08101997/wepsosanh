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
            <form action="?action=sua_product_controller" method="post" enctype="multipart/form-data">
				
				<input type="hidden" name="id" value="<?= $id ?>">
				<b>Tên sản phẩm:</b><?php echo $ten; ?><br/>
				<input type="text" name="sp_gia" placeholder="Giá sản phẩm"><br>
				<input type="submit" value="Sửa">

            </form>
        </div>
	</div>
</body>
</html>