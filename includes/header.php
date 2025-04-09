<?php
$body_id = isset($bodyID) ? $bodyID : '';
?>
<?php if ($body_id !== 'jimoden-top'): ?>
  <div class="catchcopy"><span>料金表</span>がある<span>地元</span>の<br class="br-sp">電気工事業者と<span>出会える</span>「ジモデン」</div>
<?php endif; ?>
<header class="header">
  <div class="header-wrapper">

    <div class="header-logo">
      <a href="/"><img src="/assets/img/logo.svg" alt="ジモデン" /></a>
    </div>
    <nav class="header-links">
      <a href="/jimoden/search.php" class="header-link search">業者を探す</a>
      <div class="gnav">
        <ul>
          <li>
            <span class="menu-title">電気スイッチ</span>
            <div class="menu-link">
              <a href="/lighting-switch/">照明スイッチ交換</a>
              <a href="/fan-switch/">換気扇スイッチ交換</a>
            </div>
          </li>
          <li>
            <span class="menu-title">コンセント</span>
            <div class="menu-link">
              <a href="/outlet-replacement/">コンセント交換</a>
              <a href="/outlet-expand/">コンセント増設</a>
            </div>
          </li>
          <li>
            <span class="menu-title">照明器具</span>
            <div class="menu-link">
              <a href="/downlight/">LEDでダウンライト</a>
              <a href="/fluorescent-light-led/">蛍光灯→LED交換</a>
              <a href="/mercury-lamp-led/">水銀灯→LED交換</a>
            </div>
          </li>
          <li>
            <span class="menu-title">分電盤･ブレーカー</span>
            <div class="menu-link">
              <a href="/distribution-board-replacement/">分電盤</a>
              <a href="/breaker-replacement/">ブレーカー</a>
            </div>
          </li>
        </ul>
      </div>
      <button class="btn-menu" id="js-btn-menu" type="button"><span class="border1"></span><span></span><span class="border2"></span></button>
    </nav>
  </div>
</header>
