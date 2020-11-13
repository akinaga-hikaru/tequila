{{-- コンポーネント：共通メッセージ --}}
<div
    class="
        {{ config('app_class_css.message') }}
        {{ !empty($js_message) ?? config('app_class_js.js_syouhin_message') }}
        {{ !empty($center) ?? config('app_class_css.center') }}
    "
>
    {{ $slot }}
</div>
