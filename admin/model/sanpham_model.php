<?php 
	class sanpham_model {
		function themsanpham_model_function($username, $password) {
			$password = md5($password);
			mysqli_query($connect, "INSERT INTO users (username_users, password_users) 
									VALUES ('$username', '$password')");
		}

		function laysanpham_model_function() {
			require_once "connect_db.php";
			$result = mysqli_query($connect, "SELECT * FROM products");
			
			return $result;
		}

		function xoataikhoan_model_function($id) {
			require_once "connect_db.php";
			$result = mysql_query($connect, "DELETE FROM products WHERE id = '$id'")
		}
	}
 ?>