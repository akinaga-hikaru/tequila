～<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="テキーラ商品紹介">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta property="og:url" content="https://moon-gm.github.io/tequipedia">
        <meta property="og:title" content="テキーラ全書～Tequipedia～">
        <meta property="og:description" content="テキーラ商品紹介">
        <meta property="og:image" content="./image/tequila/icon/tequila-icon.png">
        <title>@yield('title')</title>
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ mix('css/tequila.css') }}">
        <script
            src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous">
        </script>
    </head>
    <body class="@yield('body_class')">
        <div class="center">
            <header id="top" class="title center">
                <a href="tequila">
                    <p class="main-title">テキーラ全書</p><br>
                    <p class="sub-title">〜Tequipedia〜</p>
                </a>

            <div class="global-menu hide-pc">
                <p class="global-menu-btn js-menu-btn--open">Menu</p>
            </div>
            <div class="global-menu js-global-menu-list hide-sp">
                <p class="global-menu-btn"><a href="/">テキーラとは</a></p>
                <p class="global-menu-btn"><a href="syouhin">商品紹介</a></p>
                <p class="global-menu-btn"><a href="tenpo">取扱店紹介</a></p>
                <p class="global-menu-btn"><a href="bunken">参考文献</a></p>
            </div>
        </header>
            <h2 id="tequilatoha">@yield('section')</a></h2>
        </div>

        @yield('main')

        <center>
            <nav class="nav-top-btn">
                <a href="#top">トップに戻る</a>
            </nav>
        </center>
        <script src="{{ mix('js/app.js') }}"></script>
        @stack('scripts')
    </body>
</html>
