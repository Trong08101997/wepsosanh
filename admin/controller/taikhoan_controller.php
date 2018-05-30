<?php
	class taikhoan_controller {
 
		function themtaikhoan_controller_function() {
			session_start();
			$username = $_POST['username'];
			$password = $_POST['password'];

			if (strlen($username)>16 || strlen($username)<8 || preg_match("#\ #", $username)) {
				$_SESSION['add_error'] = "Username có độ dài từ 8 - 16 ký tự, không bao gồm dấu cách.";
				header("Location: index.php?action=themtaikhoan_view");	
				die();

			} elseif (strlen($password)>20 || strlen($password)<4) {
				$_SESSION['add_error'] = "Password có độ dài từ 4 -20 ký tự.";
				header("Location: index.php?action=themtaikhoan_view");
				die();
			}

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