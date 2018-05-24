<?php 
	class sanpham_controller {

		function themsanpham_controller_function() {
			$ten = $_POST['sp_ten'];
			$loai_san_pham = $_POST['sp_loai_san_pham'];

			$link1 = $_POST['sp_cau_hinh'];
			require_once "controller/laycauhinh_controller.php";
			$cauhinh1 = new laycauhinh_controller;
			$cau_hinh = $cauhinh1->laycauhinh_controller_function($link1);

			$link = $_POST['sp_cau_hinh_chi_tiet'];
			require_once "controller/laycauhinhchitiet_controller.php";
			$cauhinh2 = new laycauhinhchitiet_controller;
			$cau_hinh_chi_tiet = $cauhinh2->laycauhinhchitiet_controller_function($link);
			
			$gia = $_POST['sp_gia'];

			$x = 0;
			$file = $_FILES['sp_anh_dai_dien'];
			$filename = $file['tmp_name'];
			$destination = '../images/' . $file['name'];
			move_uploaded_file($filename, $destination);
			$arr[$x] = $file['name']; 
			$x++;

			$imgs = "";
			$file = $_FILES['sp_anh1'];
			if ($file['name']!=""){	

				$filename = $file['tmp_name'];
				$destination = '../images/' . $file['name'];
				move_uploaded_file($filename, $destination);
				$imgs =$imgs . $file['name'] . "?";
				$x++; 
			}


			$file = $_FILES['sp_anh2'];

			if ($file['name']!=""){
				$filename = $file['tmp_name'];
				$destination = '../images/' . $file['name'];
				move_uploaded_file($filename, $destination);
				$imgs =$imgs . $file['name'] . "?";
				$x++; 
			}

			$file = $_FILES['sp_anh3'];

			if ($file['name']!=""){
				$filename = $file['tmp_name'];
				$destination = '../images/' . $file['name'];
				move_uploaded_file($filename, $destination);
				$imgs = $imgs . $file['name'] . "?";
				$x++; 
			}

			$arr[1] = $imgs;
			if ($x<0){
				echo "so anh phai lon hon 2!";
			}
			else {
				$arr1 = array(
					'ten'=>$ten,  
					'loai_san_pham'=>$loai_san_pham,
					'cau_hinh'=>$cau_hinh,
					'cau_hinh_chi_tiet'=>$cau_hinh_chi_tiet,
					'gia'=>$gia
				);
				$arr = array_merge($arr, $arr1);
			}

			// echo "<pre>";
			// print_r($arr);
			// echo "</pre>";
			require_once "model/sanpham_model.php";
			$get = new sanpham_model;
			$get->themsanpham_model_function($arr);

			header("Location: index.php?action=sanpham_view");
		}

		function laysanpham_controller_function() {
			require_once "model/sanpham_model.php";
		 	$get = new sanpham_model;
			$result = $get->laysanpham_model_function();

			return $result;
		}

		function xoasanpham_controller_function($id) {
			require_once "model/sanpham_model.php";
			$get = new sanpham_model;
			$get->xoasanpham_model_function($id);

			header("Location: index.php?action=sanpham_view");
		}
	}
