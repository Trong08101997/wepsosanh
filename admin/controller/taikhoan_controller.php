<?php
	class taikhoan_controller {
 
		/**
		 * Hàm thêm tài khoản vào DB
		 */
		function themtaikhoan_controller_function() {
			$username = $_POST['username'];
			$password = $_POST['password'];
			// $password = md5($_POST['password']);
		
			require_once "model/taikhoan_model.php";
			$user_ctl = new taikhoan_model;
			$user_ctl->themtaikhoan_model_function($username, $password);
			header("Location: view/themtaikhoan_view.php");
		}

		function laytaikhoan_controller_function() {
			require_once "model/taikhoan_model.php";
		 	$get = new taikhoan_model;
			$result = $get->laytaikhoan_model_function();
			return $result;
		}
	}
?>