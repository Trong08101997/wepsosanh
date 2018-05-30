<?php 
	session_start();
	if (isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if (strlen($username)>16 || strlen($username)<8 || preg_match("#\ #", $username)) {
			$_SESSION['error'] = "Username có độ dài từ 8 - 16 ký tự, không bao gồm dấu cách.";
			header("Location: index.php?action=themtaikhoan_view");
			die();

		} elseif (strlen($password)>20 || strlen($password)<4) {
			$_SESSION['error'] = "Password có độ dài từ 4 -20 ký tự.";
			header("Location: index.php?action=themtaikhoan_view");
			die();
		}

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
		header("Location: index.php");
	}
 ?>