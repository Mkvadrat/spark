$(function(){
  $(window).scroll(function(){
    var winTop = $(window).scrollTop();
    if(winTop >= 50){
      $("body").addClass("sticky-header");
    }else{
      $("body").removeClass("sticky-header");
    }//if-else
  });//win func.
});//ready func.