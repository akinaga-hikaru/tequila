{{-- コンポーネント：共通文章エリア内パーツ --}}
@if(!empty($title))
    <h4 class={{ config('app_class_css.letters_area__title') }}>
        {{ $title }}
    </h4>
@endif
@if(!empty($paragraph))
    <p
        class="
            {{ config('app_class_css.letters_area__paragraph') }}
            {{ !empty($indent) ? config('app_class_css.indent') : ''}}
        "
    >
        {!! $paragraph !!}
    </p>
@endif
