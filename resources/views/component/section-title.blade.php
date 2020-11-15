{{-- コンポーネント：共通セクションタイトル --}}
<h3
    id="{{ !empty($section_id) ? $section_id : '' }}"
    class="
        {{ config('app_class_css.section_title') }}
        {{ !empty($sidemenu_sp) ? config('app_class_css.sidemenu_sp') : '' }}
        {{ !empty($js_class) ? $js_class : '' }}
    "
>
    {{ $section_name }}
</h3>
