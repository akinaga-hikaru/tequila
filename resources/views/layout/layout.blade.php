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

        {{-- ヘッダーエリア start --}}
            <header
                class="
                    {{ config('app_class_css.header_area') }}
                    {{ config('app_class_css.center') }}
                "
            >
                <div
                    id="top"
                    class={{ config('app_class_css.header_area__bg_frame') }}
                >

                    {{-- タイトルエリア start --}}
                        <h1 class={{ config('app_class_css.header_area__main_logo') }}>
                            <a href="/">
                                {{ config('app_layout.main_title') }}
                            </a>
                        </h1>
                    {{-- タイトルエリア end --}}

                    {{-- SPメニューボタン start --}}
                        <p
                            class="
                                {{ config('app_class_css.global_menu__btn_sp') }}
                                {{ config('app_class_css.hide_pc') }}
                                {{ config('app_class_js.js_global_menu__btn_sp') }}
                            "
                        >
                            ≡
                        </p>
                    {{-- SPメニューボタン end --}}

                    {{-- グローバルメニュー start --}}
                        <ul
                            class="
                                {{ config('app_class_css.global_menu') }}
                                {{ config('app_class_css.hide_sp') }}
                                {{ config('app_class_js.js_global_menu') }}
                            "
                        >
                            @foreach (config('app_layout.global_menu') as $key => $menu)
                                <li class={{ config('app_class_css.global_menu__btn') }}>
                                    <a href={{ $key }}>
                                        {{ $menu }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    {{-- グローバルメニュー end --}}

                </div>
            </header>
        {{-- ヘッダーエリア end --}}

        {{-- コンテンツエリア start --}}
            @yield('contents')
        {{-- コンテンツエリア end --}}

        {{-- フッターエリア start --}}
            <footer
                class="
                    {{ config('app_class_css.footer_area') }}
                    {{ config('app_class_css.center') }}
                "
            >
                {{ config('app_layout.footer_text') }}
            </footer>
        {{-- フッターエリア end --}}

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
