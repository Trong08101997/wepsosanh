<?php 
	session_start();
	if (isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$password = md5($password);

		require_once "model/taikhoan_model.php";
		$get = new taikhoan_model;
		$result = $get->laytaikhoan_model_function();
		while ($row = mysqli_fetch_array($result)) {

			if (($row['username_users'] == $username) && ($row['password_users'] == $password)){
				$_SESSION['login'] = $username;
				header("Location: index.php?action=sanpham_view");
				die();	
			}
		}
	}
		 header("Location: index.php");
 ?>