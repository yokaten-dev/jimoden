<?php $base_url = rtrim(str_replace($_SERVER['DOCUMENT_ROOT'], '', dirname(__DIR__)), '/'); ?>
<footer class="footer">
    <div class="footer-wrapper">
        <div class="footer-service-container">
            <div class="footer-service">
                <p class="footer-service-header"><a href="<?php echo $base_url; ?>/price/">ジモデンの電気工事料金表</a></p>
                <ul class="footer-service-list">
                    <li><a href="<?php echo $base_url; ?>/price/switch-replacement-price.php">スイッチ交換の料金表</a></li>
                    <li><a href="<?php echo $base_url; ?>/price/outlet-replacement-price.php">コンセント交換の料金表</a></li>
                    <li><a href="<?php echo $base_url; ?>/price/add-outlet-replacement-price.php">コンセント増設の料金表</a></li>
                    <li><a href="<?php echo $base_url; ?>/price/downlight-replacement-price.php">ダウンライト交換の料金表</a></li>
                    <li><a href="<?php echo $base_url; ?>/price/fluorescent-light-replacement-price.php">蛍光灯→LED交換の料金表</a></li>
                    <li><a href="<?php echo $base_url; ?>/price/mercury-lamp-replacement-price.php">水銀灯→LED交換の料金表</a></li>
                    <li><a href="<?php echo $base_url; ?>/price/breaker-replacement-price.php">ブレーカー交換の料金表</a></li>
                    <li><a href="<?php echo $base_url; ?>/price/distribution-board-replacement-price.php">分電盤交換の料金表</a></li>
                </ul>
            </div>
            <div class="footer-service">
                <p class="footer-service-header"><a href="<?php echo $base_url; ?>/tips-index.php">電気工事の基礎知識</a></p>
                <ul class="footer-service-list">
                    <li><span>スイッチ</span>
                        <ul class="footer-service-list">
                            <li><a href="<?php echo $base_url; ?>/lighting-switch/">電気スイッチ交換</a></li>
                            <li><a href="<?php echo $base_url; ?>/fan-switch/">換気扇タイマースイッチ交換</a></li>
                        </ul>
                    </li>
                    <li><span>コンセント</span>
                        <ul class="footer-service-list">
                            <li><a href="<?php echo $base_url; ?>/outlet-replacement/">コンセント交換</a></li>
                            <li><a href="<?php echo $base_url; ?>/outlet-expand/">コンセント増設</a></li>
                        </ul>
                    </li>
                    <li><span>照明器具</span>
                        <ul class="footer-service-list">
                            <li><a href="<?php echo $base_url; ?>/downlight/">LEDでダウンライト</a></li>
                            <li><a href="<?php echo $base_url; ?>/fluorescent-light-led/">蛍光灯→LED交換</a></li>
                            <li><a href="<?php echo $base_url; ?>/mercury-lamp-led/">水銀灯→LED交換</a></li>
                        </ul>
                    </li>
                    <li><span>分電盤・ブレーカー</span>
                        <ul class="footer-service-list">
                            <li><a href="<?php echo $base_url; ?>/distribution-board-replacement/">分電盤</a></li>
                            <li><a href="<?php echo $base_url; ?>/breaker-replacement/">ブレーカー</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="footer-service">
                <p class="footer-service-header"><span>注目の記事</span></p>
                <ul class="footer-service-list">
                    <li><span>電気スイッチ交換</span>
                        <ul class="footer-service-list">
                            <li><a href="<?php echo $base_url; ?>/lighting-switch/switch.php">電気スイッチ故障の原因と交換費用</a></li>
                        </ul>
                    </li>
                    <li><span>蛍光灯→LED交換</span>
                        <ul class="footer-service-list">
                            <li><a href="<?php echo $base_url; ?>/fluorescent-light-led/fluorescent-led.php">蛍光灯からLEDへ交換する前に知っておきたい全知識！</a></li>
                            <li><a href="<?php echo $base_url; ?>/fluorescent-light-led/how-much-save-with-led.php">蛍光灯からLEDで電気代はいくら安くなる？</a></li>
                            <li><a href="<?php echo $base_url; ?>/fluorescent-light-led/which-is-best.php">LED器具交換とバイパス工事、どちらが最適？</a></li>
                            <li><a href="<?php echo $base_url; ?>/fluorescent-light-led/straight-tube-fluorescent-light-to-led.php">直管蛍光灯をLEDに変えるには？</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
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
<div id="page_top"><a href="#"></a></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="<?php echo $base_url; ?>/assets/js/script.js"></script>
