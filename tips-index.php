<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8JGM5XKBDS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-8JGM5XKBDS');
    </script>
    <meta charset="utf-8" />
    <title>電気工事の基礎知識 -ジモデン-</title>
    <meta name="description" content="ジモデンは電気工事の料金表がある地元の電気工事業者を探すサイト。スイッチ交換、コンセント交換、蛍光灯・水銀灯からＬＥＤヘ交換、分電盤、ブレーカーの交換など、各種電気工事の料金をわかりやすく掲載しています。" />
    <meta name="keywords" content="電気工事,地元" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="assets/img/favicon.webp" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
    <link rel="stylesheet" href="assets/css/common.css" />
    <link rel="stylesheet" href="assets/tips/tips-index.css" />
</head>

<body id="tips-index">
    <?php include 'includes/header.php'; ?>
    <main class="main">
        <div class="tips-index">
            <h1>電気工事の基礎知識</h1>
            <div class="service-container">
                <figure>
                    <img src="assets/img/switch.png">
                </figure>
                <div>
                    <h2>スイッチ</h2>
                    <ul class="service-list">
                        <li><a href="<?php echo $base_url; ?>/lighting-switch/">電気スイッチ交換</a>
                            <ul class="service-list">
                                <li><a href="<?php echo $base_url; ?>/lighting-switch/broken.php">電気スイッチ故障の原因と交換費用</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo $base_url; ?>/fan-switch/">換気扇タイマースイッチ交換</a></li>
                    </ul>
                </div>
            </div>
            <div class="service-container">
                <figure>
                    <img src="assets/img/outlet.png">
                </figure>
                <div>
                    <h2>コンセント</h2>
                    <ul class="service-list">
                        <li><a href="<?php echo $base_url; ?>/outlet-replacement/">コンセント交換</a></li>
                        <li><a href="<?php echo $base_url; ?>/outlet-expand/">コンセント増設</a></li>
                    </ul>
                </div>
            </div>
            <div class="service-container">
                <figure>
                    <img src="assets/img/downlight.png">
                </figure>
                <div>
                    <h2>照明器具</h2>
                    <ul class="service-list">
                        <li><a href="<?php echo $base_url; ?>/downlight/">LEDでダウンライト</a></li>
                        <li><a href="<?php echo $base_url; ?>/fluorescent-light-led/">蛍光灯→LED交換</a>
                            <ul class="service-list">
                                <li><a href="<?php echo $base_url; ?>/fluorescent-light-led/fluorescent-led.php">蛍光灯からLEDへ交換する前に知っておきたい全知識！</a></li>
                                <li><a href="<?php echo $base_url; ?>/fluorescent-light-led/how-much-save-with-led.php">蛍光灯からLEDで電気代はいくら安くなる？</a></li>
                                <li><a href="<?php echo $base_url; ?>/fluorescent-light-led/which-is-best.php">LED器具交換とバイパス工事、どちらが最適？</a></li>
                                <li><a href="<?php echo $base_url; ?>/fluorescent-light-led/straight-tube-fluorescent-light-to-led.php">直管蛍光灯をLEDに変えるには？</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo $base_url; ?>/mercury-lamp-led/">水銀灯→LED交換</a></li>
                    </ul>
                </div>
            </div>
            <div class="service-container">
                <figure>
                    <img src="assets/img/distribution_panel.png">
                </figure>
                <div>
                    <h2>分電盤・ブレーカー</h2>
                    <ul class="service-list">
                        <li><a href="<?php echo $base_url; ?>/distribution-board-replacement/">分電盤</a></li>
                        <li><a href="<?php echo $base_url; ?>/breaker-replacement/">ブレーカー</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <div class="breadcrumbs-wrapper">
        <nav class="breadcrumbs">
            <ol>
                <li><a href="<?php echo $base_url; ?>/">ホーム</a></li>
                <li>電気工事の基礎知識</li>
            </ol>
        </nav>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>

</html>
