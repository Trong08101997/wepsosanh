$(document).ready(function() {

	$("#close2").click(function(){
    $(".product2").html("<div class='add'>Thêm</div>");    
	});

  $("#close3").click(function(){
    $(".product3").text("");    
  });



  //event search
  $("#timkiem").focusin(function() {
    $(".result").css("display", "block");
    // alert("trong");
  });  

  $("#timkiem").click(function() {
    $(".result").css("display", "block");
    // alert("trong");
  });

  $(".container").mouseover(function() {
    $(".result").css("display", "none");
    // alert("trong");
  });

$("#timkiem").keyup(function() {

    var val = $(this).val();
    if(val == "") {
      $(".result").css("display", "none");
    } else {
      $(".result").css("display", "table");
    }

    $.ajax({
      url : "?action=sanpham_controller_like",
      type : "post",
      datatype : "html",
      data : {
        str : $(this).val()
      }
    }).done(function(result) {
      $(".result").html(result);

      $(".list_result").click(function() {}); 
    });
});


});



