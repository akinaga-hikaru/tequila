@extends('tequila.layout.layout')

@section('title','商品紹介')
@section('section','商品紹介')
@section('body_class','body syouhin')

@section('main')
    <div class="flex-box">
        <aside class="aside contents-frame">
            {{--項目一覧ボタンstart --}}
                @component('tequila.component.section-2',[
                    'section_id' => '',
                    'js_class' => 'js-type-toggle',
                    'section_name' => '項目一覧 ▼',
                    ])
                @endcomponent
            {{-- 項目一覧ボタンend --}}
            {{-- タイプ選択ボタンstart --}}
                @php
                    $arrays = [
                        ['0' => 'js-maker-type', '1' => 'ブランド別（' . count($titles) . '）'],
                        ['0' => 'js-dest-type', '1' => '蒸留所別（' . count($noms) . '）'],
                        ['0' => 'js-local-type', '1' => '生産地方別（' . count($locals) . '）'],
                        ['0' => 'js-aging-type', '1' => '熟成度合い別（' . count($agings) . '）'],
                    ];
                @endphp
                <ul class="hide-sp">
                    @foreach ($arrays as $item)
                        @component('tequila.component.common-btn',[
                            'btn' => 'type',
                            'js_class_1' => $item[0],
                            'js_class_2' => '',
                            'hidden' => '',
                            'link' => '',
                            'text' => $item[1],
                            'small_text' => '',
                            ])
                        @endcomponent
                    @endforeach
                </ul>
            {{-- タイプ選択ボタンend --}}
            {{-- ブランドリストstart --}}
                <ul class="maker">
                    @foreach ($titles as $title)
                        <li class="common-btn common-btn--list js-btn--list js-maker-list js-maker_{{ $title['title_id'] }} " hidden>
                            <a href="#section-2">{{ $title['title'] }}</a>
                        </li>
                    @endforeach
                </ul>
            {{-- ブランドリストend --}}
            {{-- 蒸留所リストstart --}}
                <ul class="dest">
                    @foreach ($noms as $nom)
                        <li class="common-btn common-btn--list js-btn--list js-dest-list js-dest_{{ $nom['nom'] }}" hidden>
                            <a href="#section-2">
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
                        <li class="common-btn common-btn--list js-btn--list js-local-list js-local_{{ $local['local_id'] }}" hidden>
                            <a href="#section-2">
                                {{ $local['local'] }} <br>
                                <span class="small-text">{{ $local['description'] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            {{-- 生産地方リストstart --}}
            {{-- 熟成度合いリストstart --}}
                <ul class="aging">
                    @foreach ($agings as $aging)
                        <li class="common-btn common-btn--list js-btn--list js-aging-list js-aging_{{ $aging['aging_id'] }}" hidden>
                            <a href="#section-2">
                                {{ $aging['aging_name'] }} <br>
                                <span class="small-text">{{ $aging['description'] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            {{-- 熟成度合いリストend --}}
        </aside>
        <main class="main contents-frame">
            {{-- ブランドタイトルstart --}}
                @component('tequila.component.section-2',[
                    'section_id' => 'section-2',
                    'js_class' => 'js-syouhin-title',
                    'section_name' => '選択すると表示されます',
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
