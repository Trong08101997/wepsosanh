<?php  
	$str = $_POST['str'];
	require_once "model/sanpham_model.php";
	$search = new sanpham_model;
	$result = $search->laysanpham_model_function_hang($str);

	$ar = array();

	$d = 1;
			// echo "<div>";

	while ($x = mysqli_fetch_array($result)) {
		echo "<div class='catergorys_list_phone'>" . $x['sp_ten'] . "</div>";

	}
?>
