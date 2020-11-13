{{-- コンポーネント：共通文章エリア内パーツ --}}

@if(!empty($title))
    {{-- タイトル start --}}
        <h4 class={{ config('app_class_css.letters_area__title') }}>
            {{ $title }}
        </h4>
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
