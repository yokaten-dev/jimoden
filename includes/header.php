<?php $base_url = rtrim(str_replace($_SERVER['DOCUMENT_ROOT'], '', dirname(__DIR__)), '/'); ?>
<div class="catchcopy"><span>料金表</span>がある<span>地元</span>の<br class="br-sp">電気工事業者と<span>出会える</span>「ジモデン」</div>
<header class="header">
  <div class="header-wrapper">
    <div class="header-logo">
      <a href="<?php echo $base_url; ?>/"><img src="<?php echo $base_url; ?>/assets/img/logo.svg" alt="ジモデン" /></a>
    </div>
    <div class="header-links">
      <a href="<?php echo $base_url; ?>/price/" class="header-link price">料金表</a>
      <a href="<?php echo $base_url; ?>/jimoden/search.php" class="header-link search">業者を探す</a>
    </div>
  </div>
</header>
<script>
  /* ヘッダーがfiexedになったら、.mainのpadding-topにヘッダーの高さを適用する */
  document.addEventListener("DOMContentLoaded", function() {
    const header = document.querySelector(".header");
    const catchcopy = document.querySelector(".catchcopy");
    const main = document.querySelector(".main");

    function updateMainPadding() {
      const headerHeight = header.offsetHeight + "px";
      if (window.scrollY > catchcopy.offsetHeight) {
        header.classList.add("fixed");
        main.style.paddingTop = headerHeight; // ヘッダーの高さを適用
      } else {
        header.classList.remove("fixed");
        main.style.paddingTop = "0px"; // 初期状態は0
      }
    }
    // 初回実行
    updateMainPadding();

    window.addEventListener("scroll", updateMainPadding);
    window.addEventListener("resize", function() {
      updateMainPadding(); // 画面サイズ変更時に更新
    });
  });
</script>
