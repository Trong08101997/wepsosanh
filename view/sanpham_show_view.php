<?php  
	require "controller/sanpham_controller.php";
    $get1 = new sanpham_controller;
    $product = $get1->laysanpham_controller_function($tg1);
        $product = mysqli_fetch_array($product);

    echo '
    	<div id="product0" class="product1">
        	<div id="base_img" class="img">
		        <img  width="70%" src="images/' . $product['sp_anh_dai_dien'] . '"/>
		    </div>   
		    <div id="base_name" class="sp_name">
		        <h1><b id="1">' . $product['sp_ten'] . '</b></h1>
		    </div>   
		    <div style="display: none">' . $product['sp_gia'] . '</div>
		    <div id="base_gia" class="sp_gia">
		        <b>' . number_format($product['sp_gia'],0,'.',' ') . ' VNĐ</b>
		    </div>  
		    <div class="sp_cauhinh">
		        ' . $product['sp_cau_hinh_chi_tiet'] . '
		    </div>
	      </div>';


	    if($tg3 != "") {

	    	$tg3 = trim($tg3);
    		$product = $get1->laysanpham_controller_function($tg3);
	        $product = mysqli_fetch_array($product);

	        echo '
	        	<div class="product3">
		        	<div class="close" id="close3">X</div>
		        	<div class="img">
				        <img width="70%" src="images/' . $product['sp_anh_dai_dien'] . '"/>
				      </div>   

				      <div id="3" class="sp_name">
				        <h1><b id="3">' . $product['sp_ten'] . '</b></h1>
				      </div>   

				      <div id="c" style="display: none">' . $product['sp_gia'] . '</div>

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



	    if($tg2 != "") {

    		$product = $get1->laysanpham_controller_function($tg2);
	        $product = mysqli_fetch_array($product);

	        echo '
	        	<div class="product2">
	        		<div class="close" id="close2">X</div>
		        	<div class="img">
				        <img width="70%" src="images/' . $product['sp_anh_dai_dien'] . '"/>
				      </div>   

				      <div class="sp_name">
				        <h1><b id="2">' . $product['sp_ten'] . '</b></h1>
				      </div>   

				      <div id="b" style="display: none">' . $product['sp_gia'] . '</div>

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


    $product = $get1->laysanpham_controller_function($tg1);
        $product = mysqli_fetch_array($product);
	    echo '
    	<div class="product1">
        	<div class="img">
		        <img id="img2" width="70%" src="images/' . $product['sp_anh_dai_dien'] . '"/>
		    </div>   

		    <div class="sp_name">
		        <h1><b id="1">' . $product['sp_ten'] . '</b></h1>
		    </div>   

		    <div id="a" style="display: none">' . $product['sp_gia'] . '</div>

		    <div class="sp_gia">
		        <b>' . number_format($product['sp_gia'],0,'.',' ') . ' VNĐ</b>
		    </div>  

		    <div class="">
		        ' . $product['sp_cau_hinh_chi_tiet'] . '
		    </div>
	    </div>';
?>																															