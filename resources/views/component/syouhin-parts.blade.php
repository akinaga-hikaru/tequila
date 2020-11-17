{{-- コンポーネント：商品コンテナパーツ --}}
<div
    class="
        {{ config('app_class_css.flex_box') }}
        {{ config('app_class_css.syouhin_container') }}
        {{ config('app_class_js.syouhin_container') }}
        {{ config('app_class_js.dest') }}_{{ $contents_nom }}_
        {{ config('app_class_js.maker') }}_{{ $title_id }}_
        {{ config('app_class_js.local') }}_{{ $contents_local_id }}_
        {{ config('app_class_js.area') }}_{{ $contents_area_id }}_
        {{ config('app_class_js.aging') }}_{{ $aging_sort }}_
    "
>
    {{-- 画像エリア start --}}
        <div class={{ config('app_class_css.image_area') }}>
            <a
                href={{ $url }}
                alt="{{ $alt_name }}"
                target="_blank"
            >
                <img
                    src={{ config('app_syouhin.container.image.base_dir') . $image }}
                    alt={{ $alt_name }}
                >
            </a>
        </div>
    {{-- 画像エリア end --}}

    {{-- 文章エリア start --}}
        <div class={{ config('app_class_css.letters_area') }}>
            <div class={{ config('app_class_css.letters_area__scroll_frame') }}>

                {{-- 商品タイトル start --}}
                    <div>
                        <h4 class={{ config('app_class_css.letters_area__title') }}>
                            {{ $title_name }} / {{ $aging }}
                        </h4>
                    </div>
                {{-- 商品タイトル end --}}

                {{-- 商品内容 start --}}
                    <div>
                        <p class={{ config('app_class_css.letters_area__paragraph') }}>
                            ■ {{ config('app_syouhin.container.alc') }}：{!! $contents_alc !!}<br>
                            ■ {{ config('app_syouhin.container.dest') }}：{!! $contents_dest !!}<br>
                            ■ {{ config('app_syouhin.container.nom') }}：{!! 'NOM ' . $contents_nom !!}<br>
                            ■ {{ config('app_syouhin.container.local') }}：{!! $contents_local !!} / {!! $contents_area !!}<br>
                            @if (!empty($contents_info))
                                ■ {{ config('app_syouhin.container.info') }}：{!! $contents_info !!}<br>
                            @endif
                            @if (!empty($contents_review_flavor))
                                ■ {{ config('app_syouhin.container.flavor') }}：{!! $contents_review_flavor !!}<br>
                            @endif
                            @if (!empty($contents_review_top))
                                ■ {{ config('app_syouhin.container.top') }}：{!! $contents_review_top !!}<br>
                            @endif
                            @if (!empty($contents_review_after))
                                ■ {{ config('app_syouhin.container.after') }}：{!! $contents_review_after !!}<br>
                            @endif
                        </p>
                    </div>
                {{-- 商品内容 end --}}

            </div>
        </div>
    {{-- 文章エリア end --}}

</div>

