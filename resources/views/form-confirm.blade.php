@extends('layout.layout')

@section('title','登録内容確認')
@section('section','登録内容確認')
@section('body_class',' body form form-confirm syouhin js-form-confirm')

@section('main')
    <main class={{config('app_class_css.contents_frame')}}>
        {{-- ブランドタイトルstart --}}
            @component('component.section-2',[
                'js_class' => 'js-syouhin-title',
                'section_name' => '項目名 / 入力内容',
                ])
            @endcomponent
        {{-- ブランドタイトルend --}}
        <div class={{config('app_class_css.table_area')}}>
            <table>
                    <tr>
                        <label>
                            <th>ブランドID</th>
                            <td><div>{{ $input['title_id'] }}</div></td>
                        </label>
                    </tr>
                    <tr>
                        <label>
                            <th>ブランド名</th>
                            <td><div>{{ $input['title_name'] }}</div></td>
                        </label>
                    </tr>
                    <tr>
                        <label>
                            <th>画像代替テキスト</th>
                            <td><div>{{ $input['alt_name'] }}</div></td>
                        </label>
                    </tr>
                    <tr>
                        <label>
                            <th>リンク</th>
                            <td><div>{{ $input['url'] }}</div></td>
                        </label>
                    </tr>
                    <tr>
                        <label>
                            <th>画像</th>
                            <td><div>{{ $input['image'] }}</div></td>
                        </label>
                    </tr>
                    <tr>
                        <label>
                            <th>熟成度ID</th>
                            <td><div>{{ $input['aging_sort'] }}</div></td>
                        </label>
                    </tr>
                    <tr>
                        <label>
                            <th>熟成度名</th>
                            <td><div>{{ $input['aging'] }}</div></td>
                        </label>
                    </tr>
                    <tr>
                        <label>
                            <th>度数/混成度</th>
                            <td><div>{{ $input['contents_alc'] }}</div></td>
                        </label>
                    </tr>
                    </tr>
                    <tr>
                        <label>
                            <th>蒸留所名</th>
                            <td><div>{{ $input['contents_dest'] }}</div></td>
                        </label>
                    </tr>
                    <tr>
                        <label>
                            <th>NOM</th>
                            <td><div>{{ $input['contents_nom'] }}</div></td>
                        </label>
                    </tr>
                    <tr>
                        <label>
                            <th>生産地方ID</th>
                            <td><div>{{ $input['contents_local_id'] }}</div></td>
                        </label>
                    </tr>
                    <tr>
                        <label>
                            <th>生産地方名</th>
                            <td><div>{{ $input['contents_local'] }}</div></td>
                        </label>
                    </tr>
                    <tr>
                        <label>
                            <th>生産エリアID</th>
                            <td><div>{{ $input['contents_area_id'] }}</div></td>
                        </label>
                    </tr>
                    <tr>
                        <label>
                            <th>生産エリア名</th>
                            <td><div>{{ $input['contents_area'] }}</div></td>
                        </label>
                    </tr>
                    <tr>
                        <label>
                            <th>内容（情報）</th>
                            <td><div>{{ $input['contents_info'] }}</div></td>
                        </label>
                    </tr>
                    <tr>
                        <label>
                            <th>レビュー内容（香り）</th>
                            <td><div>{{ $input['contents_review_flavor'] }}</div></td>
                        </label>
                    </tr>
                    <tr>
                        <label>
                            <th>レビュー内容（味）</th>
                            <td><div>{{ $input['contents_review_top'] }}</div></td>
                        </label>
                    </tr>
                    <tr>
                        <label>
                            <th>レビュー内容（余韻）</th>
                            <td><div>{{ $input['contents_review_after'] }}</div></td>
                        </label>
                    </tr>
            </table>
        </div>
        <div class={{config('app_class_css.center')}}>
            <button type="button" name="submit" onclick="history.back()">
                修正する
            </button>
            <br>
        </div>
        <div
            class="
                {{config('app_class_css.message')}}
                {{config('app_class_css.center')}}
            "
        >
            <p>
                以下はプレビュー表示となります。
            </p>
        </div>
    </main>
    <div class={{config('app_class_css.flex_box')}}>
        <aside
            class="
                {{config('app_class_css.aside')}}
                {{config('app_class_css.contents_frame')}}
            "
        >
            {{-- 項目一覧ボタンstart --}}
                @component('component.section-2',[
                    'js_class' => config('app_class_js.js_type_toggle'),
                    'section_name' => '項目一覧 ▼',
                    ])
                @endcomponent
                <div class={{config('app_class_css.message')}}>
                    <p>
                        上の「項目一覧▼」ボタンを押すと、ここにブランド名などの一覧が表示されます
                    </p>
                </div>
        </aside>
        <main
            class="
                {{config('app_class_css.main')}}
                {{config('app_class_css.contents_frame')}}
            "
        >
            {{-- ブランドタイトルstart --}}
                @component('component.section-2',[
                    'section_id' => config('app_class_css.section_title'),
                    'js_class' => config('app_class_js.js_syouhin_title'),
                    'section_name' => $input['title_name'],
                    ])
                @endcomponent
            {{-- ブランドタイトルend --}}
            {{-- 商品コンテナstart --}}
                @component('component.syouhin-parts',[
                    'title_id' => $input['title_id'],
                    'title_name' => $input['title_name'],
                    'alt_name' => $input['alt_name'],
                    'url' => $input['url'],
                    'image' => 'sample/' . $input['image'],
                    'aging_sort' => $input['aging_sort'],
                    'aging' => $input['aging'],
                    'contents_alc' => $input['contents_alc'],
                    'contents_dest' => $input['contents_dest'],
                    'contents_nom' => $input['contents_nom'],
                    'contents_local_id' => $input['contents_local_id'],
                    'contents_local' => $input['contents_local'],
                    'contents_area_id' => $input['contents_area_id'],
                    'contents_area' => $input['contents_area'],
                    'contents_info' => $input['contents_info'],
                    'contents_review_flavor' => $input['contents_review_flavor'],
                    'contents_review_top' => $input['contents_review_top'],
                    'contents_review_after' => $input['contents_review_after'],
                ])
                @endcomponent
            {{-- 商品コンテナend --}}
        </main>
    </div>
    <div class={{config('app_class_css.contents_frame')}}>
        <div
            class="
                {{config('app_class_css.message')}}
                {{config('app_class_css.center')}}
            "
        >
            <p>
                間違いがないかご確認の上、ご登録ください。
            </p>
        </div>
        <div class={{config('app_class_css.center')}}>
            <br>
            <button type="button" name="submit" onclick="location.href='form-complete'">
                登録する
            </button>
        </div>
    </div>
@endsection
