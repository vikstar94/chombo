$(function(){
  $(window).scroll(function(){
    var winTop = $(window).scrollTop();
    if(winTop >= 30){
      $(".header-slides").addClass("scrolled");
    }else{
      $(".header-slides").removeClass("scrolled");
    }//if-else
  });//win func.
});//ready func.