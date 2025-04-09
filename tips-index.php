<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- Google tag (gtag.js) -->
    <script>
        if (location.hostname === 'jimoden.jp') {
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            var s = document.createElement('script');
            s.src = 'https://www.googletagmanager.com/gtag/js?id=G-8JGM5XKBDS';
            s.async = true;
            s.onload = () => {
                gtag('js', new Date());
                gtag('config', 'G-8JGM5XKBDS');
            };
            document.head.appendChild(s);
        }
    </script>
    <meta charset="utf-8" />
    <title>電気工事の基礎知識 -ジモデン-</title>
    <link rel="canonical" href="https://jimoden.jp/tips-index.php" />
    <meta name="description" content="ジモデンは電気工事の料金表がある地元の電気工事業者を探すサイト。スイッチ交換、コンセント交換、蛍光灯・水銀灯からＬＥＤヘ交換、分電盤、ブレーカーの交換など、各種電気工事の料金をわかりやすく掲載しています。" />
    <meta name="keywords" content="電気工事,地元" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="assets/img/favicon.webp" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/ress.min.css" />
    <link rel="stylesheet" href="assets/css/common.css" />
    <link rel="stylesheet" href="assets/css/tips-index.css" />
</head>

<body id="tips-index">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
    <main class="main">
        <div class="breadcrumbs-wrapper">
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="/">ホーム</a></li>
                    <li>電気工事の基礎知識</li>
                </ol>
            </nav>
        </div>
        <div class="tips-index">
            <h1>電気工事の基礎知識</h1>
            <div class="service-container">
                <figure>
                    <img src="assets/img/switch.png">
                </figure>
                <div>
                    <h2>スイッチ</h2>
                    <ul class="service-list">
                        <li><a href="/lighting-switch/">電気スイッチ交換</a>
                            <ul class="service-list">
                                <li><a href="/lighting-switch/broken.php">電気スイッチ故障の原因と交換費用</a></li>
                            </ul>
                        </li>
                        <li><a href="/fan-switch/">換気扇タイマースイッチ交換</a></li>
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
                        <li><a href="/outlet-replacement/">コンセント交換</a></li>
                        <li><a href="/outlet-expand/">コンセント増設</a></li>
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
                        <li><a href="/downlight/">LEDでダウンライト</a></li>
                        <li><a href="/fluorescent-light-led/">蛍光灯→LED交換</a>
                            <ul class="service-list">
                                <li><a href="/fluorescent-light-led/fluorescent-led.php">蛍光灯からLEDへ交換する前に知っておきたい全知識！</a></li>
                                <li><a href="/fluorescent-light-led/how-much-save-with-led.php">蛍光灯からLEDで電気代はいくら安くなる？</a></li>
                                <li><a href="/fluorescent-light-led/which-is-best.php">LED器具交換とバイパス工事、どちらが最適？</a></li>
                                <li><a href="/fluorescent-light-led/straight-tube-fluorescent-light-to-led.php">直管蛍光灯をLEDに変えるには？</a></li>
                            </ul>
                        </li>
                        <li><a href="/mercury-lamp-led/">水銀灯→LED交換</a></li>
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
                        <li><a href="/distribution-board-replacement/">分電盤</a></li>
                        <li><a href="/breaker-replacement/">ブレーカー</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
    <div id="page_top"><a href="#"></a></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
