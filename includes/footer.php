<?php $base_url = rtrim(str_replace($_SERVER['DOCUMENT_ROOT'], '', dirname(__DIR__)), '/'); ?>
<footer class="footer">
    <div class="wrapper">
        <div class="footer-service">
            <p class="footer-service-header"><a href="<?php echo $base_url; ?>/price/">電気工事料金表</a></p>
            <ul class="footer-service-list">
                <li><a href="<?php echo $base_url; ?>/price/switch-replacement-price.php">スイッチ交換</a></li>
                <li><a href="<?php echo $base_url; ?>/price/outlet-replacement-price.php">コンセント交換</a></li>
                <li><a href="<?php echo $base_url; ?>/price/add-outlet-replacement-price.php">コンセント増設</a></li>
                <li><a href="<?php echo $base_url; ?>/price/downlight-replacement-price.php">ダウンライト交換</a></li>
                <li><a href="<?php echo $base_url; ?>/price/fluorescent-light-replacement-price.php">蛍光灯→LED交換</a></li>
                <li><a href="<?php echo $base_url; ?>/price/mercury-lamp-replacement-price.php">水銀灯→LED交換</a></li>
                <li><a href="<?php echo $base_url; ?>/price/breaker-replacement-price.php">ブレーカー交換</a></li>
                <li><a href="<?php echo $base_url; ?>/price/distribution-board-replacement-price.php">分電盤交換</a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <ul class="additional-info">
                <li><a href="<?php echo $base_url; ?>/company/">運営企業</a></li>
                <li><a href="<?php echo $base_url; ?>/terms/">利用規約</a></li>
                <li><a href="<?php echo $base_url; ?>/privacy/">プライバシーポリシー</a></li>
            </ul>
            <a href="<?php echo $base_url; ?>/" class="footer-logo"><img src="<?php echo $base_url; ?>/assets/img/logo.svg" alt="シモデン" /></a>
            <p class="copyright">&copy;シモデン All rights reserved.</p>
        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="<?php echo $base_url; ?>/assets/js/script.js"></script>
