{{-- コンポーネント：共通メッセージ --}}
<div
    class="
        {{ config('app_class_css.message') }}
        {{ !empty($js_message) ? config('app_class_js.syouhin_message') : ''}}
        {{ !empty($center) ? config('app_class_css.center') : ''}}
        {{ !empty($input_error) ? config('app_class_css.input_error') : ''}}
        {{ !empty($input_error_top) ? config('app_class_css.input_error_top') : ''}}
    "
>
    {{ $slot }}
</div>
