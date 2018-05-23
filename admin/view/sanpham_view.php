<!DOCTYPE html>
<html>
<head>
	<title>Quản lý sản phẩm</title>
    <link rel="stylesheet" type="text/css" href="view/css/sanpham_view.css">
    <script src="view/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="view/js/script.js"></script>
</head>
<body>
	<?= require_once "header_view.php" ?>
	<div class="container">
		<div class="container01">
			<div id="quanly">
				Quản Lý Sản Phẩm
			</div>

            <div id="add_product">
                Thêm Sản Phẩm
            </div>

            <?php
                require_once "controller/sanpham_controller.php";
                $sanphamController = new sanpham_controller;
                $result = $sanphamController->laysanpham_controller_function();
            ?>

            <table class="show_products_table" cellspacing="0" cellpadding="0" >
                <tr class="header_table">
                    <th class="stt">STT</th>
                    <th id="ten">Tên</th>
                    <th id="anh">Ảnh</th>
                    <th id="hang">Hãng</th>
                    <th id="gia">Giá</th>
                    <th id="cauhinh">Cấu hình</th>
                    <th class="thaotac">Thao tác</th>
                </tr>

                <?php
                    $d = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<tr>';
                            $linkanh = $row['sp_anh_dai_dien'];
                            $tien = number_format($row['sp_gia'],0,'.',' ') . " VNĐ";
                            echo '<td class="stt">' . $d . '</td>';
                            echo '<td>' . $row['sp_ten'] . '</td>';
                            echo '<td class="img">' . '<img ' . 'src="' . "../images/" . $linkanh . '" /></td>';
                            echo '<td>' . $row['sp_loai_san_pham'] . '</td>';
                            echo '<td>' . $tien . '</td>';
                            echo '<td class="cauhinh">' . $row['sp_cau_hinh'] . '</td>';
                            echo '<td class="thaotac">
                                    <a href="?action=xoa_product&id=' . $row['sp_id'] . '">xóa</a><br><br>
                                    <a href="?action=sua_product&id=' . $row['sp_id'] . '">sửa</a>
                                </td>';
                        echo '</tr>';
                        $d++;
                    }
                ?>
            </table>
		</div>
	</div>
</body>
</html>