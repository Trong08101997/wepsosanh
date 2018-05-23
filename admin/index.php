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

        } elseif ($action == 'xoa_product') { 
            $id = $_GET['id'];
            $sanpham->xoasanpham_controller_function($id);

        } elseif ($action == 'dangxuat'){
            require_once 'controller/dangxuat_controller.php';

        } elseif ($action == 'taikhoan_controller') {
            $taikhoan->themtaikhoan_controller_function();

        } elseif ($action == 'taikhoan_view') {
            require_once 'view/taikhoan_view.php';

        } elseif ($action == 'themtaikhoan_view') {
            require_once 'view/themtaikhoan_view.php';
        
        } elseif ($action == 'xoa_user') {
            $id = $_GET['id'];
            $taikhoan->xoataikhoan_controller_function($id);

        }

    } else {
        require_once "view/dangnhap_view.php";
        // require_once "view/themtaikhoan_view.php";
    }
?>