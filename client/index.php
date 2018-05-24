<?php 
	if(isset($_GET['action'])) {
		$action = $_GET['action'];
	
		if($action == "sanpham_controller_like"){
			require_once "controller/sanpham_controller_like.php";
		}

	} else {
		require_once "view/trangchu_view.php";
	}

 ?>