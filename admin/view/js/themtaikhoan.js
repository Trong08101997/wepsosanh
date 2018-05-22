$(document).ready(function() {
	$("#retype_password").change(function() {
		var password01 = $("#password").val();
		var password02 = $(this).val();

		if (password01 == password02){
			$("#them").removeAttr("disabled");

		} else {
			$("#them").attr("disabled", "disabled");
		}
	})

	$("#password").change(function() {
		var password01 = $("#retype_password").val();
		var password02 = $(this).val();

		if (password01 == password02){
			$("#them").removeAttr("disabled");

		} else {
			$("#them").attr("disabled", "disabled");
		}
	})
});