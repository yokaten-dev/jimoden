<?php $base_url = rtrim(str_replace($_SERVER['DOCUMENT_ROOT'], '', dirname(__DIR__)), '/'); ?>
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
