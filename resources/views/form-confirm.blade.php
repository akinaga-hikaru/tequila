@extends('layout.layout')

@section('title','登録内容確認')
@section('body_class',' body form form-confirm syouhin js-form-confirm')

@section('contents')

    @component('component.main', ['main' => 'no_aside'])
        <div class={{ config('app_class_css.contents_frame') }}>

            {{-- 項目名 start --}}
                @component('component.section-title',[
                    'js_class' => 'js-syouhin-title',
                    'section_name' => config('app_form_input.title')[0] . ' / ' . config('app_form_input.title')[1],
                    ])
                @endcomponent
            {{-- 項目名 end --}}

            {{-- 入力項目表示 start --}}
                @component('component.table-area')
                    @foreach ($input as $item)
                        <tr>
                            <label>
                                <th>{{ $item['name'] }}</th>
                                <td><div>{{ $item['input'] }}</div></td>
                            </label>
                        </tr>
                    @endforeach
                @endcomponent
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
                    @component('component.message', ['center' => true])
                        {{ config('app_message.form_confirm.preview') }}
                    @endcomponent
                {{-- プレビューメッセージ end --}}
            </div>

        </div>
    @endcomponent

    <div class={{ config('app_class_css.flex_box') }}>

        {{-- サイドメニューメッセージ start --}}
            @component('component.aside')
                @component('component.message')
                    {{ config('app_message.form_confirm.sidemenu') }}
                @endcomponent
            @endcomponent
        {{-- サイドメニューメッセージ end --}}

        @component('component.main')

            {{-- ブランドタイトル start --}}
                @component('component.section-title',[
                    'section_id' => config('app_class_css.section_title'),
                    'js_class' => config('app_class_js.syouhin_title'),
                    'section_name' => $input['title_name']['input'],
                    ])
                @endcomponent
            {{-- ブランドタイトル end --}}

            {{-- プレビュー商品コンテナ start --}}
                @component('component.syouhin-parts',[
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
                @endcomponent
            {{-- プレビュー商品コンテナ end --}}

        @endcomponent

    </div>

    <div class={{ config('app_class_css.contents_frame') }}>

        {{-- 確認メッセージ start --}}
            @component('component.message', ['center' => true])
                {{ config('app_message.form_confirm.confirm') }}
            @endcomponent
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
