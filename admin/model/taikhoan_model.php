<?php 
	class taikhoan_model {
		//kêt nối DB
		function themtaikhoan_model_function($username, $password) {
			$password = md5($password);
			mysqli_query($connect, "INSERT INTO users (username_users, password_users) 
									VALUES ('$username', '$password')");
		}

		function laytaikhoan_model_function(){
		require_once "connect_db.php";

			$result = mysqli_query($connect, "SELECT * FROM users");
			return $result;
		}
	}
 ?>