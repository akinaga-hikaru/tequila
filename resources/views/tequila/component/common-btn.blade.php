<li class="common-btn common-btn--{{ $btn }} js-btn--{{ $btn }} {{ $js_class_1}} {{ $js_class_2 }}" {{ $hidden }}>
    <a @if(!empty($link))href="{{ $link }}"@endif>
        {{ $text }}
        @if(!empty($small_text))
            <br>
            <span class="small-text">{{ $small_text }}</span>
        @endif
    </a>
</li>
