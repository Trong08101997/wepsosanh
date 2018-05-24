<?php  
	class sanpham_model {

		function laysanpham_model_function_like($str) {
			require_once "model/connect_db.php";
			$result = mysqli_query($connect, "SELECT * FROM products WHERE sp_ten LIKE '%$str%'");

			return $result;
		}
	}

?>