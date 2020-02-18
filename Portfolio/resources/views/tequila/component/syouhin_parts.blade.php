

        <div>
            <p>
                <a href="{{ $url }}" alt="{{ $name }} 商品紹介" target="blank">
                    <img src="/image/tequila/{{ $image }}" alt="{{ $name }}" width="300" height="300">
                </a><br>
            </p>
            <p class="syohin">
                <strong class="syohin">{{ $aging }}</strong><br>
                ■ Alc.{!! $contents_alc !!}<br>
                ■ {!! $contents_dest !!}蒸留所<br>
                ■ NOM {!! $contents_nom !!}<br>
                ■ {!! $contents_area !!}<br>
                {!! $contents_review !!}
            </p>
        </div>

