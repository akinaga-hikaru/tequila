<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SyouhinController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | GET遷移時の商品紹介画面処理
    |--------------------------------------------------------------------------
    */
    public function syouhin()
    {
        /**
         * 配列内の重複する値を削除して昇順にする
         *
         * @param array $list・・・重複削除する配列
         * @param string $delete_key・・・重複削除のキー
         * @return array $lists・・・重複削除後の配列
         */
        function doubleDelete($list, $delete_key)
        {
            // 連想配列の（$delete_key）のValueで重複を削除
            $value_confirm = $lists = [];
            foreach ($list as $value) {
                if (!in_array($value[$delete_key], $value_confirm)) {
                    $value_confirm[] = $value[$delete_key];
                    $lists[] = $value;
                }
            }
            // 昇順に並び替え
            asort($lists);
            // 重複削除した配列を返す
            return $lists;
        }

        /** - 商品データ設定 -
         * 設定変数：$syouhin_data
         * 〜 商品データテーブルから全てのデータを取得 〜 */
        $syouhin_data = DB::table('syouhin')->get();

        /** - 生産地データ設定 -
         * 設定変数：$locals_data
         * 〜 州＋地方マスタテーブルから全てのデータを取得 〜 */
        $locals_data = DB::table('locals')
        ->leftjoin('states', 'locals.state_id', '=', 'states.id')
        ->select('locals.id as id','locals.name as name','locals.name_kana as name_kana','locals.description as description','states.id as state_id','states.name as state_name','states.name_kana as state_name_kana')
        ->get();

        /** - ブランド名設定 -
         * 設定変数：$brand
         * 〜 ブランドマスタテーブルからブランド名を抽出し、連想配列化 〜 */
        $brands = [];
        foreach (DB::table('brands')->get() as $item) {
            $brand[] = [
                'brand_id' => $item->id,
                'brand_name' => $item->name,
                'brand_name_kana' => $item->name_kana,
            ];
        }
        $brands = doubleDelete($brand, 'brand_id');

        /** - NOM設定 -
         * 設定変数：$noms
         * 〜 商品データからNOMを抽出し、連想配列化 〜 */
        $destiladors = [];
        foreach ($syouhin_data as $item) {
            $destilador[] = [
                'nom' => $item->dest_nom,
                'dest_name_kana' => $item->dest_name_kana,
            ];
        }
        $destiladors = doubleDelete($destilador, 'nom');

        /** - 生産地方設定 -
         * 設定変数：$locals
         * 〜 生産地方マスタテーブルから地方名を抽出し、連想配列化 〜 */
        $locals = [];
        foreach ($locals_data as $item) {
            $locals[] = [
                'local_id' => $item->id,
                'local_name_kana' => $item->id == "others" ? $item->name_kana : $item->state_name_kana . $item->name_kana,
                'description' => $item->description,
            ];
        }

        /** - 熟成度合い設定 -
         * 設定変数：$agings
         * 〜 熟成度マスタテーブルからブランド名を抽出し、連想配列化 〜 */
        $agings = [];
        foreach (DB::table('agings')->get() as $item) {
            $agings[] = [
                'aging_id' => $item->id,
                'aging_name_kana' => $item->name_kana,
                'description' => $item->description,
            ];
        }

        /** - 生産地区設定 -
         * 設定変数：$areas
         * 〜 商品データから生産地区を抽出し、連想配列化 〜 */
        $area = [];
        foreach ($syouhin_data as $item) {
            $area[] = [
                'area_id' => $item->area_id,
                'area_name_kana' => $item->area_name_kana,
                'local_id' => $item->local_id,
                'local_name_kana' => $item->local_name_kana,
            ];
        }
        $areas['all'] = doubleDelete($area, 'area_id');
        arsort($areas['all']);

        // 地方ごとにデータを整形
        foreach ($areas['all'] as $key => $value) {
            if ($value['area_name_kana'] === '-') {
                $value['area_name_kana'] = config('app_syouhin.page.other_area');
            }
            $areas[$value['local_id']][] = $value;
        }
        array_shift($areas);

        /** - [項目選択]ボタン設定 -
         * 設定変数：$types */
        $types = [
            [
                'js_class_1' => config('app_class_js.brand_type'),
                'title' => config('app_syouhin.type.brand') . '（' . count($brands) . '）'
            ],
            [
                'js_class_1' => config('app_class_js.dest_type'),
                'title' => config('app_syouhin.type.dest') . '（' . count($destiladors) . '）'
            ],
            [
                'js_class_1' => config('app_class_js.local_type'),
                'title' => config('app_syouhin.type.local') . '（' . count($locals) . '）'
            ],
            [
                'js_class_1' => config('app_class_js.aging_type'),
                'title' => config('app_syouhin.type.aging') . '（' . count($agings) . '）'
            ],
        ];

        return view('syouhin')->with([
            'syouhin_data' => $syouhin_data,
            'brands' => $brands,
            'locals' => $locals,
            'destiladors' => $destiladors,
            'agings' => $agings,
            'areas' => $areas,
            'types' => $types,
        ]);
    }
}
