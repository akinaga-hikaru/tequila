@extends('tequila.layout.layout')

@section('title','テキーラ全書')
@section('section','はじめに')
@section('body_class','top_page')

@section('main')

<center>
    <p class="letters">
        こちらはテキーラが大好きな私によるテキーラの紹介サイトでございます。<br>
        各種メーカーのテキーラを飲み比べて評価していこうというサイトです。<br>
        あくまで個人の主観によるものですので、興味ある方の参考程度に紹介できればいいなと思います。<br>
        また、飲み方を勘違いされがちなテキーラですが、素晴らしいテキーラの飲み方の参照動画をご紹介しますので、ご覧ください。
    </p>
    <p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Fv5uRy9OSJA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </p>

    <h2 id="tequilatoha">テキーラとは</a></h2>
</center>

<div class="box">
<aside>
    <p class="maker">
        <p class="list"><a href="#genryou">テキーラの原料</a></p>
        <p class="list"><a href="#teigi">テキーラの定義</a></p>
        <p class="list"><a href="#kigen">テキーラの起源</a></p>
        <p class="list"><a href="#bunrui">テキーラの分類</a></p>
        <p class="list"><a href="#kosyou">熟成度合いによる呼称</a></p>
        <p class="list"><a href="#gosyu">テキーラ5州</a></p>
        <p class="list"><a href="#joryujo">蒸留所リスト</a></p>
    </p>
</aside>

<main>

    <h3 id="genryou">テキーラの原料</h3>
        <p class="letters">
            テキーラとは、メキシコはハリスコ州にあるテキーラ村を語源とするヒガンバナ科の多肉植物である竜舌蘭（リュウゼツラン）を用いた蒸留酒である。<br>
            また、メキシコでは「アガベ」と呼び、植物学者リンネの命名によるものである。シエラ・マドレ山脈の北側に位置するテキーラ村に因んでテキーラという名がついたという。<br>
            300種以上にわたる竜舌蘭の品種のうち、酒の原料として用いられるのは「アガベ・アメリカーナ」、「アガベ・アトロビレンス」、「アガベ・アスール・テキラーナ」の3種。<br>
            そのうちテキーラの原料として使えるものは「アガベ・アスール・テキラーナ」のみであると法律で定められている。<br>
            メキシコのテキーラ5州以外で生産されたものは、例え同じ原料・製法を用いたとしても、「テキーラ」と名乗れず、「メスカル」と呼ぶ。<br>
            また、このアガベを100%使用したものを特に「プレミアムテキーラ」と呼び、より純粋なアガベを堪能することができる。<br>
        </p>
        <p class="box">
            <img src="/image/tequila/ryuzeturan.jpg" alt="竜舌蘭1" width="480" height="320">
            <img src="/image/tequila/ryuzeturan2.jpg" alt="竜舌蘭2" width="480" height="320"><br>
        </p>

    <h3 id="teigi">テキーラの定義</h3>
        <p class="letters">
            メキシコの半官半民機関の「CRT」（テキーラ管理評議委員会）により、以下の事項を全て満たすものが「テキーラ」となり、<br>
            一つでも満たさなければ、「メスカル」または「リキュール」などの表記になる。<br>
        </p>

        <p class="letters">
            <strong class="syohin">1.テキーラ5州にて育成された「アガベ・アスール・テキラーナ」を使用すること</strong><br>
            テキーラ5州とは、「ハリスコ州」「グアナファト州」「タマウリパス州」「ミチョアカン州」「ナヤリ州」で、<br>この特定の地域で育成・栽培されたものを使用することが義務付けられている。上記5州のうち大半はハリスコ州のものである。<br>
            <strong class="syohin">2.テキーラ5州とその周辺で蒸留されていること</strong><br>
            CRT認定の蒸留所番号「NOM 4桁」を必ずボトルに表示する。<br>
            <strong class="syohin">3.原材料に「アガベ・アスール・テキラーナ」を51％以上使用すること</strong><br>
            ブランドによっては80%近く使っているものもあるが、大半は100%使用した「100%アガベ・テキーラ」である。<br>混合しているものは「ミクストテキーラ」という。<br>
            <strong class="syohin">4.最低2回蒸留すること</strong><br>
            <strong class="syohin">5.最終アルコール度数が35～55%内であること</strong><br>
            ブランドにより異なるが、40%ととして出されているものがほとんどである。<br>
            <strong class="syohin">6.人体に有害なメタノール（メチルアルコール）が3mg/1ml以下であること</strong><br>
            日本では1mg/1ml以下となっているが、製菓用と記載することで、輸入販売が許可されている。<br>
            <strong class="syohin">7.水以外に加える添加物は1%以下であること</strong><br>
            固形物が添加されていれば「メスカル」、香料・糖蜜が規定以上だと「リキュール」となる。
        </p>

    <h3 id="kigen">テキーラの起源</h3>
        <p class="letters">
            <strong class="syohin">1.醸造酒「プルケ」</strong><br>
            山の大火事が原因でたまたまできたとされるテキーラ。<br>
            先住民が山火事の跡から焼けたリュウゼツランの芳香に誘われ口にしてみたところ甘い味がしたそうだ。<br>
            これがきっかけで多くの仲間の手に渡され、アガベの食物としての価値が見いだされてきた。<br><br>
            この機に誕生したのがメスカル、テキーラのもとになる「プルケ」である。<br>
            これは醸造酒のため、このプルケを蒸留してできたのが、メスカル、テキーラである。<br>
            <br>
            <strong class="syohin">2.スペインの蒸留技術</strong><br>
            その蒸留技術は、16世紀頃スペイン人によって持ち込まれたとされる。
            大海賊時代と呼ばれる16世紀。<br>各国に並びスペインも大きな開拓に活躍し、「太陽の沈まない国」と称されていたが、その活動の一環がテキーラの誕生に一役買っていたようだ。<br>
            スペイン人はその蒸留技術を使い、当時輸入により手に入らなくなったというブランデーに代わるアルコール飲料をメキシコにて製造することに乗り出した。<br>
            <br>
            <strong class="syohin">3.「メスカルワイン」の製造</strong><br>
            そこで「プルケ」を蒸留し、よりアルコール度数の高いお酒を造ろうとした。<br>
            その時造られたのが、「メスカルワイン」というお酒である。<br>
            <br>
            スペインはこのメスカルワインが自国のアルコール飲料と競合することを恐れ、メキシコ国内では製造禁止とする時期もあった。<br>
            この期間メキシコ国内では、秘密裏に造られ続けてその多大な生産量から、スペイン政府の資金繰りのために製造が合法化された。<br>
            <br>
            <strong class="syohin">4.「テキーラ」の輸出</strong><br>
            それに伴いメスカルワインと並んでメスカル・デ・テキーラの製造も行われるようになり、メキシコ国内では、スペインからのスペイン人向けの輸入品が流通し、代わりに輸出が盛んになってくる。<br>
            1821年のメキシコ独立運動により、スペインからの輸入が難しくなり、国内生産量が盛んになり、世界へ知られるようになっていく。
        </p>

    <h3 id="bunrui">テキーラの分類</h3>
        <p class="letters">
            100%アガベ・テキーラ.... アガベ・アスール・テキラーナのみを使用<br>
            ミクスト・テキーラ.. アガベ・アスール・テキラーナを51％以上使用
        </p>
        <p class="letters">
            ■100%アガベ・テキーラの規則■<br>
            <strong class="syohin">1.原料にアガベ・アスール・テキラーナ以外のものを使用しない</strong><br>
            <strong class="syohin">2.ハリスコ州（または生産現地）にて瓶詰めしたものであること</strong><br>
            ミクストテキーラはバルクで輸出して外部での瓶詰めが認められている。<br>
            <strong class="syohin">3.ラベルに「100% de Agave」と表示すること</strong>
        </p>

    <h3 id="kosyou">熟成度合いによる呼称</h3>
        <center>
            <table>
                <tr>
                    <th>呼称</th>
                    <th>意味</th>
                    <th>詳細</th>
                </tr>
                <tr>
                    <td>ブランコ</td>
                    <td>シルバー、プラタ<br>ホワイト、クリスタル</td>
                    <td>オーク樽による熟成をしないもの。または、熟成期間が60日以内であること。</td>
                </tr>
                <tr>
                    <td>ホベン / オロ</td>
                    <td>ブランコ＋レポサドorアネホ</td>
                    <td>ブランコと、レポサドまたはアネホと混ぜたもの</td>
                </tr>
                <tr>
                    <td>レポサド</td>
                    <td>休ませたの意味</td>
                    <td>最低2ヶ月間のオーク樽により熟成したもの</td>
                </tr>
                <tr>
                    <td>アネホ</td>
                    <td>熟成させたの意味</td>
                    <td>最低1年間のオーク樽により熟成したもの。オーク樽は600L以下のサイズであること。</td>
                </tr>
                <tr>
                    <td>エクストラアネホ</td>
                    <td>アネホを超えた熟成</td>
                    <td>最低3年間のオーク樽により熟成したもの。オーク樽は600L以下のサイズであること。</td>
                </tr>
            </table>
        </center>

    <h3 id="gosyu">テキーラ5州</h3>
        <center>
            <table>
                <tr>
                    <th>州名</th>
                    <th>代表地方</th>
                    <th>代表地区</th>
                </tr>
                <tr>
                    <td rowspan="3">1. ハ リ ス コ 州</td>
                    <td>バジェス地方</td>
                    <td>テキーラ地区<br>アマティタン地区<br>ラス・フンタス地区</td>
                </tr>
                <tr>
                    <td>ロスアルトス地方</td>
                    <td>アランダス地区<br>ヘススマリア地区<br>アトトニルコ地区<br>アヨトラン地区<br>ラ・ラハ地区</td>
                </tr>
                <tr>
                    <td>ソナ・セントロ地方</td>
                    <td>ファナカトラン地区<br>サポパン地区</td>
                </tr>
                <tr>
                    <td>2. グアナファト州</td>
                    <td></td>
                    <td>ペンハモ地区</td>
                </tr>
                    <td>3. タマウリパス州</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>4. ナ　ヤ　リ　州</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>5. ミチョアカン州</td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <div class="box">
                <p>
                    <strong class="syohin">メキシコ地図 / テキーラ5州</strong><br>
                    <img src="/image/tequila/mexico_whitemap3.gif" width="500" height="500">
                </p>
                <p>
                    <strong class="syohin">ハリスコ州地図</strong><br>
                    <img src="/image/tequila/jalisco_colormap2.png" width="500" height="500">
                </p>
            </div>
        </center>

    <h3 id="joryujo">蒸留所リスト</h3>
        <p class="letters">
            テキーラは必ず蒸留を行うが、ボトルには必ずどこの蒸留所で行われたのかが分かるように番号が記載される。<br>
            その番号は、蒸留所ごとに、前述のCRT（テキーラ評議委員会）により定められた「NOM 4桁数字」が与えられる。<br>
            蒸留所のほとんどがハリスコ州内にあるのだが、以下にリストとして掲載する。
        </p>
        <table>
            <tr>
                <td class="chiho">ハリスコ州 バジェス地方</td>
            </tr>
            <tr>
                <th>蒸留所</th>
                <th>NOM</th>
                <th>取扱銘柄</th>
                <th>所在地</th>
            </tr>
            <tr>
                <td>サウザ蒸留所</td>
                <td>1102</td>
                <td>Sauza</td>
                <td>テキーラ地区</td>
            </tr>
            <tr>
                <td>オレンダイン蒸留所</td>
                <td>1110</td>
                <td>Orendain</td>
                <td>テキーラ地区</td>
            </tr>
            <tr>
                <td>クエルボ蒸留所</td>
                <td>1122</td>
                <td>Jose Cuervo / 1800</td>
                <td>テキーラ地区</td>
            </tr>
            <tr>
                <td>ラ・コフラディア蒸留所</td>
                <td>1137</td>
                <td>Casa Noble / Tres Alegres</td>
                <td>テキーラ地区</td>
            </tr>
            <tr>
                <td>ニュートン・エ・イホス蒸留所</td>
                <td>1173</td>
                <td>EL DESTILADOR</td>
                <td>テキーラ地区</td>
            </tr>
            <tr>
                <td>フィノス・デ・アガベ蒸留所</td>
                <td>1416</td>
                <td>ALACRAN</td>
                <td>テキーラ地区</td>
            </tr>
            <tr>
                <td>デル・バジェ・デ・テキーラ蒸留所</td>
                <td>1438</td>
                <td>Agavales / EL PADRINO</td>
                <td>テキーラ地区</td>
            </tr>
            <tr>
                <td>テキーラス・フィノス蒸留所</td>
                <td>1472</td>
                <td>KAH</td>
                <td>テキーラ地区</td>
            </tr>
            <tr>
                <td>カーサ・エラドゥーラ蒸留所</td>
                <td>1119</td>
                <td>HERRADURA / el Jimador</td>
                <td>アマティタン地区</td>
            </tr>
            <tr>
                <td>トレス・ムヘレス蒸留所</td>
                <td>1466</td>
                <td>Casino AZUL</td>
                <td>アマティタン地区</td>
            </tr>
            <tr>
                <td>インモビリアリア・マスト蒸留所</td>
                <td>1462</td>
                <td>PORFIDIO</td>
                <td>ラス・フンタス地区</td>
            </tr>

            <tr>
                <td class="chiho">ハリスコ州 ロスアルトス地方</td>
            </tr>
            <tr>
                <th>蒸留所</th>
                <th>NOM</th>
                <th>取扱銘柄</th>
                <th>所在地</th>
            </tr>
            <tr>
                <td>ペルノ・リカール蒸留所</td>
                <td>1111</td>
                <td>OLMECA / MARIACHI</td>
                <td>アランダス地区</td>
            </tr>
            <tr>
                <td>ラ・アルテーニャ蒸留所</td>
                <td>1139</td>
                <td>El Tesoro</td>
                <td>アランダス地区</td>
            </tr>
            <tr>
                <td>カーサ・カマレナ蒸留所</td>
                <td>1456</td>
                <td>Casco Viejo</td>
                <td>アランダス地区</td>
            </tr>
            <tr>
                <td>カンパニャ・テキレラ・デ・アランダス蒸留所</td>
                <td>1460</td>
                <td>EL CHARRO / TRES REYS</td>
                <td>アランダス地区</td>
            </tr>
            <tr>
                <td>カミノ・レアル蒸留所</td>
                <td>1487(カサドレス傘下)</td>
                <td>Camino Real</td>
                <td>アランダス地区</td>
            </tr>
            <tr>
                <td>カサドレス蒸留所</td>
                <td>1487</td>
                <td>CASADORES</td>
                <td>アランダス地区</td>
            </tr>
            <tr>
                <td>グルポ・テキレロ・デ・ロスアルトス蒸留所</td>
                <td>1548</td>
                <td>AHA TORO / Chile Caliente</td>
                <td>アランダス地区</td>
            </tr>
            <tr>
                <td>ドン・フリオ蒸留所</td>
                <td>1449</td>
                <td>DonJurio / Tres Magueyes</td>
                <td>アトトニルコ地区</td>
            </tr>
            <tr>
                <td>パトロン蒸留所</td>
                <td>1492</td>
                <td>PATRON</td>
                <td>アトトニルコ地区</td>
            </tr>
            <tr>
                <td>ロス・アルトス・ラ・ホヤ蒸留所</td>
                <td>1555</td>
                <td>RANCHO LA JOYA</td>
                <td>アヨトラン地区</td>
            </tr>
            <tr>
                <td>エクセハシエンダ・ロス・カミチネス蒸留所</td>
                <td>1122(クエルボ傘下)</td>
                <td>GRAN CENTENARIO</td>
                <td>ラ・ラハ地区</td>
            </tr>

            <tr>
                <td class="chiho">ハリスコ州 ソナ・セントロ地方</td>
            </tr>
            <tr>
                <th>蒸留所</th>
                <th>NOM</th>
                <th>取扱銘柄</th>
                <th>所在地</th>
            </tr>
            <tr>
                <td>ゴンザレス・ゴンザレス蒸留所</td>
                <td>1143</td>
                <td>Ole</td>
                <td>サポパン地区</td>
            </tr>
            <tr>
                <td>ファナカトラン蒸留所</td>
                <td>1551</td>
                <td>CASA DE LUNA / La Tilica / MUCHA LIGA</td>
                <td>ファナカトラン地区</td>
            </tr>

            <tr>
                <td class="chiho">グアナファト州</td>
            </tr>
            <tr>
                <th>蒸留所</th>
                <th>NOM</th>
                <th>取扱銘柄</th>
                <th>所在地</th>
            </tr>
            <tr>
                <td>コラレホ蒸留所</td>
                <td>1368</td>
                <td>CORRALEJO</td>
                <td>ペンハモ地区</td>
            </tr>
        </table>
</main>
</div>
@endsection
