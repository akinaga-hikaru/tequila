{{-- コンポーネント：サイドエリア --}}
<aside
    class="
        {{ config('app_class_css.aside') }}
        {{ config('app_class_js.aside') }}
        {{ !empty($scroll_on) ? config('app_class_js.aside_scroll_on') : '' }}
    "
>

    {{-- 項目一覧ボタン start --}}
        @component('component.section-title',[
            'js_class' => config('app_class_js.type_toggle'),
            'section_name' => config('app_layout.aside.section_menu_close'),
            'sidemenu_sp' => 'true'
            ])
        @endcomponent
    {{-- 項目一覧ボタン end --}}

    {{ $slot }}

</aside>
