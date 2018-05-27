<?php  
	class sanpham_controller{

		function laysanpham_controller_function($str) {
			require_once "model/sanpham_model.php";
			$model = new sanpham_model;
			$result = $model->laysanpham_model_function_name($str);

			return $result;
		}
	}
?>	