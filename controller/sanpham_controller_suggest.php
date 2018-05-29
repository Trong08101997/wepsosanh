<?php  
	$str = $_POST['str'];
	require_once "model/sanpham_model.php";
	$search = new sanpham_model;
	$result = $search->laysanpham_model_function_name_order($str);

	$arr_gia = array();
	while ($x = mysqli_fetch_array($result)) {
		$arr_gia[] = $x['sp_gia'] . "<br>";
	}

	$arr_suggest = array();
	$n = count($arr_gia);
	for ($i=0; $i < $n; $i++) { 
		if (preg_match("/".$str."/", $arr_gia[$i])) {

			if($i == ($n - 1)){
				$arr_suggest[0] = $arr_gia[$i-1];				
				$arr_suggest[1] = $arr_gia[$i-2];				
				$arr_suggest[2] = $arr_gia[$i-3];
				break;
			
			} elseif ($i == ($n - 2)) {
				# code...
				$arr_suggest[0] = $arr_gia[$i+1];				
				$arr_suggest[1] = $arr_gia[$i-1];				
				$arr_suggest[2] = $arr_gia[$i-2];
				break;

			} elseif ($i == 0) {
				# code...
				$arr_suggest[0] = $arr_gia[$i+1];				
				$arr_suggest[1] = $arr_gia[$i+2];				
				$arr_suggest[2] = $arr_gia[$i+3];
				break;

			} elseif ($i == 1) {
				# code...
				$arr_suggest[0] = $arr_gia[$i-1];				
				$arr_suggest[1] = $arr_gia[$i+1];				
				$arr_suggest[2] = $arr_gia[$i+2];
				break;

			} else {
				$arr_suggest[0] = $arr_gia[$i+1];				
				$arr_suggest[1] = $arr_gia[$i-1];				
				$arr_suggest[2] = $arr_gia[$i-2];
				break;
			}
		}
	}
	for ($i=0; $i < 3; $i++) { 
		# code...
		// $pd
		$pd = $search->laysanpham_model_function_price($arr_suggest[$i]);
		$pd = mysqli_fetch_array($pd);

		echo '<div class="product_suggest">
				<div class="img_suggest">
					<img width="70%" src="images/' . $pd['sp_anh_dai_dien'] . '"/>
				</div>
				<div class="name_suggest">'
					. $pd['sp_ten'] .
				'</div>
				<div class="price_suggest">'
					. number_format($pd['sp_gia'],0,'.',' ') .
				' VND</div>
			</div>';
	}
?>