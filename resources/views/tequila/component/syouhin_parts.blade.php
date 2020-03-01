<div class="flex-box syouhin-container nom{{ $contents_nom }}_ js-title_{{ $class_name }}">
    <p>
        <a href="{{ $url }}" alt="{{ $alt_name }} 商品紹介" target="_blank">
            <img src="/image/tequila/{{ $image }}" alt="{{ $alt_name }}" width="300" height="300">
        </a><br>
    </p>
    <p class="letters-area">
        <strong class="letters-title">{{ $aging }}</strong><br>
        ■ ALC：{!! $contents_alc !!}<br>
        ■ DEST：{!! $contents_dest !!}<br>
        ■ DEST.NUM：NOM {!! $contents_nom !!}<br>
        ■ AREA：{!! $contents_area !!}<br>
        @if (!empty($contents_info))
            ■ INFO：{!! $contents_info !!}<br>
        @endif
        @if (!empty($contents_review_flavor))
            ■ FLAVOR：{!! $contents_review_flavor !!}<br>
        @endif
        @if (!empty($contents_review_top))
            ■ TOP：{!! $contents_review_top !!}<br>
        @endif
        @if (!empty($contents_review_after))
            ■ AFTER：{!! $contents_review_after !!}
        @endif
    </p>
</div>

