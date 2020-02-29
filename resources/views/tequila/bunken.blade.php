@extends('tequila.layout.layout')

@section('title','参考文献')
@section('section','参考文献')
@section('body_class','bunken')

@section('main')
<div class="contents-frame">
    <center>
        <table>
            <tr>
                <th>著者名</th>
                <th>文献名</th>
                <th>出版社</th>
                <th>出版年</th>
            </tr>
            <tr>
                <td>マルコ・ドミンゲス</td>
                <td>『PREMIUM TEQUILA』</td>
                <td>駒草出版</td>
                <td>2012年9月20日</td>
            </tr>
            <tr>
                <td>林生馬</td>
                <td>『テキーラ大鑑』</td>
                <td>廣済堂出版</td>
                <td>2012年7月5日</td>
            </tr>
            <tr>
                <td>橋口孝司</td>
                <td>『スピリッツ銘酒辞典』</td>
                <td>新星出版社</td>
                <td>2002年4月5日</td>
            </tr>
        </table>
    </center>
</div>
<br>
<br>
@endsection
