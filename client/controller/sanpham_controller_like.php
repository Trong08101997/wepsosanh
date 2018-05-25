<?php  
	$str = $_POST['str'];
	require_once "model/sanpham_model.php";
	$search = new sanpham_model;
	$result = $search->laysanpham_model_function_like($str);

	$ar = array();

	$d = 0;
	while ($x = mysqli_fetch_array($result)) {
		if($d == 9) {
			break;
		}
		$d++;
		$t = $x['sp_id'];
		echo "<div class='list_result'>" . $x['sp_ten'] . "</div>";
	}
?>