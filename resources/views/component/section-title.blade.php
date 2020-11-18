{{-- コンポーネント：共通セクションタイトル --}}
<h3
    id="{{ !empty($section_id) ? $section_id : '' }}"
    class="
        {{ config('app_class_css.section_title') }}
        {{ !empty($sidemenu_sp) ? config('app_class_css.sidemenu_sp') : '' }}
        {{ !empty($js_class) ? $js_class : '' }}
    "
>

    <span
        class="
            {{ config('app_class_css.section_text_main')}}
            {{ config('app_class_js.section_text_main')}}
        "
    >
        {{ $section_name }}
    </span>
    <span
        class="
            {{ config('app_class_css.section_text_sub')}}
            {{ config('app_class_js.section_text_sub')}}
        "
    ></span>

</h3>
