<?php 
	class sanpham_controller {
		function laysanpham_controller_function() {
			require_once "model/sanpham_model.php";
		 	$get = new sanpham_model;
			$result = $get->laysanpham_model_function();

			return $result;
		}
	}


?>