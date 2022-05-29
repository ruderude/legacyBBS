<?php
$title = 'legacyBBS';
$description = '説明（トップページ）';
$is_home = true; //トップページの判定用の変数
$path = './';
include $path.'common/head.php'; // head.php の読み込み
?>

<!-- 特定のページでのみ読み込むスタイルシートなどがあればここに追加 -->
</head>
<body>
    <div class="wrapper">
        <?php include $path.'common/header.php'; ?> <!-- header.php の読み込み -->
        <div class="container">
            <main>
                <section>
                    <h2>Top page</h2>
                    <p>Lorem ipsum dolor sit amet,...</p>
                </section>
                <section>
                    <h3>Heading</h3>
                    <p>Repellat nihil unde commodi soluta dignissimos dicta...</p>
                </section>
            </main>
        </div>
    </div>
    <?php include $path.'common/footer.php'; ?> <!-- footer.php の読み込み -->
</body>

</html>