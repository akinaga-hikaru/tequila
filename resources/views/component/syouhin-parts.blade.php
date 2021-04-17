{{-- コンポーネント：商品コンテナ --}}
<div
    class="
        {{ config('app_class_css.flex_box') }}
        {{ config('app_class_css.syouhin_container') }}
        {{ config('app_class_js.syouhin_container') }}
        {{ config('app_class_js.dest') }}_{{ $dest_nom }}_
        {{ config('app_class_js.brand') }}_{{ $brand_id }}_
        {{ config('app_class_js.local') }}_{{ $local_id }}_
        {{ config('app_class_js.area') }}_{{ $area_id }}_
        {{ config('app_class_js.aging') }}_{{ $aging_sort }}_
    "
>
    {{-- 画像エリア start --}}
        <div class={{ config('app_class_css.image_area') }}>
            <img
                src={{ config('app_syouhin.container.image.base_dir') . $image }}
                alt={{ $syouhin_id }}
            >
            <a
                href={{ $syouhin_url }}
                target="_blank"
                class={{ config('app_class_css.external_link') }}
            >
                {{ config('app_syouhin.container.image.link_text') }}
            </a>
        </div>
    {{-- 画像エリア end --}}

    {{-- 文章エリア start --}}
        <div class={{ config('app_class_css.letters_area') }}>
            <div class={{ config('app_class_css.letters_area__scroll_frame') }}>

                {{-- 商品タイトル start --}}
                    <div>
                        <h2 class={{ config('app_class_css.letters_area__title') }}>
                            {{ $brand_name }} / {{ $aging_name }}
                        </h2>
                    </div>
                {{-- 商品タイトル end --}}

                {{-- 商品内容 start --}}
                    <div>
                        <p class={{ config('app_class_css.letters_area__paragraph') }}>
                            ■ {{ config('app_syouhin.container.alc') }}：{!! $alc_degree !!} / {!! $mix_degree !!}<br>
                            ■ {{ config('app_syouhin.container.dest') }}：{!! $dest_name_kana !!}<br>
                            ■ {{ config('app_syouhin.container.nom') }}：{!! 'NOM ' . $dest_nom !!}<br>
                            ■ {{ config('app_syouhin.container.local') }}：{!! $local_name_kana !!}{!! $area_name_kana !!}<br>
                            @if (!empty($information))
                                ■ {{ config('app_syouhin.container.info') }}：{!! $information !!}<br>
                            @endif
                            @if (!empty($review_flavor))
                                ■ {{ config('app_syouhin.container.flavor') }}：{!! $review_flavor !!}<br>
                            @endif
                            @if (!empty($review_top))
                                ■ {{ config('app_syouhin.container.top') }}：{!! $review_top !!}<br>
                            @endif
                            @if (!empty($review_after))
                                ■ {{ config('app_syouhin.container.after') }}：{!! $review_after !!}<br>
                            @endif
                        </p>
                    </div>
                {{-- 商品内容 end --}}

            </div>
        </div>
    {{-- 文章エリア end --}}

</div>

