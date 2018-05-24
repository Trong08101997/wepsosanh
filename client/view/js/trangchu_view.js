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
		});
	});

	$("#search_box_input01").focusout(function() {
		$(".result_search").css("display", "none");
	});

	$("#search_box_input01").focusin(function() {
		$(".result_search").css("display", "block");
	});
});
