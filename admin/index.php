<?php
    if (isset($_GET['action'])) {
        require_once 'controller/taikhoan_controller.php';
        $taikhoan = new taikhoan_controller;

        require_once 'controller/sanpham_controller.php';
        $sanpham = new sanpham_controller;

        $action = $_GET['action'];

        if ($action == 'form_login') {
            require_once 'controller/kiemtra_dangnhap_controller.php';

        } elseif($action == 'sanpham_view') {
            require_once 'view/sanpham_view.php';

        } elseif($action == 'themsanpham_view') {
            require_once 'view/themsanpham_view.php';

        } elseif($action == 'themsanpham_controller') {
            $sanpham->themsanpham_controller_function();

        } elseif($action == 'sua_product') {
            $id = $_GET['id'];
            $ten = $_GET['ten'];
            require_once 'view/suasanpham_view.php';

        }elseif ($action == 'sua_product_controller') {
            $id = $_POST['id'];
            $sanpham->capnhatsanpham_controller_function($id);

        }elseif ($action == 'suagia_nhieu_sanpham_view') {
            require_once 'view/suagia_nhieu_sanpham_view.php';

        }elseif ($action == 'suagia_nhieu_sanpham_controller_function') {
            $ten_hang = $_POST['hang'];
            $phan_tram = $_POST['phan_tram'];
            $sanpham->suagia_nhieu_sanpham_controller_function($ten_hang, $phan_tram);

        } elseif($action == 'xoa_product') { 
            $id = $_GET['id'];
            $sanpham->xoasanpham_controller_function($id);

        } elseif($action == 'dangxuat'){
            require_once 'controller/dangxuat_controller.php';

        } elseif($action == 'themtaikhoan_controller') {
            $taikhoan->themtaikhoan_controller_function();

        } elseif($action == 'taikhoan_view') {
            require_once 'view/taikhoan_view.php';

        } elseif($action == 'themtaikhoan_view') {
            require_once 'view/themtaikhoan_view.php';
        
        } elseif($action == 'xoa_user') {
            $id = $_GET['id'];
            $taikhoan->xoataikhoan_controller_function($id);

        }
    } else {
        require_once "view/dangnhap_view.php";
    }
?>