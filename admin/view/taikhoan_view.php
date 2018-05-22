<!DOCTYPE html>
<html>
<head>
	<title>Tài Khoản</title>
    <link rel="stylesheet" type="text/css" href="view/css/taikhoan_view.css">
    <script src="view/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="view/js/script.js"></script>
    </head>
<body>
	<?= require_once "header_view.php" ?>
	<div class="container">
        
        <div class="container01">
            <div id="quanly">
                Quản Lý Tài Khoản
            </div>
            <!-- <button id="add_user"></button> -->
            <div id="add_user">
                Thêm
            </div>
            <!-- Lấy dữ liệu tài khoản từ DB -->
            <?php
                require_once "controller/taikhoan_controller.php";
                $taikhoanController = new taikhoan_controller;
                $result = $taikhoanController->laytaikhoan_controller_function();
            ?>

            <table class="show_users_table" cellspacing="0" cellpadding="0" >
                <tr class="header_table">
                    <th class="stt">STT</th>
                    <th id="taikhoan">Tài Khoản</th>
                    <th id="matkhau">Mật Khẩu</th>
                    <th class="thaotac">Thao Tác</th>
                </tr>

                <?php
                    $d = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<tr>';
                            echo '<td class="stt">' . $d . '</td>';
                            echo '<td>' . $row['username_users'] . '</td>';
                            echo '<td>' . $row['password_users'] . '</td>';
                            echo '<td class="thaotac"><a href="?action=xoa_user&id=' . $row['id_users'] . '">xoa</a></td>';
                        echo '</tr>';
                        $d++;
                    }
                ?>

            </table>
        </div>
	</div>
</body>
</html>
