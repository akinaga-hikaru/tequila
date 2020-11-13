{{-- コンポーネント：メインエリア --}}
<main
    class="
        {{ empty($main) ? config('app_class_css.main') : '' }}
        {{ config('app_class_css.contents_frame') }}
    "
>
    {{ $slot }}
</main>
