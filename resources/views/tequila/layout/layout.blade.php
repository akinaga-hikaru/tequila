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
        <link rel="stylesheet" type="text/css" href="{{ mix('css/tequila.css') }}">
        <script
            src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous">
        </script>
    </head>
    <body class="@yield('body_class')">
        <center>
            <header id="top" class="title">
                <a href="tequila">
                    <img src="/image/tequila/tequila-new3.png" alt="テキーラ全書">
                </a>
            </header>
            <h1 id="menu" class="menu fixed">MENU<br>
                <p class="menu"><a href="tequila">TOP</a></p>
                <p class="menu"><a href="syouhin" target="blank">ブランド別商品紹介</a></p>
                <p class="menu"><a href="tenpo" target="blank">取扱店紹介</a></p>
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
        <script src="{{ mix('js/app.js') }}"></script>
        @stack('scripts')
    </body>
</html>
