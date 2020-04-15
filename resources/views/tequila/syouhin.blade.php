@extends('tequila.layout.layout')

@section('title','商品紹介')
@section('section','商品紹介')
@section('body_class','syouhin')

@section('main')
@php
    $maker = count($titles);
    $dest = count($noms);
    $area = count($locals);
    $taste = count($agings);
@endphp

<div class="flex-box">
    <aside class="contents-frame">
        {{-- 種別ボタン表示ボタンstart --}}
            @component('tequila.component.syouhin_container',[
                'title_id' => '',
                'syouhin_id' => 'js-list-toggle',
                'syouhin_name' => 'ボタンを表示',
                ])
            @endcomponent
        {{-- 種別ボタン表示ボタンend --}}
        {{-- 種別ボタンstart --}}
            <p class="list-btn list-btn--syouhin-type maker-list"><a>ブランド別（{{ $maker }}）</a></p>
            <p class="list-btn list-btn--syouhin-type dest-list"><a>蒸留所別（{{ $dest }}）</a></p>
            <p class="list-btn list-btn--syouhin-type local-list"><a>生産地方別（{{ $area }}）</a></p>
            <p class="list-btn list-btn--syouhin-type aging-list"><a>熟成度合い別（{{ $taste }}）</a></p>
        {{-- 種別ボタンend --}}
        {{-- ブランドリストstart --}}
            <ul class="maker">
                @foreach ($titles as $title)
                    <li class="list-btn js-list js-maker-list js-maker_{{ $title['title_id'] }} " hidden>
                        <a href="#syouhin_title">{{ $title['title'] }}</a>
                    </li>
                @endforeach
            </ul>
        {{-- ブランドリストend --}}
        {{-- 蒸留所リストstart --}}
            <ul class="dest">
                @foreach ($noms as $nom)
                    <li class="list-btn js-list js-dest-list js-dest_{{ $nom['nom'] }}" hidden>
                        <a href="#syouhin_title">
                            NOM {{ $nom['nom'] }} <br>
                            <span class="small-text">{{ $nom['dest'] }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        {{-- 蒸留所リストend --}}
        {{-- 生産地方リストstart --}}
            <ul class="local">
                @foreach ($locals as $local)
                    <li class="list-btn js-list js-local-list js-local_{{ $local['local_id'] }}" hidden>
                        <a href="#syouhin_title">{{ $local['local'] }}</a>
                    </li>
                @endforeach
            </ul>
        {{-- 生産地方リストstart --}}
        {{-- 熟成度合いリストstart --}}
            <ul class="aging">
                @foreach ($agings as $aging)
                    <li class="list-btn js-list js-aging-list js-aging_{{ $aging['aging_id'] }}" hidden>
                        <a href="#syouhin_title">
                            {{ $aging['aging_name'] }} <br>
                            <span class="small-text">{{ $aging['description'] }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        {{-- 熟成度合いリストend --}}
    </aside>
    <main class="contents-frame">
        {{-- ブランドタイトルstart --}}
            @component('tequila.component.syouhin_container',[
                'title_id' => 'syouhin_title',
                'syouhin_id' => 'js-syouhin-title',
                'syouhin_name' => '選択すると表示します',
                ])
            @endcomponent
        {{-- ブランドタイトルend --}}
        {{-- 商品コンテナstart --}}
            @foreach ($syouhin_data_all as $content)
                    @component('tequila.component.syouhin_parts',[
                        'title_id' => $content->title_id,
                        'title_name' => $content->title_name,
                        'alt_name' => $content->alt_name,
                        'url' => $content->url,
                        'image' => $content->image,
                        'aging_sort' => $content->aging_sort,
                        'aging' => $content->aging,
                        'contents_alc' => $content->contents_alc,
                        'contents_dest' => $content->contents_dest,
                        'contents_nom' => $content->contents_nom,
                        'contents_local_id' => $content->contents_local_id,
                        'contents_local' => $content->contents_local,
                        'contents_area' => $content->contents_area,
                        'contents_info' => $content->contents_info,
                        'contents_review_flavor' => $content->contents_review_flavor,
                        'contents_review_top' => $content->contents_review_top,
                        'contents_review_after' => $content->contents_review_after,
                    ])
                    @endcomponent
            @endforeach
        {{-- 商品コンテナend --}}
    </main>
</div>
@endsection
