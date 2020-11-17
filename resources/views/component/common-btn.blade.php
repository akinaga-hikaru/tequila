{{-- コンポーネント：共通ボタン --}}
<li
    class="
        {{ config('app_class_css.common_btn') }}
        {{ config('app_class_css.common_btn') }}--{{ $btn }}
        {{ config('app_class_js.btn') }}--{{ $btn }}
        {{ !empty($hide_sp) ? config('app_class_css.hide_sp') : '' }}
        {{ !empty($js_class_1) ? $js_class_1 : '' }}
        {{ !empty($js_class_2) ? $js_class_2 : '' }}
        {{ !empty($js_class_3) ? $js_class_3 : '' }}
    "
    {{ $hidden ? 'hidden' : '' }}
>
    <a {{ !empty($link) ? 'href=' . $link : '' }}>
        @switch($btn)
            @case('type')
                ◆
                @break
            @case('list')
                ■
                @break
            @case('down')
                ・
                @break
        @endswitch
        {{ $text }}
        @if(!empty($small_text))
            <br>
            <span class={{ config('app_class_css.small_text') }}>
                {{ $small_text }}
            </span>
        @endif
    </a>
</li>
