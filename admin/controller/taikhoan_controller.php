<?php
	class taikhoan_controller {
 
		function themtaikhoan_controller_function() {
			$username = $_POST['username'];
			$password = $_POST['password'];
			require_once "model/taikhoan_model.php";
			$get = new taikhoan_model;
			$get->themtaikhoan_model_function($username, $password);

			header("Location: index.php?action=taikhoan_view");
		}

		function laytaikhoan_controller_function() {
			require_once "model/taikhoan_model.php";
			$get = new taikhoan_model;
			$result = $get->laytaikhoan_model_function();
			
			return $result;
		}

		function xoataikhoan_controller_function($id) {
			require_once "model/taikhoan_model.php";
			$get = new taikhoan_model;
			$get->xoataikhoan_model_function($id);

			header("Location: index.php?action=taikhoan_view");
		}
	}
?>