<div class="flex-box syouhin-container js-dest_{{ $contents_nom }} js-maker_{{ $title_id }} js-local_{{ $contents_local_id }} js-aging_{{ $aging_sort }}">
    <div class="image-area">
        <a href="{{ $url }}" alt="{{ $alt_name }} 商品紹介" target="_blank">
            <img src="/image/tequila/{{ $image }}" alt="{{ $alt_name }}">
        </a>
    </div>
    <div class="letters-area scroll-area">
        <div class="letters-area__scroll-frame">
            <div>
                <h4 class="letters-area__title">{{ $title_name }} / {{ $aging }}</h4>
            </div>
            <div>
                <p class="letters-area__paragraph">
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

