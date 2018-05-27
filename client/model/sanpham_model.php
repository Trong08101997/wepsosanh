<?php  
	class sanpham_model {

		function laysanpham_model_function_like($str) {
			require "model/connect_db.php";
			$result = mysqli_query($connect, "SELECT * FROM products WHERE sp_ten LIKE '%$str%'");
			// unset(sanpham_model);
			return $result;
		}

		function laysanpham_model_function_name($str) {
			require "model/connect_db.php";
			$result = mysqli_query($connect, "SELECT * FROM products WHERE sp_ten  = '$str'");

			return $result;
		}		

		function __destruct() {}
	}

?>