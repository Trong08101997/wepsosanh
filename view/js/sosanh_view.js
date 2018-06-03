$(document).ready(function() {
    var h = $("#img2").width();
    $("#base_img").height(h);
    
    $("#base_name").height($(".sp_name").height());

    $("#base_gia").height($(".sp_gia").height());
    
    $("#base_cauhinh").height($(".sp_cauhinh").height());


    var name1 = $("#2").text();
    if(name1 == "") {
      var name1 = $("#1").text();
      $(".product2").html("<div class='add'>Thêm</div><h4>Sản Phẩm Tương Tự " +name1+ "</h4><div class='suggest'></div>");    
      
      $(".add").click(function() {
        $("#timkiem").focus();
      });

      var name = $("#a").text();
      $.ajax({
        url : "?action=sanpham_controller_suggest",
        type : "post",
        datatype : "html",
        data : {
          str : name
        }
      }).done(function(result) {
        $(".product2 .suggest").html(result);
          
        // click sản phẩm gợi ý
        $(".name_suggest").click(function() {

          var x = $(this).text();
          var name1 = $("#1").text();
          var name3 = $("#3").text();
          var name = $(this).text();
          if(name3 == "") {
            location.assign("index.php?action=sosanh_view&tg1="+name1+"&tg2="+name);
          
          } else {
            location.assign("index.php?action=sosanh_view&tg1="+name1+"&tg2="+name+"&tg3="+name3);
          }
        }); 
      });
    }
    
    var name1 = $("#3").text();
    if(name1 == "") {

      if($("#2").text() != ""){
        var name = $("#b").text();
        var name1 = $("#2").text();

      } else {
        var name = $("#a").text();
        var name1 = $("#1").text();

      }
      $(".product3").html("<div class='add'>Thêm</div><h4>Sản Phẩm Tương Tự " +name1+ "</h4><div class='suggest'></div>");    
      
      $(".add").click(function() {
        $("#timkiem").focus();
      });
      $.ajax({
        url : "?action=sanpham_controller_suggest",
        type : "post",
        datatype : "html",
        data : {
          str : name
        }
      }).done(function(result) {
        $(".product3 .suggest").html(result);

        // click sản phẩm gợi ý
        $(".name_suggest").click(function() {

          var x = $(this).text();
          var name1 = $("#1").text();
          var name2 = $("#2").text();
          var name = $(this).text();
          if(name2 == "") {
            location.assign("index.php?action=sosanh_view&tg1="+name1+"&tg3="+name);
          
          } else {
            location.assign("index.php?action=sosanh_view&tg1="+name1+"&tg2="+name2+"&tg3="+name);
          
          }
        }); 
      });
    }


//xóa sản phẩm thứ 2
	$("#close2").click(function(){
    var name1 = $("#1").text();

    $(".product2").html("<div class='add' id='add2'>Thêm</div><h4>Sản Phẩm Tương Tự " +name1+ "</h4><div class='suggest'></div>");    
	   
    $("#add2").click(function() {
      $("#timkiem").focus();
    });
         
    var name = $("#a").text();
    $.ajax({
      url : "?action=sanpham_controller_suggest",
      type : "post",
      datatype : "html",
      data : {
        str : name
      }
    }).done(function(result) {
      $(".product2 .suggest").html(result);
        
      // click sản phẩm gợi ý
      $(".name_suggest").click(function() {

        var x = $(this).text();
        var name1 = $("#1").text();
        var name3 = $("#3").text();
        var name = $(this).text();
        if(name3 == "") {
          location.assign("index.php?action=sosanh_view&tg1="+name1+"&tg2="+name);
        
        } else {
          location.assign("index.php?action=sosanh_view&tg1="+name1+"&tg2="+name+"&tg3="+name3);
        
        }
      }); 
    });
  });

//xóa sản phẩm thứ 3
  $("#close3").click(function(){
    
    if($("#2").text() != ""){
      var name1 = $("#2").text();

    } else {
      var name1 = $("#1").text();
    }

    if($("#2").text() != ""){
      var name = $("#b").text();

    } else {
      var name = $("#a").text();
    }
    $(".product3").html("<div class='add' id='add3'>Thêm</div><h4>Sản Phẩm Tương Tự " +name1+ "</h4><div class='suggest'></div>");    
    
    $("#add3").click(function() {
      $("#timkiem").focus();
    });


    $.ajax({
      url : "?action=sanpham_controller_suggest",
      type : "post",
      datatype : "html",
      data : {
        str : name
      }
    }).done(function(result) {
      $(".product3 .suggest").html(result);

      // click sản phẩm gợi ý
      $(".name_suggest").click(function() {

        var x = $(this).text();
        var name1 = $("#1").text();
        var name2 = $("#2").text();
        var name = $(this).text();
        if(name2 == "") {
          location.assign("index.php?action=sosanh_view&tg1="+name1+"&tg3="+name);
        
        } else {
          location.assign("index.php?action=sosanh_view&tg1="+name1+"&tg2="+name2+"&tg3="+name);
        
        }
      }); 
    });
  });


//sự kiện hiển thị danh mục
  $(".danhmuc").mouseover(function() {
    $(".catergorys").fadeIn(300);
  });

  $(".container").mouseover(function() {
    $(".catergorys").fadeOut(300);
  }) 

  $(".catergorys").mouseover(function() {
    // $(".catergorys").fadeIn(300);
  })

//sự kiện khi di chuột vào loại sản phẩm
  $(".hang").mouseover(function() {
    $(this).css("color", "red");

    // var val = $(this).text();

    $.ajax({
      url : "?action=sanpham_controller_hang",
      type : "post",
      datatype : "html",
      data : {
        str : $(this).text()  
      }
    }).done(function(result) {
      $(".catergorys_phone").html(result);

      $(".catergorys_list_phone").click(function() {
        var name1 = $("#1").text();
        var name2 = $("#2").text();
        var name3 = $("#3").text();
        var name = $(this).text();
        
        if(name2 == "" & name3 == "") {
          location.assign("index.php?action=sosanh_view&tg1="+name1+"&tg2="+name);

        } else if(name2 == "") {
          location.assign("index.php?action=sosanh_view&tg1="+name1+"&tg2="+name+"&tg3="+name3);
        
        } else if(name3 == "") {
          location.assign("index.php?action=sosanh_view&tg1="+name1+"&tg2="+name2+"&tg3="+name);

        }
      });

    });
  });

  $(".hang").mouseout(function() {
    $(this).css("color", "#0F3057");
  });

//sự kiện khi click ô tìm kiếm
  $("#timkiem").focusin(function() {
    $(".search_box").css("width", "45%");
    $(".result").css("display", "block");
    // alert("trong");
  });  

  $("#timkiem").focusout(function() {
    $(".search_box").css("width", "20%");
    $(".result").css("display", "block");
    // alert("trong");
  });  

  $("#timkiem").click(function() {
    $(".result").css("display", "block");
    // alert("trong");
  });

  $(".container").click(function() {
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

      $(".list_result").click(function() {
        var name1 = $("#1").text();
        var name2 = $("#2").text();
        var name3 = $("#3").text();
        var name = $(this).text();
        
        if(name2 == "" & name3 == "") {
          location.assign("index.php?action=sosanh_view&tg1="+name1+"&tg2="+name);

        } else if(name2 == "") {
          location.assign("index.php?action=sosanh_view&tg1="+name1+"&tg2="+name+"&tg3="+name3);
        
        } else if(name3 == "") {
          location.assign("index.php?action=sosanh_view&tg1="+name1+"&tg2="+name2+"&tg3="+name);

        }
      }); 
    });
});

});



