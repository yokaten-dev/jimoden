$(document).ready(function () {
  /* スムーススクロール */
  function initSmoothScroll() {
    $('a[href^="#"]').click(function (e) {
      const href = $(this).attr("href");
      const $target = $(href === "#" || href === "" ? "html" : href);
      const headerHeight = $("header").outerHeight();
      const position = href.length > 1 ? $target.offset().top - headerHeight : $target.offset().top;

      $("html, body").animate({ scrollTop: position }, 600, "swing");
      e.preventDefault();
    });
  }

  /* アコーディオンメニュー */
  function initAccordion() {
    const accTitle = ".js-accordion-title";
    const accContent = ".js-accordion-content";
    const clsOpen = "open";

    function updateAccordion() {
      const isWide = $(window).width() >= 768;
      $(accContent).each(function () {
        const $content = $(this);
        const $title = $content.prev(accTitle);
        $content.toggle(isWide || $content.hasClass(clsOpen));
        $title.find(".js-toggle-mark").toggle(!isWide);
      });
    }

    $(accTitle).click(function () {
      if ($(window).width() < 768) {
        $(this).next(accContent).toggleClass(clsOpen).slideToggle();
        $(this).toggleClass(clsOpen);
      }
    });

    $(window).resize(updateAccordion);
    updateAccordion();
  }

  /* フッターリンクスライドアウト */
  function initFooterLinkSlideOut() {
    const $contactLink = $(".contact-links");
    const $mail = $(".mail-form");

    if ($mail.length) {
      $(window).on("scroll", function () {
        const scrollPosition = $(window).scrollTop() + $(window).height();
        const mailOffsetTop = $mail.offset().top;

        if (scrollPosition >= mailOffsetTop) {
          $contactLink.addClass("slide-out");
        } else {
          $contactLink.removeClass("slide-out");
        }
      });
    }
  }

  /* トップへ戻るボタン */
  function initPageTopButton() {
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
  }

  // 各機能の初期化
  initSmoothScroll();
  initAccordion();
  initFooterLinkSlideOut();
  initPageTopButton();
});
