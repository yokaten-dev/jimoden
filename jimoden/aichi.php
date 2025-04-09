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
    <title>愛知県の電気工事屋さんを探す -ジモデン-</title>
    <link rel="canonical" href="https://jimoden.jp/jimoden/aichi.php" />
    <meta name="description" content="ジモデンは電気工事の料金表がある地元の電気工事業者を探すサイト。スイッチ交換、コンセント交換、蛍光灯・水銀灯からＬＥＤヘ交換、分電盤、ブレーカーの交換など、各種電気工事の料金をわかりやすく掲載しています。" />
    <meta name="keywords" content="電気工事,地元" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="format-detection" content="telephone=no, address=no" />
    <link rel="icon" href="../assets/img/favicon.webp" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://jimoden.jp/assets/css/ress.min.css" />
    <link rel="stylesheet" href="/assets/css/common.css" />
    <link rel="stylesheet" href="/jimoden/css/search.css" />
</head>

<body id="search-prefecture">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
    <main class="main">
        <div class="breadcrumbs-wrapper">
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="/">ホーム</a></li>
                    <li><a href="/jimoden/search.php">事業者を探す</a></li>
                    <li>愛知県</li>
                </ol>
            </nav>
        </div>
        <div class="search-container">
            <div class="wrapper">
                <p class="ttl-sub">地元の電気工事屋さんを探す</p>
                <a class="back-link" href="search.php">戻る</a>
                <h1 class="ttl">愛知県</h1>
                <!--
                <div class="search-area">
                    <p class="area-ttl">か行</p>
                    <ul class="area-list">
                        <li><a href="#">春日井市</a></li>
                    </ul>
                </div>
                -->
                <div class="search-area">
                    <p class="area-ttl">な行</p>
                    <ul class="area-list">
                        <li><a href="../contractor/aichi/key-nex/">名古屋市南区</a></li>
                        <li><a href="../contractor/aichi/inuden/">名古屋名東区</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
    <div id="page_top"><a href="#"></a></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="/assets/js/script.js"></script>
</body>

</html>
