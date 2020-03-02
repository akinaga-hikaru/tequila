<div class="flex-box syouhin-container nom{{ $contents_nom }}_ js-title_{{ $class_name }}">
    <p>
        <a href="{{ $url }}" alt="{{ $alt_name }} 商品紹介" target="_blank">
            <img src="/image/tequila/{{ $image }}" alt="{{ $alt_name }}">
        </a><br>
    </p>
    <p class="letters-area">
        <strong class="letters-title">{{ $aging }}</strong><br>
        ■ 度数：{!! $contents_alc !!}<br>
        ■ 蒸留所：{!! $contents_dest !!}<br>
        ■ 蒸留所番号：NOM {!! $contents_nom !!}<br>
        ■ 生産地域：{!! $contents_area !!}<br>
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

