jQuery(function () {
  /* トップへ戻るボタン
  -----------------------------------------------*/
  var $pagetop = $("#page_top");
  // スクロール時
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $pagetop.addClass("show");
    } else {
      $pagetop.removeClass("show");
    }
  });
  // トップへ戻るボタンクリック時
  $pagetop.click(function () {
    $("html, body").animate({ scrollTop: 0 }, 500);
    return false;
  });

  /* スムーススクロール
  ------------------------------------------------*/
  $('a[href^="#"]').click(function () {
    var href = $(this).attr("href");
    var $target = $(href === "#" || href === "" ? "html" : href);
    var position = $target.offset().top;
    $("html, body").animate({ scrollTop: position }, 600, "swing");
    return false;
  });
});
