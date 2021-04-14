@extends('layout.layout')

@section('title', config('app_layout.global_menu.syouhin'))
@section('body_class','syouhin')

@section('contents')
    <div class={{ config('app_class_css.flex_box') }}>

        @aside

            {{-- 項目選択ボタンstart --}}
                <ul>
                    @foreach ($types as $type)
                        @commonbtn([
                            'btn' => 'type',
                            'js_class_1' => $type['js_class_1'],
                            'hidden' => false,
                            'hide_sp' => true,
                            'text' => $type['title'],
                            ])
                        @endcommonbtn
                    @endforeach
                </ul>
            {{-- 項目選択ボタンend --}}

            {{-- ブランドリスト start --}}
                <ul>
                    @foreach ($brands as $brand)
                        @commonbtn([
                            'btn' => 'list',
                            'js_class_1' => config('app_class_js.brand_list'),
                            'js_class_2' => config('app_class_js.brand') . '_' . $brand['brand_id'],
                            'hidden' => true,
                            'text' => $brand['brand_name'],
                            'small_text' => $brand['brand_name_kana'],
                            ])
                        @endcommonbtn
                    @endforeach
                </ul>
            {{-- ブランドリスト end --}}

            {{-- 蒸留所リスト start --}}
                <ul>
                    @foreach ($destiladors as $destilador)
                        @commonbtn([
                            'btn' => 'list',
                            'js_class_1' => config('app_class_js.dest_list'),
                            'js_class_2' => config('app_class_js.dest') . '_' . $destilador['nom'],
                            'hidden' => true,
                            'text' => $destilador['nom'] === '-' ? 'NOMなし' : 'NOM ' . $destilador['nom'],
                            'small_text' => $destilador['dest_name_kana'] === '-' ? 'その他蒸留所': $destilador['dest_name_kana'],
                            ])
                        @endcommonbtn
                    @endforeach
                </ul>
            {{-- 蒸留所リスト end --}}

            {{-- 生産地方リスト start --}}
                <ul>
                    @foreach ($locals as $local)
                        @commonbtn([
                            'btn' => 'list',
                            'js_class_1' => config('app_class_js.local_list'),
                            'js_class_2' => config('app_class_js.local') . '_' . $local['local_id'],
                            'hidden' => true,
                            'text' => $local['local_name_kana'],
                            'small_text' => $local['description'],
                            ])
                        @endcommonbtn
                        @if($local['local_id'] == 'valles')
                            @foreach ($areas['valles'] as $item)
                                @commonbtn([
                                    'btn' => 'down',
                                    'js_class_1' => config('app_class_js.area_list'),
                                    'js_class_2' => config('app_class_js.area') . '_' . $item['local_id'],
                                    'js_class_3' => config('app_class_js.area') . '_' . $item['local_id'] . '_' . $item['area_id'],
                                    'hidden' => true,
                                    'text' => $item['area_name_kana'],
                                ])
                                @endcommonbtn
                            @endforeach
                        @elseif($local['local_id'] == 'altos')
                            @foreach ($areas['altos'] as $item)
                                @commonbtn([
                                    'btn' => 'down',
                                    'js_class_1' => config('app_class_js.area_list'),
                                    'js_class_2' => config('app_class_js.area') . '_' . $item['local_id'],
                                    'js_class_3' => config('app_class_js.area') . '_' . $item['local_id'] . '_' . $item['area_id'],
                                    'hidden' => true,
                                    'text' => $item['area_name_kana'],
                                    ])
                                @endcommonbtn
                            @endforeach
                        @elseif($local['local_id'] == 'centro')
                            @foreach ($areas['centro'] as $item)
                                @commonbtn([
                                    'btn' => 'down',
                                    'js_class_1' => config('app_class_js.area_list'),
                                    'js_class_2' => config('app_class_js.area') . '_' . $item['local_id'],
                                    'js_class_3' => config('app_class_js.area') . '_' . $item['local_id'] . '_' . $item['area_id'],
                                    'hidden' => true,
                                    'text' => $item['area_name_kana'],
                                    ])
                                @endcommonbtn
                            @endforeach
                        @else
                            @foreach ($areas['others'] as $item)
                                @commonbtn([
                                    'btn' => 'down',
                                    'js_class_1' => config('app_class_js.area_list'),
                                    'js_class_2' => config('app_class_js.area') . '_' . $item['local_id'],
                                    'js_class_3' => config('app_class_js.area') . '_' . $item['local_id'] . '_' . $item['area_id'],
                                    'hidden' => true,
                                    'text' => $item['local_name_kana'] . $item['area_name_kana'],
                                    ])
                                @endcommonbtn
                            @endforeach
                        @endif
                    @endforeach
                </ul>
            {{-- 生産地方リスト start --}}

            {{-- 熟成度合いリスト start --}}
                <ul>
                    @foreach ($agings as $aging)
                        @commonbtn([
                            'btn' => 'list',
                            'js_class_1' => config('app_class_js.aging_list'),
                            'js_class_2' => config('app_class_js.aging') . '_' . $aging['aging_id'],
                            'hidden' => true,
                            'text' => $aging['aging_name_kana'],
                            'small_text' => $aging['description'],
                            ])
                        @endcommonbtn
                    @endforeach
                </ul>
            {{-- 熟成度合いリスト end --}}

        @endaside

        @main

            {{-- ブランドタイトル start --}}
                @sectiontitle([
                    'section_id' => config('app_class_css.section_title'),
                    'js_class' => config('app_class_js.syouhin_title'),
                    'section_name' => config('app_syouhin.page.section_title'),
                    ])
                @endsectiontitle
            {{-- ブランドタイトル end --}}

            {{-- 商品コンテナ start --}}
                @foreach ($syouhin_data as $content)
                    @syouhincontainer([
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
                    @endsyouhincontainer
                @endforeach
            {{-- 商品コンテナ end --}}

            {{-- 商品なしメッセージ start --}}
                @message(['js_message' => true])
                    {{ config('app_message.syouhin.no_products') }}
                @endmessage
            {{-- 商品なしメッセージ end --}}

        @endmain

    </div>
@endsection
