<?php
	require_once "model/taikhoan_model.php";
	$get = new taikhoan_model;
	class taikhoan_controller {
 
		function themtaikhoan_controller_function() {
			$username = $_POST['username'];
			$password = $_POST['password'];
		
			$user_ctl->themtaikhoan_model_function($username, $password);

			header("Location: index.php?action=taikhoan_view");
		}

		function laytaikhoan_controller_function() {
			$result = $get->laytaikhoan_model_function();
			
			return $result;
		}

		function xoataikhoan_controller_function($id){
			$result = $get->xoataikhoan_model_function($id);
		}
	}
?>