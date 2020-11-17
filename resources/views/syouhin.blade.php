@extends('layout.layout')

@section('title', config('app_layout.global_menu.syouhin'))
@section('body_class','syouhin')

@section('contents')
    <div class={{ config('app_class_css.flex_box') }}>

        @component('component.aside')

            {{-- 項目選択ボタンstart --}}
                <ul>
                    @foreach ($types as $type)
                        @component('component.common-btn',[
                            'btn' => 'type',
                            'js_class_1' => $type['js_class_1'],
                            'hidden' => false,
                            'hide_sp' => true,
                            'text' => $type['title'],
                            ])
                        @endcomponent
                    @endforeach
                </ul>
            {{-- 項目選択ボタンend --}}

            {{-- ブランドリスト start --}}
                <ul>
                    @foreach ($titles as $title)
                        @component('component.common-btn',[
                            'btn' => 'list',
                            'js_class_1' => config('app_class_js.maker_list'),
                            'js_class_2' => config('app_class_js.maker') . '_' . $title['title_id'],
                            'hidden' => true,
                            'link' => '',
                            'text' => $title['title'],
                            ])
                        @endcomponent
                    @endforeach
                </ul>
            {{-- ブランドリスト end --}}

            {{-- 蒸留所リスト start --}}
                <ul>
                    @foreach ($noms as $nom)
                        @component('component.common-btn',[
                            'btn' => 'list',
                            'js_class_1' => config('app_class_js.dest_list'),
                            'js_class_2' => config('app_class_js.dest') . '_' . $nom['nom'],
                            'hidden' => true,
                            'link' => '',
                            'text' => 'NOM ' . $nom['nom'],
                            'small_text' => $nom['dest'],
                            ])
                        @endcomponent
                    @endforeach
                </ul>
            {{-- 蒸留所リスト end --}}

            {{-- 生産地方リスト start --}}
                <ul>
                    @php
                        $valles =[];
                        $altos = [];
                        $centro = [];
                        $others = [];
                        foreach ($areas as $key => $value) {
                            if ($value['local_id'] == 'valles') {
                                $valles[] = $value;
                            }elseif ($value['local_id'] == 'altos') {
                                $altos[] = $value;
                            }elseif ($value['local_id'] == 'centro') {
                                $centro[] = $value;
                            }else {
                                $others[] = $value;
                            }
                        }
                    @endphp
                    @foreach ($locals as $local)
                        @component('component.common-btn',[
                            'btn' => 'list',
                            'js_class_1' => config('app_class_js.local_list'),
                            'js_class_2' => config('app_class_js.local') . '_' . $local['local_id'],
                            'hidden' => true,
                            'link' => '',
                            'text' => $local['local'],
                            'small_text' => $local['description'],
                            ])
                        @endcomponent
                        @if($local['local_id'] == 'valles')
                            @foreach ($valles as $item)
                                @component('component.common-btn',[
                                    'btn' => 'down',
                                    'js_class_1' => config('app_class_js.area_list'),
                                    'js_class_2' => config('app_class_js.area') . '_' . $item['local_id'],
                                    'js_class_3' => config('app_class_js.area') . '_' . $item['local_id'] . '_' . $item['area_id'],
                                    'hidden' => true,
                                    'link' => '',
                                    'text' => $item['area'],
                                    ])
                                @endcomponent
                            @endforeach
                        @elseif($local['local_id'] == 'altos')
                            @foreach ($altos as $item)
                                @component('component.common-btn',[
                                    'btn' => 'down',
                                    'js_class_1' => config('app_class_js.area_list'),
                                    'js_class_2' => config('app_class_js.area') . '_' . $item['local_id'],
                                    'js_class_3' => config('app_class_js.area') . '_' . $item['local_id'] . '_' . $item['area_id'],
                                    'hidden' => true,
                                    'link' => '',
                                    'text' => $item['area'],
                                    ])
                                @endcomponent
                            @endforeach
                        @elseif($local['local_id'] == 'centro')
                            @foreach ($centro as $item)
                                @php
                                    if($item['area'] == '-') {
                                        $item['area'] = config('app_syouhin.page.other_area');
                                    }
                                @endphp
                                @component('component.common-btn',[
                                    'btn' => 'down',
                                    'js_class_1' => config('app_class_js.area_list'),
                                    'js_class_2' => config('app_class_js.area') . '_' . $item['local_id'],
                                    'js_class_3' => config('app_class_js.area') . '_' . $item['local_id'] . '_' . $item['area_id'],
                                    'hidden' => true,
                                    'link' => '',
                                    'text' => $item['area'],
                                    ])
                                @endcomponent
                            @endforeach
                        @else
                            @foreach ($others as $item)
                                @component('component.common-btn',[
                                    'btn' => 'down',
                                    'js_class_1' => config('app_class_js.area_list'),
                                    'js_class_2' => config('app_class_js.area') . '_' . $item['local_id'],
                                    'js_class_3' => config('app_class_js.area') . '_' . $item['local_id'] . '_' . $item['area_id'],
                                    'hidden' => true,
                                    'link' => '',
                                    'text' => $item['local'] . $item['area'],
                                    ])
                                @endcomponent
                            @endforeach
                        @endif
                    @endforeach
                </ul>
            {{-- 生産地方リスト start --}}

            {{-- 熟成度合いリスト start --}}
                <ul>
                    @foreach ($agings as $aging)
                        @component('component.common-btn',[
                            'btn' => 'list',
                            'js_class_1' => config('app_class_js.aging_list'),
                            'js_class_2' => config('app_class_js.aging') . '_' . $aging['aging_id'],
                            'hidden' => true,
                            'link' => '',
                            'text' => $aging['aging_name'],
                            'small_text' => $aging['description'],
                            ])
                        @endcomponent
                    @endforeach
                </ul>
            {{-- 熟成度合いリスト end --}}

        @endcomponent

        @component('component.main')

            {{-- ブランドタイトル start --}}
                @component('component.section-title',[
                    'section_id' => config('app_class_css.section_title'),
                    'js_class' => config('app_class_js.syouhin_title'),
                    'section_name' => config('app_syouhin.page.section_title'),
                    ])
                @endcomponent
            {{-- ブランドタイトル end --}}

            {{-- 商品コンテナ start --}}
                @foreach ($syouhin_data_all as $content)
                    @component('component.syouhin-parts',[
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
                        'contents_area_id' => $content->contents_local_id . '_' . $content->contents_area_id,
                        'contents_area' => $content->contents_area,
                        'contents_info' => $content->contents_info,
                        'contents_review_flavor' => $content->contents_review_flavor,
                        'contents_review_top' => $content->contents_review_top,
                        'contents_review_after' => $content->contents_review_after,
                    ])
                    @endcomponent
                @endforeach
            {{-- 商品コンテナ end --}}

            {{-- 商品なしメッセージ start --}}
                @component('component.message', ['js_message' => true])
                    {{ config('app_message.syouhin.no_products') }}
                @endcomponent
            {{-- 商品なしメッセージ end --}}

        @endcomponent

    </div>
@endsection
