<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\ApplyInfo\ApplyInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class FormController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | GET遷移時のform-input画面処理
    |--------------------------------------------------------------------------
    */
    public function input(Request $request)
    {
        return view('form-input');
    }

    /*
    |--------------------------------------------------------------------------
    | POST遷移時のform-input画面処理
    |--------------------------------------------------------------------------
    */
    public function postInput(Request $request)
    {
        // 入力項目をセッションに保存
        $request->session()->put([
            'brand_id' => $request->input('brand_id'),
            'brand_name' => $request->input('brand_name'),
            'syouhin_id' => $request->input('syouhin_id'),
            'syouhin_url' => $request->input('syouhin_url'),
            'aging_sort' => $request->input('aging_sort'),
            'aging_id' => $request->input('aging_id'),
            'aging_name' => $request->input('aging_name'),
            'alc_degree' => $request->input('alc_degree'),
            'mix_degree' => $request->input('mix_degree'),
            'dest_name_kana' => $request->input('dest_name_kana'),
            'dest_nom' => $request->input('dest_nom'),
            'local_id' => $request->input('local_id'),
            'local_name_kana' => $request->input('local_name_kana'),
            'area_id' => $request->input('area_id'),
            'area_name_kana' => $request->input('area_name_kana'),
            'information' => $request->input('information'),
            'review_flavor' => $request->input('review_flavor'),
            'review_top' => $request->input('review_top'),
            'review_after' => $request->input('review_after'),
        ]);

        // アップロードファイル定義
        if (!empty($request->file('image'))) {
            $upload_file = $request->file('image');
        } else {
            $upload_file = null;
        }

        // インプット項目をセッションから取得
        $input = [
            'brand_id' => [
                'input' => session('brand_id'),
                'name' => config('app_form_input.contents.brand_id.title'),
            ],
            'brand_name' => [
                'input' => session('brand_name'),
                'name' => config('app_form_input.contents.brand_name.title'),
            ],
            'syouhin_id' => [
                'input' => session('syouhin_id'),
                'name' => config('app_form_input.contents.syouhin_id.title'),
            ],
            'syouhin_url' => [
                'input' => session('syouhin_url'),
                'name' => config('app_form_input.contents.syouhin_url.title'),
            ],
            'image' => [
                'input' => session('syouhin_id') . '.jpg',
                'name' => config('app_form_input.contents.image.title'),
            ],
            'aging_sort' => [
                'input' => session('aging_sort'),
                'name' => config('app_form_input.contents.aging_sort.title'),
            ],
            'aging_id' => [
                'input' => session('aging_id'),
                'name' => config('app_form_input.contents.aging_id.title'),
            ],
            'aging_name' => [
                'input' => session('aging_name'),
                'name' => config('app_form_input.contents.aging_name.title'),
            ],
            'alc_degree' => [
                'input' => session('alc_degree'),
                'name' => config('app_form_input.contents.alc_degree.title'),
            ],
            'mix_degree' => [
                'input' => session('mix_degree'),
                'name' => config('app_form_input.contents.mix_degree.title'),
            ],
            'dest_name_kana' => [
                'input' => session('dest_name_kana'),
                'name' => config('app_form_input.contents.dest_name_kana.title'),
            ],
            'dest_nom' => [
                'input' => session('dest_nom'),
                'name' => config('app_form_input.contents.dest_nom.title'),
            ],
            'local_id' => [
                'input' => session('local_id'),
                'name' => config('app_form_input.contents.local_id.title'),
            ],
            'local_name_kana' => [
                'input' => session('local_name_kana'),
                'name' => config('app_form_input.contents.local_name_kana.title'),
            ],
            'area_id' => [
                'input' => session('area_id'),
                'name' => config('app_form_input.contents.area_id.title'),
            ],
            'area_name_kana' => [
                'input' => session('area_name_kana'),
                'name' => config('app_form_input.contents.area_name_kana.title'),
            ],
            'information' => [
                'input' => session('information'),
                'name' => config('app_form_input.contents.information.title'),
            ],
            'review_flavor' => [
                'input' => session('review_flavor'),
                'name' => config('app_form_input.contents.review_flavor.title'),
            ],
            'review_top' => [
                'input' => session('review_top'),
                'name' => config('app_form_input.contents.review_top.title'),
            ],
            'review_after' => [
                'input' => session('review_after'),
                'name' => config('app_form_input.contents.review_after.title'),
            ],
        ];

        // アップロードファイルがあれば一時フォルダに格納（プレビュー表示させるため）
        if (!empty($request->file('image')) && !empty($input['syouhin_id']['input'])) {
            $file = $input['syouhin_id']['input'] . '.jpg';
            $upload_file->storeAs('upload', $file);
            $upload_file->move('./image/syouhin/sample', $file);
        }

        return view('form-confirm')->with('input', $input);
    }

    /*
    |--------------------------------------------------------------------------
    | GET遷移時のform-confirm画面処理
    |--------------------------------------------------------------------------
    */
    public function confirm()
    {
        return view('form-confirm');
    }

    /*
    |--------------------------------------------------------------------------
    | POST遷移時のform-comnfirm画面処理
    |--------------------------------------------------------------------------
    */
    public function postConfirm(Request $request)
    {
        // DBにデータを挿入
        $file = session('syouhin_id') . '.jpg';
        DB::table('syouhin')->insert([
            'brand_id' => session('brand_id'),
            'brand_name' => session('brand_name'),
            'syouhin_id' => session('syouhin_id'),
            'syouhin_url' => session('syouhin_url'),
            'image' => $file,
            'aging_sort' => session('aging_sort'),
            'aging_id' => session('aging_id'),
            'aging_name' => session('aging_name'),
            'alc_degree' => session('alc_degree'),
            'mix_degree' => session('mix_degree'),
            'dest_name_kana' => session('dest_name_kana'),
            'dest_nom' => session('dest_nom'),
            'local_id' => session('local_id'),
            'local_name_kana' => session('local_name_kana'),
            'area_id' => session('area_id'),
            'area_name_kana' => session('area_name_kana'),
            'information' => session('information'),
            'review_flavor' => session('review_flavor'),
            'review_top' => session('review_top'),
            'review_after' => session('review_after'),
        ]);
        // アップロードしたファイルを正規フォルダに移動
        File::move('./image/syouhin/sample/' . $file, './image/syouhin/' . $file);
        // セッションクリア
        $request->session()->flush();
        return view('form-complete');
    }

    /*
    |--------------------------------------------------------------------------
    | GET遷移時のform-complete画面処理
    |--------------------------------------------------------------------------
    */
    public function complete()
    {
        return view('form-complete');
    }
}
