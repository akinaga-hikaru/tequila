{{-- コンポーネント：メインエリア --}}
<main class={{ empty($main) ? config('app_class_css.main') : $main == 'no_aside' ? config('app_class_css.main_no_aside') : '' }}>
    {{ $slot }}
</main>
