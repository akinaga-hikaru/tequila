<?php

namespace App\Http\Controllers;

use App\SyouhinTable;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\ApplyInfo\ApplyInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helpers\Helper;
use Illuminate\View\View;

class SyouhinController extends Controller
{

    public function syouhin()
    {
        // DB(tequila)のTable(syouhin)から全てのデータを取得
        $syouhin_data_all = DB::table('syouhin')->get();

        // function・・・配列内の重複する値を削除して昇順にする
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

        // ブランド名設定・・・DB取得したデータからタイトルを抽出し、連想配列化
        $title = [];
        foreach ($syouhin_data_all as $item) {
            $title[] = [
                'title' => $item->title_name,
                'title_id' => $item->title_id,
            ];
        }
        $titles = doubleDelete($title, 'title');

        // NOM設定・・・DB取得したデータからNOMを抽出し、連想配列化
        $nom = [];
        foreach ($syouhin_data_all as $item) {
            $nom[] = [
                'nom' => $item->contents_nom,
                'dest' => $item->contents_dest,
            ];
        }
        $noms = doubleDelete($nom, 'nom');

        // 生産地方設定・・・連想配列
        $locals = config('app_syouhin.locals');

        // 熟成度合い設定・・・連想配列
        $agings = config('app_syouhin.agings');

        // 生産地区設定・・・DB取得したデータから生産地区を抽出し、連想配列化
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

        // 項目選択ボタンの定義・・・連想配列化
        $types = [
            ['js_class_1' => 'js-maker-type', 'title' => 'ブランド別（' . count($titles) . '）'],
            ['js_class_1' => 'js-dest-type', 'title' => '蒸留所別（' . count($noms) . '）'],
            ['js_class_1' => 'js-local-type', 'title' => '生産地方別（' . count($locals) . '）'],
            ['js_class_1' => 'js-aging-type', 'title' => '熟成度合い別（' . count($agings) . '）'],
        ];

        return view('tequila.syouhin')
            ->with('syouhin_data_all', $syouhin_data_all)
            ->with('titles', $titles)
            ->with('locals', $locals)
            ->with('noms', $noms)
            ->with('agings', $agings)
            ->with('areas', $areas)
            ->with('types', $types);
    }
}
