<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="テキーラ商品紹介">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta property="og:url" content="https://moon-gm.github.io/tequipedia">
        <meta property="og:title" content="テキーラ全書～Tequipedia～">
        <meta property="og:description" content="各種テキーラを飲み比べてデータ化したサイト。テキーラの基礎知識も記載しているため、入門用に。">
        <meta property="og:image" content="./image/icon/tequila-icon.png">
        <title>@yield('title')</title>
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
        <script
            src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous">
        </script>
    </head>
    <body class="@yield('body_class')">
        <div class="header-area center">
            <header id="top" class="header-area__bg-frame center">
                <a href="/">
                    <h1 class="header-area__main-logo">テキーラ全書</h1><br>
                    <h1 class="header-area__sub-logo">〜Tequipedia〜</h1>
                </a>
                <p class="global-menu__btn-sp js-global-menu__btn-sp hide-pc">≡</p>
                <ul class="global-menu js-global-menu hide-sp">
                    <li class="global-menu__btn"><a href="/">テキーラとは</a></li>
                    <li class="global-menu__btn"><a href="syouhin">商品紹介</a></li>
                    <li class="global-menu__btn"><a href="tenpo">取扱店紹介</a></li>
                    <li class="global-menu__btn"><a href="bunken">参考文献</a></li>
                </ul>
            </header>
        </div>
        <div>
            <h2 class="section-1">@yield('section')</a></h2>
        </div>

        @yield('main')

        <footer class="footer-area center">
            <div class="footer-area__top-btn">
                <a href="#top">TOP</a>
            </div>
        </footer>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
