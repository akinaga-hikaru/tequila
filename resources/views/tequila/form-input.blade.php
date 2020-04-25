@extends('tequila.layout.layout')

@section('title','登録情報入力')
@section('section','登録情報入力')
@section('body_class','body form form-input')

@section('main')
<div class="contents-frame center">
    <div class="center">
        <div>
            <form method="POST" action="form-input" enctype="multipart/form-data">
            @csrf
            <div class="scroll-area">
                <div class="table-area__scroll-frame">
                    <table class="table-area">
                            <tr>
                                <th class="table-area__header">項目名</th>
                                <th class="table-area__header">入力内容</th>
                                <th class="table-area__header">説明</th>
                                <th class="table-area__header">入力条件</th>
                                <th class="table-area__header">入力サンプル</th>
                            </tr>
                            <tr>
                                <label>
                                    <th>ブランドID</th>
                                    <td><input type="text" name="title_id"></td>
                                </label>
                                <td>ブランドを識別するID</td>
                                <td>半角小文字英数字のみ</td>
                                <td>「Tres Reyes」 => 「tresreyes」</td>
                            </tr>
                            <tr>
                                <label>
                                    <th>ブランド名</th>
                                    <td><input type="text" name="title_name"></td>
                                </label>
                                <td>アルファベットのブランド名</td>
                                <td>半角英数字推奨</td>
                                <td>「Tres Reyes」 => 「Tres Reyes」</td>
                            </tr>
                            <tr>
                                <label>
                                    <th>画像代替テキスト</th>
                                    <td><input type="text" name="alt_name"></td>
                                </label>
                                <td>画像が表示できない時の説明文</td>
                                <td>半角英数字推奨</td>
                                <td>「Tres Reyes Silver」 => 「tres_reyes_silver.jpg」</td>
                            </tr>
                            <tr>
                                <label>
                                    <th>リンク</th>
                                    <td><input type="text" name="url"></td>
                                </label>
                                <td>画像をクリックした際の商品購入などのリンク</td>
                                <td>半角英数字推奨</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <label>
                                    <th>画像</th>
                                    <td><input type="file" name="image"></td>
                                </label>
                                <td>表示させたい画像</td>
                                <td>JPEG推奨(300x300)</td>
                                <td>「Tres Reyes」 => 「tres_reyes_silver.jpg」</td>
                            </tr>
                            <tr>
                                <label>
                                    <th>熟成度ID</th>
                                    <td><input type="text" name="aging_sort"></td>
                                </label>
                                <td>シルバー・レポサドなどの熟成度の識別ID</td>
                                <td>半角英数字推奨</td>
                                <td>「Silver」 => 「Blanco」</td>
                            </tr>
                            <tr>
                                <label>
                                    <th>熟成度名</th>
                                    <td><input type="text" name="aging"></td>
                                </label>
                                <td>シルバー・レポサドなどの熟成度</td>
                                <td>半角英数字推奨</td>
                                <td>「Silver」 => 「Silver」</td>
                            </tr>
                            <tr>
                                <label>
                                    <th>度数/混成度</th>
                                    <td><input type="text" name="contents_alc"></td>
                                </label>
                                <td>アルコール度数</td>
                                <td>半角英数字推奨</td>
                                <td>「40%でアガベ100%」 => 「40%/100%AGAVE」</td>
                            </tr>
                            </tr>
                            <tr>
                                <label>
                                    <th>蒸留所名</th>
                                    <td><input type="text" name="contents_dest"></td>
                                </label>
                                    <td>生産された蒸留所名</td>
                                    <td>全角文字</td>
                                    <td>「クエルボ蒸留所」 => 「クエルボ蒸留所」</td>
                            </tr>
                            <tr>
                                <label>
                                    <th>NOM</th>
                                    <td><input type="text" name="contents_nom"></td>
                                </label>
                                    <td>生産された蒸留所ナンバー</td>
                                    <td>半角数字</td>
                                    <td>「NOM 1122」 => 「1122」</td>
                            </tr>
                            <tr>
                                <label>
                                    <th>生産地方ID</th>
                                    <td><input type="text" name="contents_local_id"></td>
                                </label>
                                    <td>生産地方の識別ID</td>
                                    <td>半角小文字英数字</td>
                                    <td>「バジェス地方」 => 「valles」</td>
                            </tr>
                            <tr>
                                <label>
                                    <th>生産地方名</th>
                                    <td><input type="text" name="contents_local"></td>
                                </label>
                                    <td>生産された地方名</td>
                                    <td>全角文字</td>
                                    <td>「バジェス地方」 => 「バジェス地方」</td>
                            </tr>
                            <tr>
                                <label>
                                    <th>生産エリアID</th>
                                    <td><input type="text" name="contents_area_id"></td>
                                </label>
                                    <td>生産エリアの識別ID</td>
                                    <td>半角小文字英数字</td>
                                    <td>「テキーラ地区」 => 「tequila」</td>
                            </tr>
                            <tr>
                                <label>
                                    <th>生産エリア名</th>
                                    <td><input type="text" name="contents_area"></td>
                                </label>
                                    <td>生産されたエリア名</td>
                                    <td>全角文字</td>
                                    <td>「テキーラ地区」 => 「テキーラ地区」</td>
                            </tr>
                            <tr>
                                <label>
                                    <th>内容（情報）</th>
                                    <td><input type="text" name="contents_info"></td>
                                </label>
                                    <td>特記しておきたい情報</td>
                                    <td>全角文字</td>
                                    <td>-</td>
                            </tr>
                            <tr>
                                <label>
                                    <th>レビュー内容（香り）</th>
                                    <td><input type="text" name="contents_review_flavor"></td>
                                </label>
                                    <td>香りに関するレビュー</td>
                                    <td>全角文字</td>
                                    <td>思うままに書いてください</td>
                            </tr>
                            <tr>
                                <label>
                                    <th>レビュー内容（味）</th>
                                    <td><input type="text" name="contents_review_top"></td>
                                </label>
                                    <td>味に関するレビュー</td>
                                    <td>全角文字</td>
                                    <td>思うままに書いてください</td>
                            </tr>
                            <tr>
                                <label>
                                    <th>レビュー内容（余韻）</th>
                                    <td><input type="text" name="contents_review_after"></td>
                                </label>
                                    <td>口の中に後に残る余韻に関するレビュー</td>
                                    <td>全角文字</td>
                                    <td>思うままに書いてください</td>
                            </tr>
                        </table>
                </div>
            </div>
                <button type="submit" name="submit">確認する</button>
            </form>
        </div>
    </div>
</div>
@endsection
