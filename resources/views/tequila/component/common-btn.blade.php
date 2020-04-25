<li class="common-btn common-btn--{{ $btn }} js-btn--{{ $btn }} {{ $js_class_1}} {{ $js_class_2 }} @if(!empty($js_class_3)){{ $js_class_3 }}@endif" {{ $hidden }}>
    <a {{ !empty($link) ? 'href=' . $link : '' }}>
        {{ $text }}
        @if(!empty($small_text))
            <br>
            <span class="small-text">{{ $small_text }}</span>
        @endif
    </a>
</li>
