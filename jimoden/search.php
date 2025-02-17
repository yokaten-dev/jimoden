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
    <title>地元の電気工事屋さんを探す（都道府県） -ジモデン-</title>
    <meta name="description" content="ジモデンは電気工事の料金表がある地元の電気工事業者を探すサイト。スイッチ交換、コンセント交換、蛍光灯・水銀灯からＬＥＤヘ交換、分電盤、ブレーカーの交換など、各種電気工事の料金をわかりやすく掲載しています。" />
    <meta name="keywords" content="電気工事,地元" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="../assets/img/favicon.webp" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
    <link rel="stylesheet" href="../assets/css/common.css" />
    <link rel="stylesheet" href="css/search.css" />
</head>

<body id="search">
    <?php include '../includes/header.php'; ?>
    <main class="main">
        <div class="search-container">
            <div class="wrapper">
                <!--<a href="#" class="back-button">戻る</a>-->
                <h1 class="ttl">地元の電気工事屋さんを探す</h1>
                <div class="search-area">
                    <p class="area-ttl">北海道・東北</p>
                    <ul class="area-list">
                        <li><span>北海道</span></li>
                        <li><span>青森県</span></li>
                        <li><span>岩手県</span></li>
                        <li><span>宮城県</span></li>
                        <li><span>秋田県</span></li>
                        <li><span>山形県</span></li>
                        <li><span>福島県</span></li>
                    </ul>
                </div>
                <div class="search-area">
                    <p class="area-ttl">関東</p>
                    <ul class="area-list">
                        <li><span>東京都</span></li>
                        <li><span>神奈川県</span></li>
                        <li><span>埼玉県</span></li>
                        <li><span>千葉県</span></li>
                        <li><span>茨城県</span></li>
                        <li><span>栃木県</span></li>
                        <li><span>群馬県</span></li>
                    </ul>
                </div>
                <div class="search-area">
                    <p class="area-ttl">中部</p>
                    <ul class="area-list">
                        <li><span>新潟県</span></li>
                        <li><span>富山県</span></li>
                        <li><span>石川県</span></li>
                        <li><span>福井県</span></li>
                        <li><span>山梨県</span></li>
                        <li><span>長野県</span></li>
                        <li><span>岐阜県</span></li>
                        <li><span>静岡県</span></li>
                        <li><a href="aichi.php">愛知県</a></li>
                    </ul>
                </div>
                <div class="search-area">
                    <p class="area-ttl">近畿</p>
                    <ul class="area-list">
                        <li><span>大阪府</span></li>
                        <li><span>兵庫県</span></li>
                        <li><span>京都府</span></li>
                        <li><span>滋賀県</span></li>
                        <li><span>奈良県</span></li>
                        <li><span>和歌山県</span></li>
                        <li><span>三重県</span></li>
                    </ul>
                </div>
                <div class="search-area">
                    <p class="area-ttl">中国</p>
                    <ul class="area-list">
                        <li><span>鳥取県</span></li>
                        <li><span>島根県</span></li>
                        <li><span>岡山県</span></li>
                        <li><span>広島県</span></li>
                        <li><span>山口県</span></li>
                    </ul>
                </div>
                <div class="search-area">
                    <p class="area-ttl">四国</p>
                    <ul class="area-list">
                        <li><span>徳島県</span></li>
                        <li><span>香川県</span></li>
                        <li><span>愛媛県</span></li>
                        <li><span>高知県</span></li>
                    </ul>
                </div>
                <div class="search-area">
                    <p class="area-ttl">九州・沖縄</p>
                    <ul class="area-list">
                        <li><span>福岡県</span></li>
                        <li><span>佐賀県</span></li>
                        <li><span>長崎県</span></li>
                        <li><span>熊本県</span></li>
                        <li><span>大分県</span></li>
                        <li><span>宮崎県</span></li>
                        <li><span>鹿児島県</span></li>
                        <li><span>沖縄県</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <div class="breadcrumbs-wrapper">
        <nav class="breadcrumbs">
            <ol>
                <li><a href="<?php echo $base_url; ?>/">ホーム</a></li>
                <li>事業者を探す</li>
            </ol>
        </nav>
    </div>
    <?php include '../includes/footer.php'; ?>
</body>

</html>
