<?php 
	class taikhoan_model {
		function themtaikhoan_model_function($username, $password) {
			require_once "connect_db.php";
			$password = md5($password);
			mysqli_query($connect, "INSERT INTO users (username_users, password_users) 
									VALUES ('$username', '$password')");
		}

		function laytaikhoan_model_function() {
			require_once "connect_db.php";
			$result = mysqli_query($connect, "SELECT * FROM users");

			return $result;
		}

		function xoataikhoan_model_function($id) {
			require_once "connect_db.php";
			mysqli_query($connect, "DELETE FROM users WHERE id_users = '$id'");
		}
	}
 ?>