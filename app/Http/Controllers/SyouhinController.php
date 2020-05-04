<?php

namespace App\Http\Controllers;

use App\SyouhinTable;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

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
            // 重複削除した配列を返却
            return $lists;
        }

        /** - 商品データ設定 -
         * 設定変数：$syouhin_data_all
         * 〜 DB(tequila)のTable(syouhin)から全てのデータを取得 〜 */
        $syouhin_data_all = DB::table('syouhin')->get();

        /** - ブランド名設定 -
         * 設定変数：$titles
         * 〜 DBデータからブランド名を抽出し、連想配列化 〜 */
        $title = [];
        foreach ($syouhin_data_all as $item) {
            $title[] = [
                'title' => $item->title_name,
                'title_id' => $item->title_id,
            ];
        }
        $titles = doubleDelete($title, 'title');

        /** - NOM設定 -
         * 設定変数：$noms
         * 〜 DBデータからNOMを抽出し、連想配列化 〜 */
        $nom = [];
        foreach ($syouhin_data_all as $item) {
            $nom[] = [
                'nom' => $item->contents_nom,
                'dest' => $item->contents_dest,
            ];
        }
        $noms = doubleDelete($nom, 'nom');

        /** - 生産地方設定 -
         * 設定変数：$locals
         * 〜 configで定義 〜 */
        $locals = config('app_syouhin.locals');

        /** - 熟成度合い設定 -
         * 設定変数：$agings
         * 〜 configで定義 〜 */
        $agings = config('app_syouhin.agings');

        /** - 生産地区設定 -
         * 設定変数：$areas
         * 〜 DBデータから生産地区を抽出し、連想配列化 〜 */
        $area = [];
        foreach ($syouhin_data_all as $item) {
            $area[] = [
                'area_id' => $item->contents_area_id,
                'area' => $item->contents_area,
                'local_id' => $item->contents_local_id,
                'local' => $item->contents_local,
            ];
        }
        $areas = doubleDelete($area, 'area_id');
        arsort($areas);

        /** - 項目選択ボタン設定 -
         * 設定変数：$types */
        $types = [
            [
                'js_class_1' => 'js-maker-type',
                'title' => 'ブランド別（' . count($titles) . '）'
            ],
            [
                'js_class_1' => 'js-dest-type',
                'title' => '蒸留所別（' . count($noms) . '）'
            ],
            [
                'js_class_1' => 'js-local-type',
                'title' => '生産地方別（' . count($locals) . '）'
            ],
            [
                'js_class_1' => 'js-aging-type',
                'title' => '熟成度合い別（' . count($agings) . '）'
            ],
        ];

        return view('tequila.syouhin')->with([
            'syouhin_data_all' => $syouhin_data_all,
            'titles' => $titles,
            'locals' => $locals,
            'noms' => $noms,
            'agings' => $agings,
            'areas' => $areas,
            'types' => $types,
        ]);
    }
}
