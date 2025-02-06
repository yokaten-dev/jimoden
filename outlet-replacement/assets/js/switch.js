// JavaScript Document
$(function(){
$(".openbtn").click(function () {
	$(this).toggleClass('active');
    $("#g-nav").toggleClass('panelactive');
});

$("#g-nav a").click(function () {
    $(".openbtn").removeClass('active');
    $("#g-nav").removeClass('panelactive');
});

function PageTopAnime() {
  var scroll = $(window).scrollTop();
  if (scroll >= 800){
    $('#scroll-top').removeClass('DownMove');
    $('#scroll-top').addClass('UpMove');
  }else{
    if($('#scroll-top').hasClass('UpMove')){
      $('#scroll-top').removeClass('UpMove');
      $('#scroll-top').addClass('DownMove');
    }
  }
}


$(window).scroll(function () {
  PageTopAnime();
});
$('#scroll-top a').click(function () {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
    return false;
});

});