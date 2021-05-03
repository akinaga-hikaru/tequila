@extends('layout.layout')

@section('title','登録内容確認')
@section('body_class','form form-confirm syouhin js-form-confirm')

@section('contents')

    @main(['main' => 'no_aside'])
        <div class={{ config('app_class_css.contents_frame') }}>

            {{-- 項目名 start --}}
                @sectiontitle([
                    'js_class' => 'js-syouhin-title',
                    'section_name' => config('app_form_input.title')[0] . ' / ' . config('app_form_input.title')[1],
                    ])
                @endsectiontitle
            {{-- 項目名 end --}}

            {{-- 入力項目表示 start --}}
                @lettersareaparts(['table' => true])
                    @foreach ($input as $item)
                        <tr>
                            <label>
                                <th>{{ $item['name'] }}</th>
                                <td>{{ $item['input'] }}</td>
                            </label>
                        </tr>
                    @endforeach
                @endlettersareaparts
            {{-- 入力項目表示 end --}}

            <div class={{ config('app_class_css.contents_frame') }}>

                {{-- 修正ボタン start --}}
                    <div class={{ config('app_class_css.center') }}>
                        <button type="button" name="submit" onclick="history.back()">
                            {{ config('app_layout.correct_btn') }}
                        </button>
                        <br>
                    </div>
                {{-- 修正ボタン end --}}

                {{-- プレビューメッセージ start --}}
                    @message(['center' => true])
                        {{ config('app_message.form_confirm.preview') }}
                    @endmessage
                {{-- プレビューメッセージ end --}}

            </div>

        </div>
    @endmain

    <div class={{ config('app_class_css.flex_box') }}>

        @aside
        @endaside

        @main

            {{-- ブランドタイトル start --}}
                @sectiontitle([
                    'section_id' => config('app_class_css.section_title'),
                    'js_class' => config('app_class_js.syouhin_title'),
                    'section_name' => $input['brand_name']['input'],
                    ])
                @endsectiontitle
            {{-- ブランドタイトル end --}}

            {{-- プレビュー商品コンテナ start --}}
                @syouhincontainer([
                    'brand_id' => $input['brand_id']['input'],
                    'brand_name' => $input['brand_name']['input'],
                    'syouhin_id' => $input['syouhin_id']['input'],
                    'syouhin_url' => $input['syouhin_url']['input'],
                    'image' => 'sample/' . $input['image']['input'],
                    'aging_sort' => $input['aging_sort']['input'],
                    'aging_id' => $input['aging_id']['input'],
                    'aging_name' => $input['aging_name']['input'],
                    'alc_degree' => $input['alc_degree']['input'],
                    'mix_degree' => $input['mix_degree']['input'],
                    'min_price' => $input['min_price']['input'],
                    'dest_name_kana' => $input['dest_name_kana']['input'],
                    'dest_nom' => $input['dest_nom']['input'],
                    'local_id' => $input['local_id']['input'],
                    'local_name_kana' => $input['local_name_kana']['input'],
                    'area_id' => $input['area_id']['input'],
                    'area_name_kana' => $input['area_name_kana']['input'],
                    'information' => $input['information']['input'],
                    'review_flavor' => $input['review_flavor']['input'],
                    'review_top' => $input['review_top']['input'],
                    'review_after' => $input['review_after']['input'],
                ])
                @endsyouhincontainer
            {{-- プレビュー商品コンテナ end --}}

        @endmain

    </div>

    <div class={{ config('app_class_css.contents_frame') }}>

        {{-- 確認メッセージ start --}}
            @message(['center' => true])
                {{ config('app_message.form_confirm.confirm') }}
            @endmessage
        {{-- 確認メッセージ end --}}

        {{-- 登録ボタン start --}}
            <div class={{ config('app_class_css.center') }}>
                <br>
                <button type="button" name="submit" onclick="location.href='form-complete'">
                    {{ config('app_layout.register_btn') }}
                </button>
            </div>
        {{-- 登録ボタン end --}}

    </div>

@endsection
