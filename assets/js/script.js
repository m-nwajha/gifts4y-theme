$(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
        $('.top-header').addClass("sticky");
    }
    else{
        $('.top-header').removeClass("sticky");
    }
});
$(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
        $('.logo').addClass("sticky");
    }
    else{
        $('.logo').removeClass("sticky");
    }
});
//load more
$(document).ready(function(){
    $(".content").slice(0, 12).show();
    $("#loadMore").on("click", function(e){
      e.preventDefault();
      $(".content:hidden").slice(0, 4).slideDown();
      if($(".content:hidden").length == 0) {
        $("#loadMore").text("انتهى المحتوى").addClass("noContent");
      }
    });
    
  })