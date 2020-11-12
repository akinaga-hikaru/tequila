{{-- コンポーネント：サイドエリア --}}
<aside
    class="
        {{config('app_class_css.aside')}}
        {{config('app_class_css.contents_frame')}}
    "
>
    {{-- 項目一覧ボタンstart --}}
        @component('component.section-title',[
            'js_class' => config('app_class_js.js_type_toggle'),
            'section_name' => '項目一覧 ▼',
            ])
        @endcomponent
    {{-- 項目一覧ボタンend --}}
    {{ $slot }}
</aside>
