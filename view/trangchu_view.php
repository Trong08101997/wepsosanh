<!DOCTYPE html>
<html>
<head>
	<title>Trang Chủ</title>
    <link rel="stylesheet" type="text/css" href="view/css/trangchu_view.css">
    <script type="text/javascript" src="view/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="view/js/trangchu_view.js"></script>
</head>
<body>
	<div class="container">
        <div class="tags">
            <div id="tag3" class="tg"></div>
            <div id="tag2" class="tg"></div>
            <div id="tag1" class="tg"></div>
        </div>

        <div class="search">
            <form action="" method="post">
                <input type="text" id="search_box_input01" placeholder="Nhập tên sản phẩm" autocomplete="off" name="submit">
                
                <input type="button" id="done" name="submit" value="So Sánh">
                <div class="result_search"></div>
            </form>    
        </div>
    </div>
    <?php include_once 'footter.php'; ?>
</body>
</html>