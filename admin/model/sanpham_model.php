<?php 
	class sanpham_model {

		function themsanpham_model_function($arr) {
			// echo "<pre>";/
			// print_r($arr);
			// echo "</pre>";
			require_once "connect_db.php";
			$ten = $arr['ten'];
			$anh_dai_dien = $arr[0];
			$anh_san_pham = $arr[1];
			$loai_san_pham = $arr['loai_san_pham'];
			$cau_hinh = $arr['cau_hinh'];
			$cau_hinh_chi_tiet = $arr['cau_hinh_chi_tiet'];
			$gia = $arr['gia'];

			mysqli_query($connect, "INSERT INTO products(
														sp_ten,
														sp_anh_dai_dien,
														sp_anh_san_pham,
														sp_loai_san_pham,
														sp_cau_hinh,
														sp_cau_hinh_chi_tiet,
														sp_gia
									) VALUES (
														'$ten',
														'$anh_dai_dien',
														'$anh_san_pham',
														'$loai_san_pham',
														'$cau_hinh',
														'$cau_hinh_chi_tiet',
														'$gia'
													     )"
													 );
		}

		function laysanpham_model_function() {
			require_once "connect_db.php";
			$result = mysqli_query($connect, "SELECT * FROM products");
			
			return $result;
		}

		function xoasanpham_model_function($id) {
			require_once "connect_db.php";
			mysqli_query($connect, "DELETE FROM products WHERE sp_id = '$id'");
		}

		function suasanpham_model_function($id , $sp_gia){
			require_once "connect_db.php";
			mysqli_query($connect, "UPDATE products SET sp_gia = '$sp_gia' WHERE sp_id = '$id'");
		}
	}
 ?>