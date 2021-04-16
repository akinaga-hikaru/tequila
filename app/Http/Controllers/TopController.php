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
        // - 熟成度合いデータ設定 -　$agings
        $aging_data = DB::table('agings')
        ->where('type', '=', 'tequila')->get();
        foreach ($aging_data as $item) {
            $agings[] = [
                $item->name_kana,
                $item->definition,
                $item->rule,
            ];
        }
        
        // - テキーラの産地データ設定 - $areas
        $area_data = DB::table('areas')
        ->join('locals', 'areas.local_id', '=', 'locals.id')
        ->select('areas.name_kana as area_name_kana', 'locals.name_kana as local_name_kana', 'locals.id as local_id', 'areas.state_id as state_id')
        ->where('areas.state_id', '=', 'jalisco')->get();
        foreach ($area_data as $item) {
            $array = [
                'local_name_kana' => $item->local_name_kana,
                'area_name_kana' => explode('地区', $item->area_name_kana)[0],
            ];
            if ($item->local_id == 'valles') {
                $area_valles[] = $array;
                $areas[$item->local_id] = $area_valles;
            } elseif ($item->local_id == 'altos') {
                $area_altos[] = $array;
                $areas[$item->local_id] = $area_altos;
            } elseif ($item->local_id == 'centro') {
                $area_centro[] = $array;
                $areas[$item->local_id] = $area_centro;
            } else {
                $area_others[] = $array;
                $areas[$item->local_id] = $area_others;
            }
        }

        // - 蒸留所一覧データ設定 - $destiladors
        $dest_data = DB::table('destiladors')
        ->join('areas', 'areas.id', '=', 'destiladors.area_id')
        ->join('locals', 'areas.local_id', '=', 'locals.id')
        ->join('states', 'areas.state_id', '=', 'states.id')
        ->join('brands', 'brands.id', '=', 'destiladors.main_brand')
        ->select('areas.name_kana as area_name_kana', 'locals.name_kana as local_name_kana', 'locals.id as local_id', 'destiladors.nom as dest_nom', 'destiladors.name_kana as dest_name_kana', 'brands.name_kana as brand_name_kana', 'states.name_kana as state_name_kana')
        ->get();
        $array = [];
        foreach ($dest_data as $item) {
            $array = [
                'dest_nom' => $item->dest_nom,
                'dest_name_kana' => $item->dest_name_kana,
                'brand_name_kana' => $item->brand_name_kana,
                'area_name_kana' => $item->area_name_kana,
                'local_name_kana' => $item->local_id == 'others' ? $item->state_name_kana : $item->local_name_kana,
            ];
            if ($item->local_id == 'valles') {
                $dest_valles[] = $array;
                $destiladors[$item->local_id] = $dest_valles;
            } elseif ($item->local_id == 'altos') {
                $dest_altos[] = $array;
                $destiladors[$item->local_id] = $dest_altos;
            } elseif ($item->local_id == 'centro') {
                $dest_centro[] = $array;
                $destiladors[$item->local_id] = $dest_centro;
            } else {
                $dest_others[] = $array;
                $destiladors[$item->local_id] = $dest_others;
            }
        }

        return view('index')->with([
            'agings' => $agings,
            'destiladors' => $destiladors,
            'areas' => $areas
        ]);
    }
}
