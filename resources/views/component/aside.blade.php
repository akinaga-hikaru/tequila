{{-- コンポーネント：サイドエリア --}}
<aside class={{ config('app_class_css.aside') }}>

    {{-- 項目一覧ボタン start --}}
        @component('component.section-title',[
            'js_class' => config('app_class_js.js_type_toggle'),
            'section_name' => '項目一覧 ▼',
            ])
        @endcomponent
    {{-- 項目一覧ボタン end --}}

    {{ $slot }}

</aside>
