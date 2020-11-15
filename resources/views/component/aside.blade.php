{{-- コンポーネント：サイドエリア --}}
<aside
    class="
        {{ config('app_class_css.aside') }}
        {{ config('app_class_js.js_aside') }}
    "
>

    {{-- 項目一覧ボタン start --}}
        @component('component.section-title',[
            'js_class' => config('app_class_js.js_type_toggle'),
            'section_name' => '▼',
            'sidemenu_sp' => 'true'
            ])
        @endcomponent
    {{-- 項目一覧ボタン end --}}

    {{ $slot }}

</aside>
