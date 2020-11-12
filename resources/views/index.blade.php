@extends('layout.layout')

@section('title','テキーラ全書')
@section('section','テキーラとは')
@section('body_class','body top_page')

@section('main')
    <div class="flex-box">
        <aside class="aside contents-frame">
            {{-- 項目一覧ボタンstart --}}
                @component('component.section-2',[
                    'js_class' => 'js-type-toggle',
                    'section_name' => '項目一覧 ▼',
                    ])
                @endcomponent
            {{-- 項目一覧ボタンend --}}
            {{-- 項目選択ボタンstart --}}
                <ul>
                    @foreach (config('app_index') as $item)
                        @component('component.common-btn',[
                            'btn' => 'type',
                            'hidden' => false,
                            'link' => $item['link'],
                            'text' => $item['text'],
                            ])
                        @endcomponent
                    @endforeach
                </ul>
            {{-- 項目選択ボタンend --}}
        </aside>
        <main class="main contents-frame">
            {{--セクションタイトル〜テキーラの原料〜start --}}
                @component('component.section-2',[
                    'section_id' => 'genryou',
                    'section_name' => 'テキーラの原料',
                    ])
                @endcomponent
            {{-- セクションタイトル〜テキーラの原料〜end --}}
            {{--コンテンツ〜テキーラの原料〜start --}}
                <div class="letters-area">
                    <p class="letters-area__paragraph">
                        　テキーラとは、メキシコはハリスコ州にあるテキーラ村を語源とするヒガンバナ科の多肉植物である竜舌蘭（リュウゼツラン）を用いた蒸留酒である。
                        また、メキシコでは「アガベ」と呼び、植物学者リンネの命名によるものである。シエラ・マドレ山脈の北側に位置するテキーラ村に因んでテキーラという名がついたという。
                    </p>
                    <p class="letters-area__paragraph">
                        　300種以上にわたる竜舌蘭の品種のうち、酒の原料として用いられるのは「アガベ・アメリカーナ」、「アガベ・アトロビレンス」、「アガベ・アスール・テキラーナ」の3種
                        そのうちテキーラの原料として使えるものは「アガベ・アスール・テキラーナ」のみであると法律で定められている。
                        メキシコのテキーラ5州以外で生産されたものは、例え同じ原料・製法を用いたとしても、「テキーラ」と名乗れず、「メスカル」と呼ぶ。
                        また、このアガベを100%使用したものを特に「プレミアムテキーラ」と呼び、より純粋なアガベを堪能することができる。
                    </p>
                    <div class="flex-box center">
                        <p><img src="/image/ryuzeturan_1.jpg" alt="竜舌蘭1"></p>
                        <p><img src="/image/ryuzeturan_2.jpg" alt="竜舌蘭2"></p>
                    </div>
                </div>
            {{-- コンテンツ〜テキーラの原料〜end --}}
            {{--セクションタイトル〜テキーラの定義〜start --}}
                @component('component.section-2',[
                    'section_id' => 'teigi',
                    'section_name' => 'テキーラの定義',
                    ])
                @endcomponent
            {{-- セクションタイトル〜テキーラの定義〜end --}}
            {{--コンテンツ〜テキーラの定義〜start --}}
                <div class="letters-area">
                    <p class="letters-area__paragraph">
                        　メキシコの半官半民機関の「CRT」（テキーラ管理評議委員会）により、以下の事項を全て満たすものが「テキーラ」となり、
                        一つでも満たさなければ、「メスカル」または「リキュール」などの表記になる。
                    </p>
                    <h4 class="letters-area__title">1. テキーラ5州にて育成された「アガベ・アスール・テキラーナ」を使用すること</h4>
                    <p class="letters-area__paragraph indent">
                        テキーラ5州とは、「ハリスコ州」「グアナファト州」「タマウリパス州」「ミチョアカン州」「ナヤリ州」で、
                        この特定の地域で育成・栽培されたものを使用することが義務付けられている。
                        上記5州のうち大半はハリスコ州のものである。
                    </p>
                    <h4 class="letters-area__title">2. テキーラ5州とその周辺で蒸留されていること</h4>
                    <p class="letters-area__paragraph indent">
                        CRT認定の蒸留所番号「NOM 4桁」を必ずボトルに表示する。
                    </p>
                    <h4 class="letters-area__title">3. 原材料に「アガベ・アスール・テキラーナ」を51％以上使用すること</h4>
                    <p class="letters-area__paragraph indent">
                        ブランドによっては80%近く使っているものもあるが、大半は100%使用した「100%アガベ・テキーラ」である。
                        混合しているものは「ミクストテキーラ」という。
                    </p>
                    <h4 class="letters-area__title">4. 最低2回蒸留すること</h4><br>
                    <h4 class="letters-area__title">5. 最終アルコール度数が35～55%内であること</h4>
                    <p class="letters-area__paragraph indent">
                        ブランドにより異なるが、40%ととして出されているものがほとんどである。
                    </p>
                    <h4 class="letters-area__title">6. 人体に有害なメタノール（メチルアルコール）が3mg/1ml以下であること</h4>
                    <p class="letters-area__paragraph indent">
                        日本では1mg/1ml以下となっているが、製菓用と記載することで、輸入販売が許可されている。
                    </p>
                    <h4 class="letters-area__title">7. 水以外に加える添加物は1%以下であること</h4>
                    <p class="letters-area__paragraph indent">
                        固形物が添加されていれば「メスカル」、香料・糖蜜が規定以上だと「リキュール」となる。
                    </p>
                </div>
            {{-- コンテンツ〜テキーラの定義〜end --}}
            {{--セクションタイトル〜テキーラの起源〜start --}}
                @component('component.section-2',[
                    'section_id' => 'kigen',
                    'section_name' => 'テキーラの起源',
                    ])
                @endcomponent
            {{-- セクションタイトル〜テキーラの起源〜end --}}
            {{--コンテンツ〜テキーラの起源〜start --}}
                <div class="letters-area">
                    <h4 class="letters-area__title">
                        1. 醸造酒「プルケ」
                    </h4>
                    <p class="letters-area__paragraph indent">
                        　山の大火事が原因でたまたまできたとされるテキーラ。
                        先住民が山火事の跡から焼けたリュウゼツランの芳香に誘われ口にしてみたところ甘い味がしたそうだ。
                        これがきっかけで多くの仲間の手に渡され、アガベの食物としての価値が見いだされてきた。
                        この機に誕生したのがメスカル、テキーラのもとになる「プルケ」である。
                        これは醸造酒のため、このプルケを蒸留してできたのが、メスカル、テキーラである。
                    </p>
                    <h4 class="letters-area__title">
                        2. スペインの蒸留技術
                    </h4>
                    <p class="letters-area__paragraph indent">
                        　その蒸留技術は、16世紀頃スペイン人によって持ち込まれたとされる。
                        大海賊時代と呼ばれる16世紀。各国に並びスペインも大きな開拓に活躍し、
                        「太陽の沈まない国」と称されていたが、その活動の一環がテキーラの誕生に一役買っていたようだ。
                        スペイン人はその蒸留技術を使い、当時輸入により手に入らなくなったという
                        ブランデーに代わるアルコール飲料をメキシコにて製造することに乗り出した。
                    </p>
                    <h4 class="letters-area__title">
                        3.「メスカルワイン」の製造
                    </h4>
                    <p class="letters-area__paragraph indent">
                        　そこで「プルケ」を蒸留し、よりアルコール度数の高いお酒を造ろうとした。
                        その時造られたのが、「メスカルワイン」というお酒である。
                        スペインはこのメスカルワインが自国のアルコール飲料と競合することを恐れ、メキシコ国内では製造禁止とする時期もあった。
                        この期間メキシコ国内では、秘密裏に造られ続けてその多大な生産量から、スペイン政府の資金繰りのために製造が合法化された。
                    </p>
                    <h4 class="letters-area__title">
                        4.「テキーラ」の輸出
                    </h4>
                    <p class="letters-area__paragraph indent">
                        　それに伴いメスカルワインと並んでメスカル・デ・テキーラの製造も行われるようになり、メキシコ国内では、
                        スペインからのスペイン人向けの輸入品が流通し、代わりに輸出が盛んになってくる。
                        1821年のメキシコ独立運動により、スペインからの輸入が難しくなり、国内生産量が盛んになり、世界へ知られるようになっていく。
                    </p>
                </div>
            {{-- コンテンツ〜テキーラの起源〜end --}}
            {{--セクションタイトル〜テキーラの分類〜start --}}
                @component('component.section-2',[
                    'section_id' => 'bunrui',
                    'section_name' => 'テキーラの分類',
                    ])
                @endcomponent
            {{-- セクションタイトル〜テキーラの分類〜end --}}
            {{--コンテンツ〜テキーラの分類〜start --}}
                <div class="letters-area">
                    <h4 class="letters-area__title">
                        ■ 原材料の混合度合いによる呼称
                    </h4>
                    <p class="letters-area__paragraph indent">
                        ・100%アガベ・テキーラ　ー　アガベ・アスール・テキラーナのみを使用<br>
                        ・ミクスト・テキーラ　ー　アガベ・アスール・テキラーナを51％以上使用
                    </p>
                    <h4 class="letters-area__title">
                        ■ 100%アガベ・テキーラの規則
                    </h4>
                    <p class="letters-area__paragraph indent">
                        1. 原料にアガベ・アスール・テキラーナ以外のものを使用しない<br>
                        2. ハリスコ州（または生産現地）にて瓶詰めしたものであること<br>
                        　ミクスト・テキーラはバルクで輸出して外部での瓶詰めが認められている。<br>
                        3. ラベルに「100% de Agave」と表示すること
                    </p>
                </div>
            {{-- コンテンツ〜テキーラの分類〜end --}}
            {{--セクションタイトル〜熟成度合いによる呼称〜start --}}
                @component('component.section-2',[
                    'section_id' => 'kosyou',
                    'section_name' => '熟成度合いによる呼称',
                    ])
                @endcomponent
            {{-- セクションタイトル〜熟成度合いによる呼称〜end --}}
            {{--コンテンツ〜熟成度合いによる呼称〜start --}}
                <div class="scroll-area">
                    <div class="table-area__scroll-frame">
                        <table class="table-area">
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
                    </div>
                </div>
            {{-- コンテンツ〜熟成度合いによる呼称〜end --}}
            {{--セクションタイトル〜テキーラ5州〜start --}}
                @component('component.section-2',[
                    'section_id' => 'gosyu',
                    'section_name' => 'テキーラ5州',
                    ])
                @endcomponent
            {{-- セクションタイトル〜テキーラ5州〜end --}}
            {{--コンテンツ〜テキーラの5州〜start --}}
                <div class="letters-area">
                    <h4 class="letters-area__title">
                        ■ ハリスコ州
                    </h4>
                    <p class="letters-area__paragraph indent">
                        バジェス地方 - テキーラ地区/アマティタン地区/ラス・フンタス地区/etc..<br>
                        ロスアルトス地方 - アランダス地区/ヘススマリア地区/アトトニルコ地区/アヨトラン地区/ラ・ラハ地区/etc..<br>
                        ソナ・セントロ地方 - ファナカトラン地区/サポパン地区/etc..
                    </p>
                    <h4 class="letters-area__title">
                        ■ グアナファト州
                    </h4>
                    <p class="letters-area__paragraph indent">
                        ペンハモ地区/etc..
                    </p>
                    <h4 class="letters-area__title">
                        ■ タマウリパス州/ナヤリ州/ミチョアカン州
                    </h4>
                    <br>
                    <h4 class="letters-area__title">
                        ■ メキシコ地図（テキーラ5州）
                    </h4>
                    <p class="letters-area__paragraph">
                        <img src="/image/mexico_whitemap.gif">
                    </p>
                    <h4 class="letters-area__title">
                        ■ ハリスコ州地図
                    </h4>
                    <p class="letters-area__paragraph">
                        <img src="/image/jalisco_colormap.png">
                    </p>
                </div>
            {{-- コンテンツ〜テキーラの5州〜end --}}
            {{--セクションタイトル〜蒸留所リスト〜start --}}
                @component('component.section-2',[
                    'section_id' => 'joryujo',
                    'section_name' => '蒸留所リスト',
                    ])
                @endcomponent
            {{-- セクションタイトル〜蒸留所リスト〜end --}}
            {{--コンテンツ〜蒸留所リスト〜start --}}
                <div class="letters-area">
                    <p class="letters-area__paragraph">
                        　テキーラは必ず蒸留を行うが、ボトルには必ずどこの蒸留所で行われたのかが分かるように番号が記載される。
                        その番号は、蒸留所ごとに、前述のCRT（テキーラ評議委員会）により定められた「NOM 4桁数字」が与えられる。
                        蒸留所のほとんどがハリスコ州内にあるのだが、以下にリストとして掲載する。
                    </p>
                </div>
                <div class="scroll-area">
                    <div class="table-area__scroll-frame">
                        <table class="table-area">
                            <tr>
                                <td class="table-area__header">
                                    ハリスコ州 バジェス地方
                                </td>
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
                        </table>
                    </div>
                </div>
                <div class="scroll-area">
                    <div class="table-area__scroll-frame">
                        <table class="table-area">
                            <tr>
                                <td class="table-area__header">
                                    ハリスコ州 ロスアルトス地方
                                </td>
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
                        </table>
                    </div>
                </div>
                <div class="scroll-area">
                    <div class="table-area__scroll-frame">
                        <table class="table-area">
                            <tr>
                                <td class="table-area__header">
                                    ハリスコ州 ソナ・セントロ地方
                                </td>
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
                        </table>
                    </div>
                </div>
                <div class="scroll-area">
                    <div class="table-area__scroll-frame">
                        <table class="table-area">
                            <tr>
                                <td class="table-area__header">
                                    グアナファト州
                                </td>
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
                    </div>
                </div>
            {{-- コンテンツ〜蒸留所リスト〜end --}}
        </main>
    </div>
@endsection
