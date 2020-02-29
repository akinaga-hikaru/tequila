@extends('tequila.layout.layout')

@section('title','商品紹介')
@section('section','商品紹介')
@section('body_class','syouhin')

@section('main')

<div class="box">
    <aside>
        <p class="list list-type maker-list"><a>ブランド別</a></p>
        <p class="list list-type dest-list"><a>蒸留所別</a></p>
        <p class="maker">
        @foreach ($syouhin_titles as $title)
            <p class="list js-maker-list {{ $title[2] }} js-title_{{ $title[0] }} " hidden><a href=#tequilatoha>{{ $title[1] }}</a></p>
        @endforeach
        </p>
        <p class="dest">
        @foreach ($noms as $dest_number)
            <p class="list js-dest-list nom{{ $dest_number[2] }}_" hidden><a href="#tequilatoha">NOM {{ $dest_number[2] }}</a></p>
        @endforeach
        </p>
    </aside>
    <main>
        {{-- ブランドタイトル --}}
            @component('tequila.component.syouhin_container',[
                'syouhin_id' => '',
                'syouhin_name' => '左から表示種別を選択してください',
                ])
            @endcomponent
        {{-- 商品コンテナ --}}
            @foreach ($syouhin_contents as $content)
                    @component('tequila.component.syouhin_parts',[
                        'class_name' => $content->class_name,
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
