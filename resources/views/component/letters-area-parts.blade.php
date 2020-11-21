{{-- コンポーネント：共通文章エリア内パーツ --}}

@if(!empty($title))
    {{-- タイトル start --}}
        <h2 class={{ config('app_class_css.letters_area__title') }}>
            {{ $title }}
        </h2>
    {{-- タイトル end --}}
@endif

@if(!empty($paragraph))
    {{-- 段落 start --}}
        <p
            class="
                {{ config('app_class_css.letters_area__paragraph') }}
                {{ !empty($indent) ? config('app_class_css.indent') : '' }}
            "
        >
            {!! $paragraph !!}
        </p>
    {{-- 段落 end --}}
@endif

@if(!empty($table))
    {{-- テーブル start --}}
        <div class={{ config('app_class_css.scroll_area') }}>
            <div
                class="
                {{ config('app_class_css.table_area__scroll_frame') }}
                    {{ !empty($indent) ? config('app_class_css.indent') : '' }}
                "
            >
                <table class={{ config('app_class_css.table_area') }}>
                    {{ $slot }}
                </table>
            </div>
        </div>
    {{-- テーブル end --}}
@endif

@if(!empty($image))
    {{-- 画像エリア start --}}
    <div
        class="
            {{ config('app_class_css.flex_box') }}
            {{ config('app_class_css.center') }}
        "
    >
        {{ $slot }}
    </div>
    {{-- 画像エリア end --}}
@endif
