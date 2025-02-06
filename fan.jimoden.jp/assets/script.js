$(function () {
  /*=================================================
  ハンバーガーメニュー（SP）
  ===================================================*/
  $btnMenu = $("#js-btn-menu");
  $gnav = $(".gnav");

  $btnMenu.on("click", function () {
    $btnMenu.toggleClass("active");
    $gnav.toggleClass("show");
    $gnav.animate({ opacity: "toggle" }, 200);
  });

  $(document).on("click", function (e) {
    if (!$(e.target).closest($gnav).length && !$(e.target).closest($btnMenu).length) {
      if ($gnav.hasClass("show")) {
        $gnav.removeClass("show");
        $btnMenu.toggleClass("active");
        $gnav.animate({ opacity: "toggle" }, 200);
      }
    }
  });

  /*=================================================
  スムーススクロール
  ===================================================*/
  $('a[href^="#"]').click(function () {
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top;
    $("html, body").animate({ scrollTop: position }, 600, "swing");
    return false;
  });

  /*=================================================
  トップに戻る
  ===================================================*/
  $(function () {
    var $backToTopButton = $("#to-top");
    $backToTopButton.hide();

    $(window).on("scroll", function () {
      var scrollPosition = $(this).scrollTop();

      if (scrollPosition > 700) {
        $backToTopButton.fadeIn(); // スクロール位置が700pxを超えたらフェードイン
      } else {
        $backToTopButton.fadeOut(); // スクロール位置が700px未満の場合フェードアウト
      }
    });
  });

  /*=================================================
  スクロール追従サイドバー
  ===================================================*/
  $(window).on("scroll", function () {
    var $sidebar = $(".sidebar");
    var contentTop = $(".content").offset().top;
    var windowHeight = $(window).height(); // ウィンドウの高さを取得
    var scrollY = $(window).scrollTop(); // 現在のスクロール位置を取得
    var sidebarHeight = $sidebar.height(); // サイドバーの高さを取得
    var footerTop = $("footer").offset().top; // フッターの上部位置を取得
    var mainContentHeight = $(".main-content").outerHeight(); // メインコンテンツの高さを取得
    var contentBottom = contentTop + mainContentHeight; // コンテンツの下部位置を計算
    var sidebarTop = 120; // サイドバーが固定されるべき位置（ヘッダーの下）
    var sidebarBottom = contentBottom - sidebarHeight - 20; // サイドバーがフッターの上で止まる位置を計算

    if (scrollY > contentTop) {
      // スクロール位置がコンテンツの上部を超えた場合
      $sidebar.css("top", Math.min(sidebarTop + scrollY - contentTop, sidebarBottom) + "px"); // サイドバーの位置をスクロール位置に応じて動かす
    } else {
      // スクロール位置がコンテンツの上部に達していない場合
      $sidebar.css("top", sidebarTop + "px"); // サイドバーを固定位置に設定
    }
  });
});
