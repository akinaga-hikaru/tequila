@extends('layout.layout')

@section('title','登録内容確認')
@section('body_class','form form-confirm syouhin js-form-confirm')

@section('contents')

    @main(['main' => 'no_aside'])
        <div class={{ config('app_class_css.contents_frame') }}>

            {{-- 項目名 start --}}
                @section_title([
                    'js_class' => 'js-syouhin-title',
                    'section_name' => config('app_form_input.title')[0] . ' / ' . config('app_form_input.title')[1],
                    ])
                @endsection_title
            {{-- 項目名 end --}}

            {{-- 入力項目表示 start --}}
                @letters_area_parts(['table' => true])
                    @foreach ($input as $item)
                        <tr>
                            <label>
                                <th>{{ $item['name'] }}</th>
                                <td>{{ $item['input'] }}</td>
                            </label>
                        </tr>
                    @endforeach
                @endletters_area_parts
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

        {{-- サイドメニューメッセージ start --}}
            @aside
                @message
                    {{ config('app_message.form_confirm.sidemenu') }}
                @endmessage
            @endaside
        {{-- サイドメニューメッセージ end --}}

        @main

            {{-- ブランドタイトル start --}}
                @section_title([
                    'section_id' => config('app_class_css.section_title'),
                    'js_class' => config('app_class_js.syouhin_title'),
                    'section_name' => $input['title_name']['input'],
                    ])
                @endsection_title
            {{-- ブランドタイトル end --}}

            {{-- プレビュー商品コンテナ start --}}
                @syouhin_parts([
                    'title_id' => $input['title_id']['input'],
                    'title_name' => $input['title_name']['input'],
                    'alt_name' => $input['alt_name']['input'],
                    'url' => $input['url']['input'],
                    'image' => 'sample/' . $input['image']['input'],
                    'aging_sort' => $input['aging_sort']['input'],
                    'aging' => $input['aging']['input'],
                    'contents_alc' => $input['contents_alc']['input'],
                    'contents_dest' => $input['contents_dest']['input'],
                    'contents_nom' => $input['contents_nom']['input'],
                    'contents_local_id' => $input['contents_local_id']['input'],
                    'contents_local' => $input['contents_local']['input'],
                    'contents_area_id' => $input['contents_area_id']['input'],
                    'contents_area' => $input['contents_area']['input'],
                    'contents_info' => $input['contents_info']['input'],
                    'contents_review_flavor' => $input['contents_review_flavor']['input'],
                    'contents_review_top' => $input['contents_review_top']['input'],
                    'contents_review_after' => $input['contents_review_after']['input'],
                ])
                @endsyouhin_parts
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
