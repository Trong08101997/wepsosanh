<?php  
	$str = $_POST['str'];
	require_once "model/sanpham_model.php";
	$search = new sanpham_model;
	$result = $search->laysanpham_model_function_like($str);

	$d = 0;
	while ($x = mysqli_fetch_array($result)) {
		if($d == 9) {
			break;
		}
		$d++;
		echo "<div id=" . $x['sp_id'] . ">" . $x['sp_ten'] . "</div>"	;
		

	}

	// echo "<pre>";
	// print_r($x['sp_ten']);
	// echo "</pre>";
?>