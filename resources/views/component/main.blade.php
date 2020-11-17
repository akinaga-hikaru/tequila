{{-- コンポーネント：メインエリア --}}
<main
    class="
        {{ config('app_class_css.main') }}
        {{  !empty($main) ? config('app_class_css.main_no_aside') : '' }}
    "
>
    {{ $slot }}
</main>
