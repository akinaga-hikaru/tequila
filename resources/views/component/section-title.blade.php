{{-- コンポーネント：共通セクションタイトル --}}
<h3
    id="{{ !empty($section_id) ? $section_id : null }}"
    class="
        {{config('app_class_css.section_title')}}
        {{ !empty($js_class) ? $js_class : null }}
    "
>
    {{ $section_name }}
</h3>
