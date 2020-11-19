<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TopController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | GET遷移時のテキーラとは画面処理
    |--------------------------------------------------------------------------
    */
    public function index()
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

        // - 全商品データ取得 -
        $syouhin_data_all = DB::table('syouhin')->get();

        // - エリアデータ設定 -
        $valles = [];
        $altos = [];
        $centro = [];
        foreach ($syouhin_data_all as $item) {

            // 生産エリアの「地区」を削除
            $cut_chiku = explode('地区', $item->contents_area);

            // 取得するデータを設定（NOMでソート）
            $array = [
                'dest_nom' => $item->contents_nom,
                'title_name' => $item->title_name,
                'dest_name' => $item->contents_dest,
                'local' => $item->contents_local,
                'area' => $cut_chiku[0],
            ];

            // 条件に合わせてそれぞれのエリアの配列に格納
            switch ($item->contents_local_id) {
                case 'valles':
                    $valles[] = $array;
                    break;
                case 'altos':
                    $altos[] = $array;
                    break;
                case 'centro':
                    if ($item->contents_nom !== '-') {
                        $centro[] = $array;
                    }
                    break;
                default:
                    if ($item->contents_nom !== '-') {
                        $other[] = $array;
                    }
                    break;
            }
        }

        // 蒸留所一覧のデータ設定
        $dest_lists = [
            'valles' => doubleDelete($valles, 'dest_name'),
            'altos' => doubleDelete($altos, 'dest_name'),
            'centro' => doubleDelete($centro, 'dest_name'),
            'other' => doubleDelete($other, 'dest_name'),
        ];

        // テキーラの産地のデータ設定
        $tequila_states = [
            'valles' => doubleDelete($valles, 'area'),
            'altos' => doubleDelete($altos, 'area'),
            'centro' => doubleDelete($centro, 'area'),
        ];

        return view('index')->with([
            'dest_lists' => $dest_lists,
            'tequila_states' => $tequila_states
        ]);
    }
}
