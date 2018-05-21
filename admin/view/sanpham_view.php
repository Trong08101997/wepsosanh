<!DOCTYPE html>
<html>
<head>
	<title>Quản lý sản phẩm</title>
    <link rel="stylesheet" type="text/css" href="view/css/sanpham_view.css">
</head>
<body>
	<?= require_once "header_view.php" ?>
	<div class="container">
		<div class="container01">
			<div id="quanly">
				Quản Lý Sản Phẩm
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
                            echo '<td class="stt">' . $d . '</td>';
                            echo '<td>' . $row['sp_ten'] . '</td>';
                            echo '<td>' . $row['sp_anh_dai_dien'] . '</td>';
                            echo '<td>' . $row['sp_loai_san_pham'] . '</td>';
                            echo '<td>' . $row['sp_gia'] . '</td>';
                            echo '<td class="cauhinh">' . $row['sp_cau_hinh'] . '</td>';
                            echo '<td class="thaotac">xoa</td>';
                        echo '</tr>';
                        $d++;
                    }
                ?>
            </table>
		</div>
	</div>
</body>
</html>