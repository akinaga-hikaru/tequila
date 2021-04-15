<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content={{ config('app_layout.meta.description') }}>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta property="og:url" content={{ config('app_layout.meta.url') }}>
        <meta property="og:title" content={{ config('app_layout.main_title') }}>
        <meta property="og:description" content={{ config('app_layout.meta.description') }}>
        <meta property="og:image" content={{ config('app_layout.meta.image') }}>
        <title>@yield('title') | {{ config('app_layout.main_title') }}</title>
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
        <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">
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
                <ul
                    id="top"
                    class={{ config('app_class_css.header_area__bg_frame') }}
                >

                    {{-- タイトルエリア start --}}
                        <li class={{ config('app_class_css.header_area__main_logo') }}>
                            <a href="/">
                                {{ config('app_layout.main_title') }}
                            </a>
                        </li>
                    {{-- タイトルエリア end --}}

                    {{-- SPメニューボタン start --}}
                        <li
                            class="
                                {{ config('app_class_css.global_menu__btn_sp') }}
                                {{ config('app_class_css.hide_pc') }}
                                {{ config('app_class_js.global_menu__btn_sp') }}
                            "
                        >
                            ≡
                        </li>
                    {{-- SPメニューボタン end --}}

                    {{-- グローバルメニュー start --}}
                        <ul
                            class="
                                {{ config('app_class_css.global_menu') }}
                                {{ config('app_class_css.hide_sp') }}
                                {{ config('app_class_js.global_menu') }}
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

                </ul>
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

        {{-- スクリプトエリア start --}}
            <script>

                // configで設定のclassNameをJSに渡す
                const js = @json(config('app_class_js'));
                for(let key in js) {
                    js[key] = '.' + js[key];
                }

                // サイドエリアの文言
                const aside_text = @json(config('app_layout.aside'));

            </script>
            <script src="{{ mix('js/app.js') }}"></script>
        {{-- スクリプトエリア end --}}

    </body>
</html>
