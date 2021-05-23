<?php

use Illuminate\Database\Seeder;

class DestiladorsTableSeeder extends Seeder
{
    /**
     * destiladorsテーブルにデータ挿入
     *
     * @return void
     */
    public function run()
    {
        // 挿入するデータを設定
        $destiladors =[
            'sauza' => ['id' => 'sauza','name' => 'Sauza','name_kana' => 'サウザ蒸留所','nom' => '1102','area_id' => 'tequila','main_brand' => 'sauza',],
            'cuervo' => ['id' => 'cuervo','name' => 'Cuervo','name_kana' => 'クエルボ蒸留所','nom' => '1122','area_id' => 'tequila','main_brand' => 'josecuervo',],
            'pernodricard' => ['id' => 'pernodricard','name' => 'Pernod Ricard','name_kana' => 'ペルノ・リカール蒸留所','nom' => '1111','area_id' => 'arandas','main_brand' => 'mariachi',],
            'finosdeagave' => ['id' => 'finosdeagave','name' => 'Finos de Agave','name_kana' => 'フィノス・デ・アガベ蒸留所','nom' => '1416','area_id' => 'tequila','main_brand' => 'alacran',],
            'grupotequilero' => ['id' => 'grupotequilero','name' => 'Grupo Tequilero de Los Altos','name_kana' => 'グルポ・テキレロ・デ・ロスアルトス蒸留所','nom' => '1548','area_id' => 'arandas','main_brand' => 'ahatoro',],
            'laaltena' => ['id' => 'laaltena','name' => 'La Altena','name_kana' => 'ラ・アルテ－ニャ蒸留所','nom' => '1139','area_id' => 'arandas','main_brand' => 'eltesoro',],
            'delvalledetequila' => ['id' => 'delvalledetequila','name' => 'del Valle de Tequila','name_kana' => 'デル・バジェ・デ・テキーラ蒸留所','nom' => '1438','area_id' => 'tequila','main_brand' => 'donacelia',],
            'gonzales' => ['id' => 'gonzales','name' => 'Gonzales Gonzales','name_kana' => 'ゴンザレス・ゴンザレス蒸留所','nom' => '1143','area_id' => 'zapopan','main_brand' => 'ole',],
            'orendain' => ['id' => 'orendain','name' => 'Orendain','name_kana' => 'オレンダイン蒸留所','nom' => '1110','area_id' => 'tequila','main_brand' => 'orendain',],
            'caminoreal' => ['id' => 'caminoreal','name' => 'Camino Real','name_kana' => 'カミノ・レアル蒸留所','nom' => '1487','area_id' => 'arandas','main_brand' => 'camino',],
            'companiatequilera' => ['id' => 'companiatequilera','name' => 'Compania Tequilera de Arandas','name_kana' => 'カンパニャ・テキレラ・デ・アランダス蒸留所','nom' => '1460','area_id' => 'arandas','main_brand' => 'elcharro',],
            'casaherradura' => ['id' => 'casaherradura','name' => 'Casa Herradura','name_kana' => 'カーサ・エラドゥーラ蒸留所','nom' => '1119','area_id' => 'amatitan','main_brand' => 'herradura',],
            'corralejo' => ['id' => 'corralejo','name' => 'Corralejo','name_kana' => 'コラレホ蒸留所','nom' => '1368','area_id' => 'penjamo','main_brand' => 'corralejo',],
            'cazadores' => ['id' => 'cazadores','name' => 'Cazadores','name_kana' => 'カサドレス蒸留所','nom' => '1487','area_id' => 'arandas','main_brand' => 'cazadores',],
            'inmobiliariamast' => ['id' => 'inmobiliariamast','name' => 'Inmobiliaria Mast','name_kana' => 'インモビリアリア・マスト蒸留所','nom' => '1462','area_id' => 'lasjuntas','main_brand' => 'porfidio',],
            'juanakatlan' => ['id' => 'juanakatlan','name' => 'Juanakatlan','name_kana' => 'ファナカトラン蒸留所','nom' => '1551','area_id' => 'juanakatlan','main_brand' => 'casadeluna',],
            'donjurio' => ['id' => 'donjurio','name' => 'Donjurio','name_kana' => 'ドンフリオ蒸留所','nom' => '1449','area_id' => 'atotonirco','main_brand' => 'donjurio',],
            'lacofradia' => ['id' => 'lacofradia','name' => 'La Cofradia','name_kana' => 'ラ・コフラディア蒸留所','nom' => '1137','area_id' => 'tequila','main_brand' => 'casanoble',],
            'tequilasfinos' => ['id' => 'tequilasfinos','name' => 'Tequilas Finos','name_kana' => 'テキーラス・フィノス蒸留所','nom' => '1472','area_id' => 'tequila','main_brand' => 'kah',],
            'patron' => ['id' => 'patron','name' => 'Patron','name_kana' => 'パトロン蒸留所','nom' => '1492','area_id' => 'atotonirco','main_brand' => 'patron',],
            'losaltoslajoya' => ['id' => 'losaltoslajoya','name' => 'Los Altos la Joya','name_kana' => 'ロス・アルトス・ラ・ホヤ蒸留所','nom' => '1555','area_id' => 'ayotlan','main_brand' => 'rancholajoya',],
            'casacamarena' => ['id' => 'casacamarena','name' => 'Casa Camarena','name_kana' => 'カーサ・カマレナ蒸留所','nom' => '1456','area_id' => 'arandas','main_brand' => 'cascoviejo',],
            'newtonehijos' => ['id' => 'newtonehijos','name' => 'Newton e Hijos','name_kana' => 'ニュートン・エ・イホス蒸留所','nom' => '1173','area_id' => 'zapopan','main_brand' => 'eldestilador',],
            'licoresveracruz' => ['id' => 'licoresveracruz','name' => 'Licores Veracruz','name_kana' => 'リコーレス・ヴェラクルス蒸留所','nom' => '1433','area_id' => 'atotonirco','main_brand' => 'hijosdevilla',],
            'haciendaloscamichines' => ['id' => 'haciendaloscamichines','name' => 'Hacienda Los Camichines','name_kana' => 'エクセハシエンダ・ロス・カミチネス蒸留所','nom' => '1122','area_id' => 'tequila','main_brand' => 'grancentenario',],
            'tresmujeres' => ['id' => 'tresmujeres','name' => 'Tres Mujeres','name_kana' => 'トレス・ムヘレス蒸留所','nom' => '1466','area_id' => 'amatitan','main_brand' => 'tresmujeres',],
            'barrancadeamatitan' => ['id' => 'barrancadeamatitan','name' => 'Barranca de Amatitan','name_kana' => 'バランカ・デ・アマティタン蒸留所','nom' => '1473','area_id' => 'amatitan','main_brand' => 'donfernando',],
            'rayross' => ['id' => 'rayross','name' => 'Ray Ross','name_kana' => 'レイロス蒸留所','nom' => '1489','area_id' => 'tequila','main_brand' => 'hussongs',],
            'tequileralamagdalena' => ['id' => 'tequileralamagdalena','name' => 'Tequilera la Magdalena','name_kana' => 'テキレラ・ラ・マグダレナ蒸留所','nom' => '1463','area_id' => 'zapopan','main_brand' => 'tressombreros',],
            'tequileramilagro' => ['id' => 'tequileramilagro','name' => 'Tequilera Milagro','name_kana' => 'テキレラ・ミラグロ蒸留所','nom' => '1559','area_id' => 'jesusmaria','main_brand' => 'milagro',],
            'casadepiedra' => ['id' => 'casadepiedra','name' => 'Casa De Piedra','name_kana' => 'カーサ・デ・ピエドラ蒸留所','nom' => '1586','area_id' => 'elarenal','main_brand' => 'chamucos',],
            'tequilena' => ['id' => 'tequilena','name' => 'Tequilena','name_kana' => 'テキレーニャ蒸留所','nom' => '1146','area_id' => 'tequila','main_brand' => 'donfulano',],
            'tequilasdelsenor' => ['id' => 'tequilasdelsenor','name' => 'Tequilas del Senor','name_kana' => 'テキーラス・デル・セニョール蒸留所','nom' => '1124','area_id' => 'guadalajara','main_brand' => 'lachica',],
            'tequilaelviejito' => ['id' => 'tequilaelviejito','name' => 'Tequila el Viejitor','name_kana' => 'エル・ビエヒート蒸留所','nom' => '1107','area_id' => 'atotonirco','main_brand' => 'karma',],
            'tequileralasjuntas' => ['id' => 'tequileralasjuntas','name' => 'Tequilera Las Juntas','name_kana' => 'テキレラ・ラスフンタス蒸留所','nom' => '1500','area_id' => 'amatitan','main_brand' => 'shizuku',],
        ];
        // テーブルにデータを挿入
        foreach ($destiladors as $destilador) {
            DB::table('destiladors')->insert([
                'id' => $destilador['id'],
                'name' => $destilador['name'],
                'name_kana' => $destilador['name_kana'],
                'nom' => $destilador['nom'],
                'area_id' => $destilador['area_id'],
                'main_brand' => $destilador['main_brand'],
            ]);
        }
    }
}
