<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="テキーラ飲み比べ紹介サイト">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
            <meta property="og:url" content="">
        <meta property="og:title" content="テキーラ全書">
        <meta property="og:description" content="テキーラ飲み比べ紹介サイト">
        <meta property="og:image" content="/image/tequila/icon/apple-touch-icon.png">
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{ mix('css/tequila/tequila.css') }}">
    </head>
    <body>
        <center>
            <header id="top" class="title">
                <a href="tequila#top">
                    <img src="/image/tequila/tequila-new3.png" alt="テキーラ全書">
                </a>
            </header>
            <h1 id="menu" class="menu">MENU<br>
                <p class="menu"><a href="tequila#tequilatoha">テキーラとは</a></p>
                <p class="menu"><a href="maker_intro" target="blank">ブランド紹介</a></p>
                <p class="menu"><a href="syouhin_1" target="blank">商品紹介</a></p>
                <p class="menu"><a href="tenpo" target="blank">テキーラ取扱店紹介</a></p>
                <p class="menu"><a href="bunken" target="blank">参考文献</a></p>
            </h1>
            <h2 id="tequilatoha">@yield('section')</a></h2>
        </center>

        @yield('main')

        <center>
            <nav>
                <a href="#top">トップに戻る</a>
            </nav>
        </center>
    </body>
</html>
