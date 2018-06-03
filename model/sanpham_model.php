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

		function laysanpham_model_function_price($str) {
			require "model/connect_db.php";
			$result = mysqli_query($connect, "SELECT * FROM products WHERE sp_gia  = '$str'");

			return $result;
		}	

		function laysanpham_model_function_name_order($str) {
			require "model/connect_db.php";
			$result = mysqli_query($connect, "SELECT sp_gia FROM products order by sp_gia");

			return $result;
		}		
		function laysanpham_model_function_hang($str) {
			require "model/connect_db.php";
			$result = mysqli_query($connect, "SELECT * FROM products WHERE sp_loai_san_pham = '$str'");

			return $result;
		}

		function __destruct() {}
	}

?>