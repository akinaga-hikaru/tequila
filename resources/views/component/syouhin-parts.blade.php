{{-- コンポーネント：商品コンテナパーツ --}}
<div
    class="
        {{config('app_class_css.flex_box')}}
        {{config('app_class_css.syouhin_container')}}
        {{config('app_class_js.js_syouhin_container')}}
        {{config('app_class_js.js_dest')}}_{{ $contents_nom }}_
        {{config('app_class_js.js_maker')}}_{{$title_id}}_
        {{config('app_class_js.js_local')}}_{{ $contents_local_id }}_
        {{config('app_class_js.js_area')}}_{{ $contents_area_id }}_
        {{config('app_class_js.js_aging')}}_{{ $aging_sort }}_
    "
>
    <div class={{config('app_class_css.image_area')}}>
        <a
            href={{ $url }}
            alt="{{ $alt_name }} 商品紹介"
            target="_blank"
        >
            <img
                src="/image/syouhin/{{ $image }}"
                alt={{ $alt_name }}
            >
        </a>
    </div>
    <div
        class="
            {{config('app_class_css.letters_area')}}
            {{config('app_class_css.scroll_area')}}
        "
    >
        <div class={{config('app_class_css.letters_area__scroll_frame')}}>
            <div>
                <h4 class={{config('app_class_css.letters_area__title')}}>
                    {{ $title_name }} / {{ $aging }}
                </h4>
            </div>
            <div>
                <p class={{config('app_class_css.letters_area__paragraph')}}>
                    ■ 度数：{!! $contents_alc !!}<br>
                    ■ 蒸留所：{!! $contents_dest !!}<br>
                    ■ 蒸留所番号：NOM {!! $contents_nom !!}<br>
                    ■ 生産地域：{!! $contents_local !!} / {!! $contents_area !!}<br>
                    @if (!empty($contents_info))
                        ■ 情報：{!! $contents_info !!}<br>
                    @endif
                    @if (!empty($contents_review_flavor))
                        ■ 香り：{!! $contents_review_flavor !!}<br>
                    @endif
                    @if (!empty($contents_review_top))
                        ■ 味：{!! $contents_review_top !!}<br>
                    @endif
                    @if (!empty($contents_review_after))
                        ■ 余韻：{!! $contents_review_after !!}
                    @endif
                </p>
            </div>
        </div>
    </div>
</div>
