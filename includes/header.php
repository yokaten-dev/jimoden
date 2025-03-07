<?php
$base_url = rtrim(str_replace($_SERVER['DOCUMENT_ROOT'], '', dirname(__DIR__)), '/');
$body_id = isset($bodyID) ? $bodyID : '';
?>
<?php if ($body_id !== 'jimoden-top'): ?>
  <div class="catchcopy"><span>料金表</span>がある<span>地元</span>の<br class="br-sp">電気工事業者と<span>出会える</span>「ジモデン」</div>
<?php endif; ?>
<header class="header">
  <div class="header-wrapper">

    <div class="header-logo">
      <a href="<?php echo $base_url; ?>/"><img src="<?php echo $base_url; ?>/assets/img/logo.svg" alt="ジモデン" /></a>
    </div>
    <nav class="header-links">
      <a href="<?php echo $base_url; ?>/price/" class="header-link price">料金表</a>
      <a href="<?php echo $base_url; ?>/jimoden/search.php" class="header-link search">業者を探す</a>
      <div class="gnav">
        <ul>
          <li>
            <span class="menu-title">電気スイッチ</span>
            <div class="menu-link">
              <a href="<?php echo $base_url; ?>/lighting-switch/">照明スイッチ交換</a>
              <a href="<?php echo $base_url; ?>/fan-switch/">換気扇スイッチ交換</a>
            </div>
          </li>
          <li>
            <span class="menu-title">コンセント</span>
            <div class="menu-link">
              <a href="<?php echo $base_url; ?>/outlet-replacement/">コンセント交換</a>
              <a href="<?php echo $base_url; ?>/outlet-expand/">コンセント増設</a>
            </div>
          </li>
          <li>
            <span class="menu-title">照明器具</span>
            <div class="menu-link">
              <a href="<?php echo $base_url; ?>/downlight/">LEDでダウンライト</a>
              <a href="<?php echo $base_url; ?>/fluorescent-light-led/">蛍光灯→LED交換</a>
              <a href="<?php echo $base_url; ?>/mercury-lamp-led/">水銀灯→LED交換</a>
            </div>
          </li>
          <li>
            <span class="menu-title">分電盤･ブレーカー</span>
            <div class="menu-link">
              <a href="<?php echo $base_url; ?>/distribution-board-replacement/">分電盤</a>
              <a href="<?php echo $base_url; ?>/breaker-replacement/">ブレーカー</a>
            </div>
          </li>
        </ul>
      </div>
      <button class="btn-menu" id="js-btn-menu" type="button"><span class="border1"></span><span></span><span class="border2"></span></button>
    </nav>
  </div>
</header>
