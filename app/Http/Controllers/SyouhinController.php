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

        // DB取得したデータから'NOM'を抽出し、配列内の重複するnomを削除
        $noms = [];
        foreach ($syouhin_data_all as $item) {
            if (!in_array($item->contents_nom, $noms)) {
                $noms[] = $item->contents_nom;
            }
        }
        // 昇順に並び替え
        asort($noms);

        // DB取得したデータから必要箇所を抽出し、連想配列化
        $title = [];
        foreach ($syouhin_data_all as $item) {
                $title[] = [
                    'class' => $item->class_name,
                    'title' => $item->title_name,
                    'nom' => $item->contents_nom,
                ];
        }

        // 配列内の重複する'title_name'を削除
        $value_confirm = $titles = [];
        foreach ($title as $value) {
            if (!in_array($value['title'], $value_confirm)) {
                $value_confirm[] = $value['title'];
                $titles[] = $value;
            }
        }

        // 昇順に並び替え
        asort($titles);

        return view('tequila.syouhin')
            ->with('syouhin_data_all', $syouhin_data_all)
            ->with('titles', $titles)
            ->with('noms', $noms);
    }
}
