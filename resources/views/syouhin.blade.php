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
                                    'text' => !empty($item['area_name_kana']) ? $item['local_name_kana'] . $item['area_name_kana'] : 'その他州',
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
                        'brand_id' => $content->brand_id,
                        'brand_name' => $content->brand_name,
                        'syouhin_id' => $content->syouhin_id,
                        'syouhin_url' => $content->syouhin_url,
                        'image' => $content->image,
                        'aging_sort' => $content->aging_sort,
                        'aging_name' => $content->aging_name,
                        'alc_degree' => $content->alc_degree,
                        'mix_degree' => $content->mix_degree,
                        'min_price' => $content->min_price,
                        'dest_name_kana' => $content->dest_name_kana,
                        'dest_nom' => $content->dest_nom,
                        'local_id' => $content->local_id,
                        'local_name_kana' => $content->local_name_kana,
                        'area_id' => $content->local_id . '_' . $content->area_id,
                        'area_name_kana' => $content->area_name_kana,
                        'information' => $content->information,
                        'review_flavor' => $content->review_flavor,
                        'review_top' => $content->review_top,
                        'review_after' => $content->review_after,
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
