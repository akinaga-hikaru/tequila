@extends('tequila.layout.layout')

@section('title','商品紹介')
@section('section','商品紹介')
@section('body_class','syouhin')

@section('main')

<div class="flex-box">
    <aside class="contents-frame">
        <p class="list-btn list-btn--syouhin-type maker-list"><a>ブランド別</a></p>
        <p class="list-btn list-btn--syouhin-type dest-list"><a>蒸留所別</a></p>
        {{-- ブランドリスト --}}
            <ul class="maker">
                @foreach ($titles as $title)
                    <li class="list-btn js-maker-list js-title_{{ $title['class'] }} " hidden>
                        <a href="#syouhin_title">{{ $title['title'] }}</a>
                    </li>
                @endforeach
            </ul>
        {{-- 蒸留所リスト --}}
            <ul class="dest">
                @foreach ($noms as $nom)
                    <li class="list-btn js-dest-list nom{{ $nom }}_" hidden>
                        <a href="#syouhin_title">NOM {{ $nom }}</a>
                    </li>
                @endforeach
            </ul>
    </aside>
    <main class="contents-frame">
        {{-- ブランドタイトル --}}
            @component('tequila.component.syouhin_container',[
                'syouhin_id' => '',
                'syouhin_name' => '選択すると表示します',
                ])
            @endcomponent
        {{-- 商品コンテナ --}}
            @foreach ($syouhin_data_all as $content)
                    @component('tequila.component.syouhin_parts',[
                        'class_name' => $content->class_name,
                        'title_name' => $content->title_name,
                        'alt_name' => $content->alt_name,
                        'url' => $content->url,
                        'image' => $content->image,
                        'aging' => $content->aging,
                        'contents_alc' => $content->contents_alc,
                        'contents_dest' => $content->contents_dest,
                        'contents_nom' => $content->contents_nom,
                        'contents_area' => $content->contents_area,
                        'contents_info' => $content->contents_info,
                        'contents_review_flavor' => $content->contents_review_flavor,
                        'contents_review_top' => $content->contents_review_top,
                        'contents_review_after' => $content->contents_review_after,
                    ])
                    @endcomponent
            @endforeach

    </main>
</div>
@endsection
