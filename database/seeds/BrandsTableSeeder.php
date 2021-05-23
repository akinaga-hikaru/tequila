<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * brandsテーブルにデータ挿入
     *
     * @return void
     */
    public function run()
    {
        // 挿入データを設定
        $brands = [
            'sauza' => ['id' => 'sauza', 'name' => 'SAUZA', 'name_kana' => 'サウザ'],
            'josecuervo' => ['id' => 'josecuervo', 'name' => 'Jose Cuervo', 'name_kana' => 'ホセ・クエルボ'],
            'olmeca' => ['id' => 'olmeca', 'name' => 'OLMECA', 'name_kana' => 'オルメカ'],
            'mariachi' => ['id' => 'mariachi', 'name' => 'MARIACHI', 'name_kana' => 'マリアチ'],
            'alacran' => ['id' => 'alacran', 'name' => 'ALACRAN', 'name_kana' => 'アラクラン'],
            'ahatoro' => ['id' => 'ahatoro', 'name' => 'AHA TORO', 'name_kana' => 'アハトロ'],
            'eltesoro' => ['id' => 'eltesoro', 'name' => 'El Tesoro', 'name_kana' => 'エルテソロ'],
            'agavales' => ['id' => 'agavales', 'name' => 'Agavales', 'name_kana' => 'アガバレス'],
            'ole' => ['id' => 'ole', 'name' => 'Ole', 'name_kana' => 'オーレ'],
            'orendain' => ['id' => 'orendain', 'name' => 'Orendain', 'name_kana' => 'オレンダイン'],
            'camino' => ['id' => 'camino', 'name' => 'Camino', 'name_kana' => 'カミノ'],
            'elcharro' => ['id' => 'elcharro', 'name' => 'EL CHARRO', 'name_kana' => 'エルチャッロ'],
            'herradura' => ['id' => 'herradura', 'name' => 'HERRADURA', 'name_kana' => 'エラドゥーラ'],
            'corralejo' => ['id' => 'corralejo', 'name' => 'CORRALEJO', 'name_kana' => 'コラレホ'],
            'cazadores' => ['id' => 'cazadores', 'name' => 'CAZADORES', 'name_kana' => 'カサドレス'],
            'porfidio' => ['id' => 'porfidio', 'name' => 'PORFIDIO', 'name_kana' => 'ポルフィディオ'],
            'casadeluna' => ['id' => 'casadeluna', 'name' => 'CASA DE LUNA', 'name_kana' => 'カサデルナ'],
            'tresreyes' => ['id' => 'tresreyes', 'name' => 'TRES REYES', 'name_kana' => 'トレスレイス'],
            'eljimador' => ['id' => 'eljimador', 'name' => 'El Jimador', 'name_kana' => 'エルジマドール'],
            'donjurio' => ['id' => 'donjurio', 'name' => 'DonJurio', 'name_kana' => 'ドンフリオ'],
            'casanoble' => ['id' => 'casanoble', 'name' => 'Casa Noble', 'name_kana' => 'カサノブレ'],
            'kah' => ['id' => 'kah', 'name' => 'KAH', 'name_kana' => 'カー'],
            'patron' => ['id' => 'patron', 'name' => 'PATRON', 'name_kana' => 'パトロン'],
            'latilica' => ['id' => 'latilica', 'name' => 'La Tilica', 'name_kana' => 'ラティリカ'],
            'muchaliga' => ['id' => 'muchaliga', 'name' => 'MUCHA LIGA', 'name_kana' => 'ムチャリガ'],
            'rancholajoya' => ['id' => 'rancholajoya', 'name' => 'RANCHO LA JOYA', 'name_kana' => 'ランチョラホヤ'],
            'cascoviejo' => ['id' => 'cascoviejo', 'name' => 'Casco Viejo', 'name_kana' => 'カスコヴィエホ'],
            'eldestilador' => ['id' => 'eldestilador', 'name' => 'EL DESTILADOR', 'name_kana' => 'エルデスティラダー'],
            'tresalegrescompadres' => ['id' => 'tresalegrescompadres', 'name' => 'Tres Alegres Compadres', 'name_kana' => 'トレスアレグレス・コンパドレス'],
            'hijosdevilla' => ['id' => 'hijosdevilla', 'name' => 'Hijos de Villa', 'name_kana' => 'イホスデヴィジャ'],
            'grancentenario' => ['id' => 'grancentenario', 'name' => 'GRAN CENTENARIO', 'name_kana' => 'グランセンテナリオ'],
            'chilecariente' => ['id' => 'chilecariente', 'name' => 'Chile Cariente', 'name_kana' => 'チリカリエンテ'],
            'tresmagueyes' => ['id' => 'tresmagueyes', 'name' => 'Tres Magueyes', 'name_kana' => 'トレスマゲイエス'],
            'casinoazul' => ['id' => 'casinoazul', 'name' => 'Casino AZUL', 'name_kana' => 'カジノアズール'],
            'elpadrino' => ['id' => 'elpadrino', 'name' => 'EL PADRINO', 'name_kana' => 'エルパドリーノ'],
            'lacofradia' => ['id' => 'lacofradia', 'name' => 'LA COFRADIA', 'name_kana' => 'ラ・コフラディア'],
            'donacelia' => ['id' => 'donacelia', 'name' => 'DONA CELIA', 'name_kana' => 'ドーニャ・セリア'],
            'donfernando' => ['id' => 'donfernando', 'name' => 'Don Fernando', 'name_kana' => 'ドンフェルナンド'],
            'rehiletepapalote' => ['id' => 'rehiletepapalote', 'name' => 'Rehilete PAPALOTE', 'name_kana' => 'レヒレテ・パパロテ'],
            'hussongs' => ['id' => 'hussongs', 'name' => 'Hussong\'s', 'name_kana' => 'ハッサンズ'],
            'tesoroazul' => ['id' => 'tesoroazul', 'name' => 'TESORO AZUL', 'name_kana' => 'テソロアズール'],
            'santo' => ['id' => 'santo', 'name' => 'Santo', 'name_kana' => 'サント'],
            'loscorrales' => ['id' => 'loscorrales', 'name' => 'Los Corrales', 'name_kana' => 'ロスコラレス'],
            'tressombreros' => ['id' => 'tressombreros', 'name' => 'Tres Sombreros', 'name_kana' => 'トレスソンブレロス'],
            'lokita' => ['id' => 'lokita', 'name' => 'Lokita', 'name_kana' => 'ロキータ'],
            'milagro' => ['id' => 'milagro', 'name' => 'Milagro', 'name_kana' => 'ミラグロ'],
            'chamucos' => ['id' => 'chamucos', 'name' => 'CHAMUCOS', 'name_kana' => 'チャムコス'],
            'mexicat' => ['id' => 'mexicat', 'name' => 'MEXICAT', 'name_kana' => 'メキシキャット'],
            'mitierra' => ['id' => 'mitierra', 'name' => 'Mi Tierra', 'name_kana' => 'ミティエラ'],
            'donfulano' => ['id' => 'donfulano', 'name' => 'Don Fulano', 'name_kana' => 'ドンフラノ'],
            'lachica' => ['id' => 'lachica', 'name' => 'La Chica', 'name_kana' => 'ラチカ'],
            'afamado' => ['id' => 'afamado', 'name' => 'AFAMADO', 'name_kana' => 'アファマド'],
            'karma' => ['id' => 'karma', 'name' => 'KARMA', 'name_kana' => 'カーマ'],
            'tresmujeres' => ['id' => 'tresmujeres', 'name' => 'Tres Mujeres', 'name_kana' => 'トレスムヘレス'],
            'kirkland' => ['id' => 'kirkland', 'name' => 'KIRKLAND', 'name_kana' => 'カークランド'],
            'thunderstruck' => ['id' => 'thunderstruck', 'name' => 'THUNDER STRUCK', 'name_kana' => 'サンダーストラック'],
            'shizuku' => ['id' => 'shizuku', 'name' => 'Shizuku', 'name_kana' => '雫'],
        ];

        // テーブルにデータを挿入
        foreach ($brands as $brand) {
            DB::table('brands')->insert([
                'id' => $brand['id'],
                'name' => $brand['name'],
                'name_kana' => $brand['name_kana'],
            ]);
        }
    }
}
