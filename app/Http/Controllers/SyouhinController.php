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

        // NOM抽出・・・DB取得したデータからNOMを抽出し、連想配列化
        $nom = [];
        foreach ($syouhin_data_all as $item) {
            $nom[] = [
                'nom' => $item->contents_nom,
                'dest' => $item->contents_dest,
            ];
        }
        // 配列内の重複する'nom'を削除
        $value_confirm = $noms = [];
        foreach ($nom as $value) {
            if (!in_array($value['nom'], $value_confirm)) {
                $value_confirm[] = $value['nom'];
                $noms[] = $value;
            }
        }
        // 昇順に並び替え
        asort($noms);

        // タイトル抽出・・・DB取得したデータからタイトルを抽出し、連想配列化
        $title = [];
        foreach ($syouhin_data_all as $item) {
            $title[] = [
                'title_id' => $item->title_id,
                'title' => $item->title_name,
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

        // 生産地方抽出・・・DB取得したデータから生産地方を抽出し、連想配列化
        $local = [];
        foreach ($syouhin_data_all as $item) {
            $local[] = [
                'local_id' => $item->contents_local_id,
                'local' => $item->contents_local,
            ];
        }
        // 配列内の重複する'local'を削除
        $value_confirm = $locals = [];
        foreach ($local as $value) {
            if (!in_array($value['local'], $value_confirm)) {
                $value_confirm[] = $value['local'];
                $locals[] = $value;
            }
        }
        // 昇順に並び替え
        asort($locals);

        return view('tequila.syouhin')
            ->with('syouhin_data_all', $syouhin_data_all)
            ->with('titles', $titles)
            ->with('locals', $locals)
            ->with('noms', $noms);
    }
}
