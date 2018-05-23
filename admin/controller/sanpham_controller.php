<?php 
	class sanpham_controller {
		function themsanpham_controller_function($id) {
			require_once "model/sanpham_model.php";
			$get = new sanpham_model;
			$get->themsanpham_model_function($id);

			header("Location: index.php?action=sanpham_view");
		}

		function laysanpham_controller_function() {
			require_once "model/sanpham_model.php";
		 	$get = new sanpham_model;
			$result = $get->laysanpham_model_function();

			return $result;
		}

		function xoasanpham_controller_function($id) {
			require_once "model/sanpham_model.php";
			$get = new sanpham_model;
			$get->xoasanpham_model_function($id);

			header("Location: index.php?action=sanpham_view");
		}
	}
?>