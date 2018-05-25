function checkTag(){
	var t = 0;
	for(var i = 1; i < 4; i++){
		var cl = "#tag" + i;
		var tx = $(cl).text();
		if(tx == "") {
			t = i;
			break;
		}
	}

	return t;
}

$(document).ready(function() {

	$(".result_search").css("display", "none");

	$("#search_box_input01").keyup(function() {

		var val = $(this).val();
		if(val == "") {
			$(".result_search").css("display", "none");
		} else {
			$(".result_search").css("display", "block");
		}

		$.ajax({
			url : "?action=sanpham_controller_like",
			type : "post",
			datatype : "html",
			data : {
				str : $(this).val()
			}
		}).done(function(result) {
			$(".result_search").html(result);

			$(".list_result").click(function() {
				// alert($(this).text());
				// $(".tag1").css("display", "table");
				// $(".tag1").text($(this).text());

				var check = checkTag();
				// alert(check);
				if(check == 0) {
					alert("So sánh tối đa 3 sản phẩm");
				
				} else {
					var cla = "#tag" + check;
					$(cla).css("display", "table");
					$(cla).text($(this).text());
				}
			});	
		});
	});

	$("#search_box_input01").focusout(function() {
		// $(".result_search"). css("display", "none");
	});

	$("#search_box_input01").focusin(function() {
		$(".result_search").css("display", "block");
	});

	$(".tg").click(function() {
		$(this).text("");
		$(this).css("display", "none");
	});

	$("#done").click (function () {
		var tg1 = $("#tag1").text();
		var tg2 = $("#tag2").text();
		var tg3 = $("#tag3").text();

		var tg = tg1 + "|" + tg2 + "|" + tg3;
		location.assign("index.php?action=sosanh_view&arr="+tg);
	});
});
