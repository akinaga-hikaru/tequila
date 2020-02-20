@extends('tequila.layout.layout')

@section('title','商品紹介 1ページ')
@section('section','商品紹介')

@section('main')

<div class="box">
    @include('tequila.component.syouhin_list')
    <main>
        <center>
            <p>
                1l<a href="syouhin_2">2</a>l<a href="syouhin_3">3</a>l<a href="syouhin_4">4</a>
            </p>
        </center>

        {{-- ◇SAUZA(サウザ)コンテナ --}}
            @component('tequila.component.syouhin_container',[
                'syouhin_id' => 'sauza',
                'syouhin_name' => '◇SAUZA(サウザ)',
                'page_number' => 'maker_intro'
                ])
                <div class="box">{{-- １段目 --}}
                    @component('tequila.component.syouhin_parts',[
                        'url' => 'https://www.musashiya-net.co.jp/products/detail.php?product_id=753',
                        'image' => 'sauza_silver.jpg',
                        'name' => 'サウザ シルバー',
                        'aging' => 'Silver',
                        'contents_alc' => '40%',
                        'contents_dest' => 'サウザ',
                        'contents_nom' => '1102',
                        'contents_area' => 'バジェス地方 テキーラ地区',
                        'contents_review' => '・爽やかな香りとキレのある王道テイスト'
                    ])
                    @endcomponent
                    @component('tequila.component.syouhin_parts',[
                        'url' => 'https://www.musashiya-net.co.jp/products/detail.php?product_id=754',
                        'image' => 'sauza_gold.jpg',
                        'name' => 'サウザ ゴールド',
                        'aging' => 'Gold',
                        'contents_alc' => '40%',
                        'contents_dest' => 'サウザ',
                        'contents_nom' => '1102',
                        'contents_area' => 'バジェス地方 テキーラ地区',
                        'contents_review' => '・爽快なキレの良さを残しつつ滑らかな風味'
                    ])
                    @endcomponent
                    @component('tequila.component.syouhin_parts',[
                        'url' => 'https://www.musashiya-net.co.jp/products/detail.php?product_id=9796',
                        'image' => 'sauza_blue_silver.jpg',
                        'name' => 'サウザ ブルー シルバー',
                        'aging' => 'Blue Silver',
                        'contents_alc' => '40% / 100%AGAVE',
                        'contents_dest' => 'サウザ',
                        'contents_nom' => '1102',
                        'contents_area' => 'バジェス地方 テキーラ地区',
                        'contents_review' => '・雑味が少ない爽快な香りが広がる'
                    ])
                    @endcomponent
                </div>
                <div class="box">{{-- ２段目 --}}
                    @component('tequila.component.syouhin_parts',[
                        'url' => 'https://sake.biccamera.com/bs/item/3285766/',
                        'image' => 'sauza_three_generations.jpg',
                        'name' => 'サウザ スリージェネレーション プラタ',
                        'aging' => 'Tres Generaciones Plata',
                        'contents_alc' => '40% / 100%AGAVE',
                        'contents_dest' => 'サウザ',
                        'contents_nom' => '1102',
                        'contents_area' => 'バジェス地方 テキーラ地区',
                        'contents_review' => '・爽やかながら芯のあるアガベ感'
                    ])
                    @endcomponent
                </div>
            @endcomponent

        {{-- ◇Jose Cuervo(ホセ・クエルボ)コンテナ --}}
            @component('tequila.component.syouhin_container',[
                'syouhin_id' => 'josecuervo',
                'syouhin_name' => '◇Jose Cuervo(ホセ・クエルボ)',
                'page_number' => 'maker_intro'
                ])
                <div class="box">{{-- １段目 --}}
                    @component('tequila.component.syouhin_parts',[
                        'url' => 'https://www.musashiya-net.co.jp/products/detail.php?product_id=3084',
                        'image' => 'cuervo_silver.jpg',
                        'name' => 'クエルボ シルバー',
                        'aging' => 'Especial Silver',
                        'contents_alc' => '40%',
                        'contents_dest' => 'クエルボ',
                        'contents_nom' => '1122',
                        'contents_area' => 'バジェス地方 テキーラ地区',
                        'contents_review' => '・甘さ引き立つ上品漂う香り'
                    ])
                    @endcomponent
                    @component('tequila.component.syouhin_parts',[
                        'url' => 'https://www.musashiya-net.co.jp/products/detail.php?product_id=754',
                        'image' => 'sauza_gold.jpg',
                        'name' => 'サウザ ゴールド',
                        'aging' => 'Gold',
                        'contents_alc' => '40%',
                        'contents_dest' => 'サウザ',
                        'contents_nom' => '1102',
                        'contents_area' => 'バジェス地方 テキーラ地区',
                        'contents_review' => '・爽快なキレの良さを残しつつ滑らかな風味'
                    ])
                    @endcomponent
                    @component('tequila.component.syouhin_parts',[
                        'url' => 'https://www.musashiya-net.co.jp/products/detail.php?product_id=9796',
                        'image' => 'sauza_blue_silver.jpg',
                        'name' => 'サウザ ブルー シルバー',
                        'aging' => 'Blue Silver',
                        'contents_alc' => '40% / 100%AGAVE',
                        'contents_dest' => 'サウザ',
                        'contents_nom' => '1102',
                        'contents_area' => 'バジェス地方 テキーラ地区',
                        'contents_review' => '・雑味が少ない爽快な香りが広がる'
                    ])
                    @endcomponent
                </div>
                <div class="box">{{-- ２段目 --}}
                    @component('tequila.component.syouhin_parts',[
                        'url' => 'https://sake.biccamera.com/bs/item/3285766/',
                        'image' => 'sauza_three_generations.jpg',
                        'name' => 'サウザ スリージェネレーション プラタ',
                        'aging' => 'Tres Generaciones Plata',
                        'contents_alc' => '40% / 100%AGAVE'
                        'contents_dest' => 'サウザ',
                        'contents_nom' => '1102',
                        'contents_area' => 'バジェス地方 テキーラ地区',
                        'contents_review' => '・爽やかながら芯のあるアガベ感'
                    ])
                    @endcomponent
                </div>
            @endcomponent
            <h3 id="josecuervo">◇Jose Cuervo(ホセ・クエルボ)</h3>
            <div class="box">
            <div>
            <p>
            <a href="https://www.musashiya-net.co.jp/products/detail.php?product_id=3084" alt="ホセ・クエルボ 商品紹介" target="blank"><img src="/image/tequila/cuervo_silver.jpg" alt="クエルボ シルバー" width="300" height="300"></a><br>
            </p>
            <p class="syohin">
            <strong class="syohin">Especial Silver</strong><br>■Alc.40%<br>■クエルボ蒸留所<br>■NOM 1122<br>■バジェス地方 テキーラ地区<br>・甘さ引き立つ上品漂う香り
            </p>
            </div>
            <div>
            <p>
            <a href="https://www.musashiya-net.co.jp/products/detail.php?product_id=738" alt="ホセ・クエルボ 商品紹介" target="blank"><img src="/image/tequila/cuervo_reposado.jpg" alt="クエルボ レポサド" width="300" height="300"></a><br>
            </p>
            <p class="syohin">
            <strong class="syohin">Especial Reposado</strong><br>■Alc.40%<br>■クエルボ蒸留所<br>■NOM 1122<br>■バジェス地方 テキーラ地区<br>・樽熟成による芯のある深みと滑らかさ
            </p>
            </div>
            <div>
            <p>
            <a href="https://www.musashiya-net.co.jp/products/detail.php?product_id=10315" alt="ホセ・クエルボ 商品紹介" target="blank"><img src="/image/tequila/cuervo_traditional_silver.jpg" alt="クエルボ トラディショナル シルバー" width="300" height="300"></a><br>
            </p>
            <p class="syohin">
            <strong class="syohin">Traditional Silver</strong><br>■Alc.40% / 100%AGAVE<br>■クエルボ蒸留所<br>■NOM 1122<br>■バジェス地方 テキーラ地区<br>・アガベの雑味が少ない甘味と上品な芳香
            </p>
            </div>
            </div>
            <div class="box">
            <div>
            <p>
            <a href="https://www.musashiya-net.co.jp/products/detail.php?product_id=739"alt="1800 商品紹介" target="blank"><img src="/image/tequila/1800_silver.jpg" alt="1800 シルバー" width="300" height="300"></a><br>
            </p>
            <p class="syohin">
            <strong class="syohin">1800 Silver</strong><br>■Alc.40% / 100%AGAVE<br>■クエルボ蒸留所<br>■NOM 1122<br>■バジェス地方 テキーラ地区<br>・柔和で甘い爽快感とスパイシーなキレの融合
            </p>
            </div>
            <div>
            <p>
            <a href="http://www.premium-tequila.jp/products/detail.php?product_id=64"alt="1800 商品紹介" target="blank"><img src="/image/tequila/1800_reposado.jpg" alt="1800 レポサド" width="300" height="300"></a><br>
            </p>
            <p class="syohin">
            <strong class="syohin">1800 Reposado</strong><br>■Alc.40% / 100%AGAVE<br>■クエルボ蒸留所<br>■NOM 1122<br>■バジェス地方 テキーラ地区<br>・甘いすっきりとした香り<br>
            ・滑らかな飲み心地<br>
            ・透き通った爽やかな甘味<br>
            </p>
            </div>
            </div>
            <a href="maker_intro#josecuervo" alt="クエルボ ブランド">ブランド説明</a>



            <h3 id="olmeca">◇OLMECA(オルメカ)</h3>
            <div class="box">
            <div>
            <p>
            <a href="https://www.musashiya-net.co.jp/products/detail.php?product_id=747"alt="オルメカ 商品紹介" target="blank"><img src="/image/tequila/olmeca_blanco.jpg" alt="オルメカ ブランコ" width="300" height="300"></a><br>
            <p/>
            <p class="syohin">
            <strong class="syohin">Blanco</strong><br>■Alc.40%<br>■ペルノ・リカール蒸留所<br>■NOM 1111<br>■ロスアルトス地方 アランダス地区<br>・上品で甘さ控えめでドライなテイスト
            </p>
            </div>
            <div>
            <p>
            <a href="https://www.musashiya-net.co.jp/products/detail.php?product_id=748"alt="オルメカ 商品紹介" target="blank"><img src="/image/tequila/olmeca_reposado.jpg" alt="オルメカ レポサド" width="300" height="300"></a><br>
            </p>
            <p class="syohin">
            <strong class="syohin">Reposado</strong><br>■Alc.40%<br>■ペルノ・リカール蒸留所<br>■NOM 1111<br>■ロスアルトス地方 アランダス地区<br>・スパイス香るショット向きな大人テイスト
            </p>
            </div>
            </div>
            <a href="maker_intro#olmeca" alt="オルメカ ブランド">ブランド説明</a>



            <h3 id="mariachi">◇MARIACHI(マリアチ)</h3>
            <div class="box">
            <div>
            <p>
            <a href="https://www.musashiya-net.co.jp/products/detail.php?product_id=745"alt="マリアチ 商品紹介" target="blank"><img src="/image/tequila/mariachi_silver.jpg" alt="マリアチ シルバー" width="300" height="300"></a><br>
            </p>
            <p class="syohin">
            <strong class="syohin">Silver</strong><br>■Alc.40%<br>■ペルノ・リカール蒸留所<br>■NOM 1111<br>■ロスアルトス地方 アランダス地区<br>・上品でまろやかな口当たり
            </p>
            </div>
            <div>
            <p>
            <a href="https://www.musashiya-net.co.jp/products/detail.php?product_id=746"alt="マリアチ 商品紹介" target="blank"><img src="/image/tequila/mariachi_gold.jpg" alt="マリアチ ゴールド" width="300" height="300"></a><br>
            </p>
            <p class="syohin">
            <strong class="syohin">Gold</strong><br>■Alc.40%<br>■ペルノ・リカール蒸留所<br>■NOM 1111<br>■ロスアルトス地方 アランダス地区<br>・スパイシーな香りとまろやかな甘さ
            </p>
            </div>
            </div>
            <a href="maker_intro#mariachi" alt="マリアチ ブランド">ブランド説明</a>



            <h3 id="alacran">◇ALACRAN(アラクラン)</h3>
            <div class="box">
            <div>
            <p>
            <a href="http://www.premium-tequila.jp/products/detail.php?product_id=14"alt="アラクラン 商品紹介" target="blank"><img src="/image/tequila/alacran_blanco.jpg" alt="アラクラン ブランコ" width="300" height="300"></a><br>
            </p>
            <p class="syohin">
            <strong class="syohin">Blanco</strong><br>■Alc.40% / 100%AGAVE<br>■フィノス・デ・アガベ蒸留所<br>■NOM 1416<br>■バジェス地方 テキーラ地区<br>・甘い口当たりとサイダーのような爽やかな香り
            </p>
            </div>
            <div>
            <p>
            <a href="https://wazawaza.jp/products/detail.php?product_id=601"alt="アラクラン 商品紹介" target="blank"><img src="/image/tequila/alacran_crystal_anejo.jpg" alt="アラクラン クリスタルアネホ" width="300" height="300"></a><br>
            </p>
            <p class="syohin">
            <strong class="syohin">Crystal Anejo</strong><br>■Alc.35% / 100%AGAVE<br>■フィノス・デ・アガベ蒸留所<br>■NOM 1416<br>■バジェス地方 テキーラ地区<br>・クリームソーダ風の爽やかな香り<br>・バニラと蜂蜜を思わすまろやかさ<br>・滑らかな舌触りと酸味のある後味
            </p>
            </div>
            </div>
            <a href="maker_intro#alacran" alt="アラクラン ブランド">ブランド説明</a>



            <h3 id="ahatoro">◇AHA TORO(アハトロ)</h3>
            <div class="box">
            <div>
            <p>
            <a href="http://www.premium-tequila.jp/products/detail.php?product_id=15"alt="アハトロ 商品紹介" target="blank"><img src="/image/tequila/ahatoro_blanco.jpg" alt="アハトロ ブランコ" width="300" height="300"></a><br>
            </p>
            <p class="syohin">
            <strong class="syohin">Blanco</strong><br>■Alc.40% / 100%AGAVE<br>■グルポ・テキレロ・デ・ロスアルトス蒸留所<br>■NOM 1548<br>■ロスアルトス地方 アランダス地区<br>・甘く優しい香りとキレのある苦み
            </p>
            </div>
            <div>
            <p>
            <a href="http://www.premium-tequila.jp/products/detail.php?product_id=17"alt="アハトロ 商品紹介" target="blank"><img src="/image/tequila/ahatoro_anejo.jpg" alt="アハトロ アネホ" width="300" height="300"></a><br>
            </p>
            <p class="syohin">
            <strong class="syohin">Anejo</strong><br>■Alc.40% / 100%AGAVE<br>■グルポ・テキレロ・デ・ロスアルトス蒸留所<br>■NOM 1548<br>■ロスアルトス地方 アランダス地区<br>・熟成しつつもあっさりとした飲み口
            </p>
            </div>
            </div>
            <a href="maker_intro#ahatoro" alt="アハトロ ブランド">ブランド説明</a>



            <h3 id="eltesoro">◇El Tesoro(エルテソロ)</h3>
            <div class="box">
            <div>
            <p>
            <a href="http://www.premium-tequila.jp/products/detail.php?product_id=173"alt="エルテソロ 商品紹介" target="blank"><img src="/image/tequila/eltesoro_anejo.jpg" alt="エルテソロ アネホ" width="300" height="300"></a><br>
            </p>
            <p class="syohin">
            <strong class="syohin">Paradiso Anejo</strong><br>■Alc.40% / 100%AGAVE<br>■ラ・アルテ－ニャ蒸留所<br>■NOM 1139<br>■ロスアルトス地方 アランダス地区<br>・5年熟成の少し酸味ある香りと控えめな甘さ<br>・コニャック樽で60ヶ月熟成
            </p>
            </div>
            </div>
            <a href="maker_intro#eltesoro" alt="エルテソロ ブランド">ブランド説明</a>



            <h3 id="agavales">◇Agavales(アガバレス)</h3>
            <div class="box">
            <div>
            <p>
            <a href="http://www.premium-tequila.jp/products/detail.php?product_id=76"alt="アガバレス 商品紹介" target="blank"><img src="/image/tequila/agavales_blanco.jpg" alt="アガバレス ブランコ" width="300" height="300"></a><br>
            </p>
            <p class="syohin">
            <strong class="syohin">Blanco</strong><br>■Alc.40% / 100%AGAVE<br>■デル・バジェ・デ・テキーラ蒸留所<br>■NOM 1438<br>■バジェス地方 テキーラ地区<br>・甘味が少なく辛みの感じるキレ<br>
            </p>
            </div>
            </div>
            <a href="maker_intro#agavales" alt="アガバレス ブランド">ブランド説明</a>



            <h3 id="ole">◇Ole(オーレ)</h3>
            <div class="box">
            <div>
            <p>
            <a href="https://www.miraido-onlineshop.com/item/7-ole-tequila-40/"alt="オーレ 商品紹介" target="blank"><img src="/image/tequila/ole_silver.jpg" alt="オーレ シルバー" width="300" height="300"></a><br>
            </p>
            <p class="syohin">
            <strong class="syohin">Silver</strong><br>■Alc.40%<br>■ゴンザレス・ゴンザレス蒸留所<br>■NOM 1143<br>■ソナ・セントロ地方 サポパン地区<br>・スパイシーな香り漂いキレもある飲みやすさ<br>
            </p>
            </div>
            </div>
            <a href="maker_intro#ole" alt="オーレ ブランド">ブランド説明</a>



            <h3 id="orendain">◇Orendain(オレンダイン)</h3>
            <div class="box">
            <div>
            <p>
            <a href="https://www.musashiya-net.co.jp/products/detail.php?product_id=750"alt="オレンダイン 商品紹介" target="blank"><img src="/image/tequila/orendain_blanco.jpg" alt="オレンダイン ブランコ" width="300" height="300"></a><br>
            </p>
            <p class="syohin">
            <strong class="syohin">Blanco</strong><br>■Alc.40%<br>■オレンダイン蒸留所<br>■NOM 1110<br>■バジェス地方 テキーラ地区<br>・甘くなめらか且つ深みのある爽やかな芳香<br>
            </p>
            </div>
            </div>
            <a href="maker_intro#orendain" alt="オレンダイン ブランド">ブランド説明</a>

    </main>
</div>
<center>
    <p>
        1l<a href="syouhin_2">2</a>l<a href="syouhin_3">3</a>l<a href="syouhin_4">4</a>
    </p>
    <br>
    <br>
</center>
@endsection
