<?php

    if (isset($_GET['action'])) {
        
        $action = $_GET['action'];

        if ($action == 'form_login') {
            require_once 'controller/kiemtra_dangnhap_controller.php';

        } elseif($action == 'sanpham_view') {
            require_once 'view/sanpham_view.php';

        } elseif ($action == 'themsanpham_view') {
            require_once 'view/themsanpham_view.php';

        } elseif ($action == 'dangxuat'){
            require_once 'controller/dangxuat_controller.php';

        } elseif ($action == 'taikhoan_controller') {
            $taikhoan->themtaikhoan_controller_function();

        } elseif ($action == 'taikhoan_view') {
            require_once 'view/taikhoan_view.php';

        } elseif ($action == 'themtaikhoan_view') {
            require_once 'view/themtaikhoan_view.php';
        
        } elseif ($action == 'xoa_user') {
            require_once 'controller/taikhoan_controller.php';
            $taikhoan = new taikhoan_controller;
            $id = $_GET['id'];
            $taikhoan->xoataikhoan_controller_function($id);

        }

    } else {
        require_once "view/dangnhap_view.php";
        // require_once "view/themtaikhoan_view.php";
    }
?>