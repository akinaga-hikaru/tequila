@extends('tequila.layout.layout')

@section('title','商品紹介')
@section('section','商品紹介')
@section('body_class','body syouhin')

@section('main')
    <div class="flex-box">
        <aside class="aside contents-frame">
            {{-- 項目一覧ボタンstart --}}
                @component('tequila.component.section-2',[
                    'section_id' => '',
                    'js_class' => 'js-type-toggle',
                    'section_name' => '項目一覧 ▼',
                    ])
                @endcomponent
            {{-- 項目一覧ボタンend --}}
            {{-- 項目選択ボタンstart --}}
                <ul>
                    @foreach ($types as $type)
                        @component('tequila.component.common-btn',[
                            'btn' => 'type',
                            'js_class_1' => $type['js_class_1'],
                            'js_class_2' => '',
                            'hidden' => '',
                            'link' => '',
                            'text' => $type['title'],
                            'small_text' => '',
                            ])
                        @endcomponent
                    @endforeach
                </ul>
            {{-- 項目選択ボタンend --}}
            {{-- ブランドリストstart --}}
                <ul>
                    @foreach ($titles as $title)
                        @component('tequila.component.common-btn',[
                            'btn' => 'list',
                            'js_class_1' => 'js-maker-list',
                            'js_class_2' => 'js-maker_' . $title['title_id'],
                            'hidden' => 'hidden',
                            'link' => '#section-2',
                            'text' => $title['title'],
                            'small_text' => '',
                            ])
                        @endcomponent
                    @endforeach
                </ul>
            {{-- ブランドリストend --}}
            {{-- 蒸留所リストstart --}}
                <ul>
                    @foreach ($noms as $nom)
                        @component('tequila.component.common-btn',[
                            'btn' => 'list',
                            'js_class_1' => 'js-dest-list',
                            'js_class_2' => 'js-dest_' . $nom['nom'],
                            'hidden' => 'hidden',
                            'link' => '#section-2',
                            'text' => 'NOM ' . $nom['nom'],
                            'small_text' => $nom['dest'],
                            ])
                        @endcomponent
                    @endforeach
                </ul>
            {{-- 蒸留所リストend --}}
            {{-- 生産地方リストstart --}}
                <ul>
                    @foreach ($locals as $local)
                        @component('tequila.component.common-btn',[
                            'btn' => 'list',
                            'js_class_1' => 'js-local-list',
                            'js_class_2' => 'js-local_' . $local['local_id'],
                            'hidden' => 'hidden',
                            'link' => '#section-2',
                            'text' => $local['local'],
                            'small_text' => $local['description'],
                            ])
                        @endcomponent
                    @endforeach
                </ul>
            {{-- 生産地方リストstart --}}
            {{-- 熟成度合いリストstart --}}
                <ul>
                    @foreach ($agings as $aging)
                        @component('tequila.component.common-btn',[
                            'btn' => 'list',
                            'js_class_1' => 'js-aging-list',
                            'js_class_2' => 'js-aging_' . $aging['aging_id'],
                            'hidden' => 'hidden',
                            'link' => '#section-2',
                            'text' => $aging['aging_name'],
                            'small_text' => $aging['description'],
                            ])
                        @endcomponent
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
