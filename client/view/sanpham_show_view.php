<?php  
	require "controller/sanpham_controller.php";
    $get1 = new sanpham_controller;
    $product = $get1->laysanpham_controller_function($tg1);
        $product = mysqli_fetch_array($product);

    echo '
    	<div class="product1">
        	<div class="img">
		        <img width="70%" src="../images/' . $product['sp_anh_dai_dien'] . '"/>
		      </div>   

		      <div class="sp_name">
		        <h1><b>' . $product['sp_ten'] . '</b></h1>
		      </div>   

		      <div class="sp_gia">
		        <b>' . number_format($product['sp_gia'],0,'.',' ') . ' VNĐ</b>
		      </div>  

		      <div class="sp_cauhinh">
		        ' . $product['sp_cau_hinh_chi_tiet'] . '
		      </div>
	      </div>';


	    if($tg2 != "") {

    		$product = $get1->laysanpham_controller_function($tg2);
	        $product = mysqli_fetch_array($product);

	        echo '
	        	<div class="product2">
	        		<div class="close" id="close2">X</div>
		        	<div class="img">
				        <img width="70%" src="../images/' . $product['sp_anh_dai_dien'] . '"/>
				      </div>   

				      <div class="sp_name">
				        <h1><b>' . $product['sp_ten'] . '</b></h1>
				      </div>   

				      <div class="sp_gia">
				        <b>' . number_format($product['sp_gia'],0,'.',' ') . ' VNĐ</b>
				      </div>  

				      <div class="sp_cauhinh">
				        ' . $product['sp_cau_hinh_chi_tiet'] . '
				      </div>
			      </div>';
	    } else {
    		echo '<div class="product2"></div>';
	    }

	    if($tg3 != "") {

    		$product = $get1->laysanpham_controller_function($tg3);
	        $product = mysqli_fetch_array($product);

	        echo '
	        	<div class="product3">
		        	<div class="close" id="close3">X</div>
		        	<div class="img">
				        <img width="70%" src="../images/' . $product['sp_anh_dai_dien'] . '"/>
				      </div>   

				      <div class="sp_name">
				        <h1><b>' . $product['sp_ten'] . '</b></h1>
				      </div>   

				      <div class="sp_gia">
				        <b>' . number_format($product['sp_gia'],0,'.',' ') . ' VNĐ</b>
				      </div>  

				      <div class="sp_cauhinh">
				        ' . $product['sp_cau_hinh_chi_tiet'] . '
				      </div>
			      </div>';
	    } else {
	    		echo '<div class="product3"></div>';
	    }
?>																															