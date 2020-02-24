@extends('tequila.layout.layout')

@section('title','ブランド別商品紹介')
@section('section','ブランド別商品紹介')
@section('body_class','syouhin')

@section('main')

<div class="box">
    @include('tequila.component.syouhin_list')
    <main>
        {{-- ブランドタイトル --}}
            @component('tequila.component.syouhin_container',[
                'syouhin_id' => 'sauza',
                'syouhin_name' => '◇SUAZA',
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
