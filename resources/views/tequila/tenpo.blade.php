@extends('tequila.layout.layout')

@section('title','テキーラ取扱店紹介')
@section('section','テキーラ取扱店紹介')
@section('body_class','body tenpo')

@section('main')
<div class="contents-frame">
    <div class="scroll-area">
        <div class="table-area__scroll-frame">
            <table class="table-area">
                <tr><td class="table-area__header">BAR</th></tr>
                    <tr>
                        <th>店名</th>
                        <th>住所</th>
                        <th>アクセス</th>
                        <th>テキーラ品揃え</th>
                    </tr>
                    <tr>
                        <td><a href="http://www.side-b-bar.com/">Side B Bar</a></td>
                        <td>東京都港区新橋2-9-7 一鶴ビル4F</td>
                        <td>新橋SL広場徒歩1分</td>
                        <td>通販サイトテキーラムーチョ運営の店舗。販売も行っている。</td>
                    </tr>
                    <tr>
                        <td><a href="http://agave.jp/menu/">AGAVE</a></td>
                        <td>東京都港区六本木7-18-11 DMビルB1F</td>
                        <td>六本木駅2番出口徒歩1分</td>
                        <td>カクテルだけでなく100種類以上のテキーラを取り揃えている。</td>
                    </tr>

                <tr><td class="table-area__header">店舗販売</th></tr>
                    <tr>
                        <th>店名</th>
                        <th>住所</th>
                        <th>アクセス</th>
                        <th>テキーラ品揃え</th>
                    </tr>
                    <tr>
                        <td><a href="http://tanakaya.cognacfan.com/" target="blank">目白田中屋</a></td>
                        <td>東京都豊島区目白3-4-14</td>
                        <td>目白駅徒歩1分</td>
                        <td>エルチャッロ、カサノブレなどの定番からロクアやラ・コフラディアのカタリーナなど、新規参入モデルも取り揃えている。</td>
                    <tr>
                    <tr>
                        <td><a href="https://www.liquors-hasegawa.com/" target="blank">リカーズハセガワ本店</a></td>
                        <td>JR東京駅 八重洲地下街</td>
                        <td>東京駅0分</td>
                        <td>クエルボを始めエルテソロ、グランパトロンなど高級ブランドまで40～50種類ほど。</td>
                    </tr>

                    <tr><td class="table-area__header">通信販売</th></tr>
                    <tr>
                        <th>店名</th>
                        <th>問い合わせ</th>
                        <th>所在地</th>
                        <th>詳細</th>
                    </tr>
                    <tr>
                        <td><a href="https://www.musashiya-net.co.jp/products/list.php?category_id=419" target="blank">武蔵屋</a></td>
                        <td>0120-11-6348</td>
                        <td>世田谷</td>
                        <td>クエルボを始め、サウザ、オルメカなどの定番を主に60～70種類ほど。</td>
                    </tr>
                    <tr>
                        <td><a href="http://wazawaza.jp/" target="blank">テキーラムーチョ</a></td>
                        <td>03-5510-9173</td>
                        <td>港区新橋</td>
                        <td>テキーラ専門の通販サイト。50ブランド近く扱い、国内屈指の品揃え</td>
                    </tr>
                    <tr>
                        <td><a href="http://www.premium-tequila.jp/" target="blank">Premium Tequila.jp</a></td>
                        <td>03-6759-9796</td>
                        <td>-</td>
                        <td>テキーラ専門の通販サイト。ブランド別・蒸留所別などで検索でき、また、丁寧に詳細が書いてありファンにはたまらない</td>
                    </tr>
            </table>
        </div>
    </div>
</div>
<br>
<br>
@endsection
