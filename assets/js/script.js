$(document).ready(function () {
  const $header = $(".header");
  const $main = $(".main");
  const $catchcopy = $(".catchcopy");

  // ヘッダーの固定処理
  function updateHeaderState() {
    const headerHeight = $header.outerHeight();

    if ($catchcopy.length === 0) {
      $header.addClass("fixed");
    } else {
      const rect = $catchcopy[0].getBoundingClientRect();
      const isVisible = rect.top < window.innerHeight && rect.bottom > 0;

      if (isVisible) {
        $header.removeClass("fixed");
      } else {
        $header.addClass("fixed");
      }
    }

    if ($header.hasClass("fixed")) {
      $main.css("padding-top", `${headerHeight}px`);
    } else {
      $main.css("padding-top", "0px");
    }
  }

  function initHeaderFixed() {
    updateHeaderState();
    $(window).on("scroll resize", updateHeaderState);
  }

  // スムーススクロールの処理
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

  // アコーディオンメニューの処理
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

  // フッターのリンクスライドアウト処理
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

  // トップへ戻るボタンの処理
  function initPageTopButton() {
    var $pagetop = $("#page_top");
    $(window).scroll(function () {
      if ($(this).scrollTop() > 300) {
        $pagetop.addClass("show");
      } else {
        $pagetop.removeClass("show");
      }
    });
    $pagetop.click(function () {
      $("html, body").animate({ scrollTop: 0 }, 500);
      return false;
    });
  }

  // 各機能の初期化
  initHeaderFixed();
  initSmoothScroll();
  initAccordion();
  initFooterLinkSlideOut();
  initPageTopButton();
});
