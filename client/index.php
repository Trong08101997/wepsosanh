<?php 
	if(isset($_GET['action'])) {
		$action = $_GET['action'];
	
		if($action == "sanpham_controller_like") {
			require_once "controller/sanpham_controller_like.php";
		
		} elseif($action == "sosanh_view") {
			require_once "view/sosanh_view.php";
		
		} elseif($action == "sanpham_controller_suggest") {
			require_once "view/sanpham_controller_suggest.php";

		}

	} else {
		require_once "view/trangchu_view.php";
	}

 ?>