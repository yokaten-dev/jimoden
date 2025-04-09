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
    <title>運営企業 -ジモデン-</title>
    <link rel="canonical" href="https://jimoden.jp/company/" />
    <meta name="description" content="運営企業ページです。ジモデンは株式会社電恵によって運営されています。会社の基本情報や事業内容についてご確認ください。" />
    <meta name="keywords" content="電気工事,地元,運営企業,ジモデン" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="../assets/img/favicon.webp" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://jimoden.jp/assets/css/ress.min.css" />
    <link rel="stylesheet" href="../assets/css/common.css" />
    <link rel="stylesheet" href="css/company.css" />
</head>

<body id="company">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
    <main class="main">
        <div class="breadcrumbs-wrapper">
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="/">ホーム</a></li>
                    <li>運営企業</li>
                </ol>
            </nav>
        </div>
        <div class="about-company">
            <h1 class="ttl">運営企業</h1>
            <p>電気工事の料金表がある地元の電気工事業者と直接つながる、これがジモデン。<br>まずは知ってもらうこと、知らないからあなたに電気工事を頼めない。そしてスイッチ交換、蛍光灯→LEDなどの単純な工事の料金表があることで、成約率の高い問い合わせを集めることに特化。<br>どんなお得意様も、最初はどこかで初めて出会ってお付き合いが始まったはず。ジモデンはそんな出会いを創り出すサイトです。</p>
            <div class="company-info">
                <p class="list-ttl">会社概要</p>
                <div class="info-list">
                    <dl>
                        <dt>会社名</dt>
                        <dd>株式会社電恵</dd>
                        <dt>設立年月日</dt>
                        <dd>令和3年6月17日</dd>
                        <dt>所在地</dt>
                        <dd>〒487-0024<br>愛知県春日井市大留町3丁目12番地13</dd>
                        <dt>資本金</dt>
                        <dd>300万円</dd>
                        <dt>代表者名</dt>
                        <dd>代表取締役　岸 元気</dd>
                        <dt>事業内容</dt>
                        <dd>電気工事業</dd>
                        <dt>登録電気工事</dt>
                        <dd>愛知県知事登録 第021115号</dd>
                    </dl>
                </div>
            </div>
        </div>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
    <div id="page_top"><a href="#"></a></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>
