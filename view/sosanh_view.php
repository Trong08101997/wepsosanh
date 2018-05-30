<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>So Sánh</title>
  <link href="view/css/sosanh_view.css" type="text/css" rel="stylesheet"/>
  <script type="text/javascript" src="view/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="view/js/sosanh_view.js"></script>
</head>

<body>
  <div class="container01">
    <div class="header">
      <div class="home">
        <a href="index.php">SoSanhSanPham</a></li>
      </div>

      <div class="search_box">
        <input type="text" id="timkiem" placeholder="Tìm kiếm sản phẩm so sánh" />

        <div class="result">
          
        </div>
      </div>      
    </div>
  </div>

  <div class="container">
    <?php 
      if(isset($_GET['tg1'])){
        $tg1 = $_GET['tg1'];
      } else {
        $tg1 = "";
      }

      if(isset($_GET['tg2'])){
        $tg2 = $_GET['tg2'];
      } else {
        $tg2 = "";
      }

      if(isset($_GET['tg3'])){
        $tg3 = $_GET['tg3'];
      } else {
        $tg3 = "";
      }
      $t1 = " và <b><i>" . $tg2 . "</i></b>";
      $t2 = " và <b><i>" . $tg3 . "</i></b>";
    ?>

    <div class="title">
      So sánh 
      <?php
          echo "<b><i>".$tg1."</i></b>";
          if($tg2 != "") {
              echo $t1;

              if($tg3 != "") {
                echo $t2;
              }
          }
       ?> 

    </div>

    <?php  
      require_once "view/sanpham_show_view.php";
    ?>
  </div>



</body>
<div>
  <?php include_once 'footter.php'; ?>
</div>
</html>
