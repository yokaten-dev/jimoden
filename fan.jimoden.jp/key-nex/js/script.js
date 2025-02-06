/*-------------------------------------
ハンバーガーメニュー
-------------------------------------*/
$(function () {
  const $btnMenu = $("#js-btn-menu");
  const $gnav = $(".gnav");

  $btnMenu.on("click", function () {
    $btnMenu.toggleClass("active");
    $gnav.toggleClass("show");
    $gnav.animate(
      {
        opacity: "toggle",
      },
      200
    );
  });

  $(document).on("click", function (e) {
    if (!$(e.target).closest($gnav).length && !$(e.target).closest($btnMenu).length) {
      if ($gnav.hasClass("show")) {
        $gnav.removeClass("show");
        $btnMenu.toggleClass("active");
        $gnav.animate(
          {
            opacity: "toggle",
          },
          200
        );
      }
    }
  });
});

/*-------------------------------------
スムーススクロール
-------------------------------------*/
$(function () {
  // ページ内のリンクをクリックした時に動作
  $('a[href^="#"]').click(function () {
    const href = $(this).attr("href");
    const target = $(href === "#" || href === "" ? "html" : href);
    const position = target.offset().top;
    $("html, body").animate(
      {
        scrollTop: position,
      },
      600,
      "swing"
    ); // 600ミリ秒
    return false;
  });
});

/*-------------------------------------
トップに戻る
-------------------------------------*/
$(function () {
  const pagetop = $("#to-top");

  // 最初に画面が表示された時は、トップに戻るボタンを非表示に設定
  pagetop.hide();

  $(window).scroll(function () {
    if ($(this).scrollTop() > 700) {
      pagetop.fadeIn();
    } else {
      pagetop.fadeOut();
    }
  });
});

/*-------------------------------------
アコーディオン（追加工事詳細）
-------------------------------------*/
function toggleAccordion(element) {
  if ($(window).width() < 901) {
    const $element = $(element);
    const $content = $element.prev();
    const $toggleText = $element.find(".js-toggle-text");
    const $toggleSymbol = $element.find(".js-toggle-symbol");
    const isOpen = $content.hasClass("--open");
    const openText = "閉じる";
    const closeText = "詳細をみる";
    const openSymbol = "－";
    const closeSymbol = "＋";

    if (isOpen) {
      $content.removeClass("--open");
      $toggleText.text(closeText);
      $toggleSymbol.text(closeSymbol);
    } else {
      $content.addClass("--open");
      $toggleText.text(openText);
      $toggleSymbol.text(openSymbol);
    }
  }
}

/*-------------------------------------
アコーディオン（写真の撮り方）
-------------------------------------*/
$(document).ready(function () {
  const accordionTitleClass = ".js-accordion-title";
  const accordionContentClass = ".js-accordion-content";
  const toggleMarkClass = ".js-toggle-mark";
  const openClass = "open";

  function updateAccordion() {
    const isWide = $(window).width() >= 901;

    $(accordionContentClass).each(function () {
      const $content = $(this);
      const $mark = $content.prev(accordionTitleClass).find(toggleMarkClass);

      if (isWide) {
        $content.show();
        $mark.hide();
      } else {
        $content.toggle($content.hasClass(openClass));
        $mark.text($content.hasClass(openClass) ? "－" : "＋").show();
      }
    });
  }

  $(accordionTitleClass).click(function () {
    if ($(window).width() < 901) {
      const $content = $(this).next(accordionContentClass);
      const $mark = $(this).find(toggleMarkClass);

      $content.toggleClass(openClass).slideToggle();
      $mark.text($content.hasClass(openClass) ? "－" : "＋");

      $(accordionContentClass).not($content).removeClass(openClass).slideUp();
      $(toggleMarkClass).not($mark).text("＋");
    }
  });

  $(window).resize(updateAccordion);
  updateAccordion();
});
