$(document).ready(function () {
	$("#add_user").click (function () {
		location.assign("index.php?action=themtaikhoan_view");
	});
});

$(document).ready(function () {
	$("#add_product").click (function () {
		location.assign("index.php?action=themsanpham_view");
	});
});

$(document).ready(function() {
	$("#update_price_product").click(function () {
		location.assign("index.php?action=suagia_nhieu_sanpham_view");
	});
});