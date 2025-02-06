// JavaScript Document
$(function () {
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
    if (scroll >= 800) {
      $('#scroll-top').removeClass('DownMove');
      $('#scroll-top').addClass('UpMove');
    } else {
      if ($('#scroll-top').hasClass('UpMove')) {
        $('#scroll-top').removeClass('UpMove');
        $('#scroll-top').addClass('DownMove');
      }
    }
  }


  $(window).scroll(function () {
    PageTopAnime();
  });

});

// headerの高さ分だけmainのmargin-topを設定
$(function () {
  var height = $('.mobile-header').outerHeight();
  $('main').css('margin-top', height);
});


/* smooth scroll */
$(function () {
  const headerHeight = 80;
  $('a[href^="#"]').click(function () {
    const speed = 600;
    let href = $(this).attr("href");
    let target = $(href == "#" || href == "" ? "html" : href);
    let position = target.offset().top - headerHeight;
    $("body,html").animate({ scrollTop: position }, speed, "swing");
    return false;
  });
});
