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
        /********** 各項目のプルダウン設定 **********/
        // ブランドプルダウン
        foreach (DB::table('brands')->get() as $value) {
            $brand_name[] = [
                'name' => $value->name,
                'value' => $value->name,
            ];
        }

        // 熟成度合いプルダウン
        foreach (DB::table('agings')->get() as $value) {
            $aging_sort[] = [
                'name' => $value->name_kana,
                'value' => $value->id,
            ];
        }

        // 混成度合いプルダウン
        foreach (DB::table('mixes')->get() as $value) {
            $mix_degree[] = [
                'name' => $value->name_kana,
                'value' => $value->name,
            ];
        }

        // アルコール度数プルダウン
        for ($i = 35; $i <= 55; $i++) {
            $alc_degree[] = [
                'name' => $i . '%',
                'value' => $i . '%',
            ];
        }

        // 蒸留所プルダウン
        foreach (DB::table('destiladors')->get() as $value) {
            $dest_name[] = [
                'name' => $value->name_kana,
                'value' => $value->name_kana,
            ];
        }

        // 生産地方プルダウン
        $states = DB::table('states')
        ->leftjoin('locals', 'locals.state_id', '=', 'states.id')
        ->select('locals.id', 'locals.name_kana as local_name', 'states.name_kana as state_name', 'states.states_type')
        ->where('states.states_type', '=', 'tequila')
        ->get();
        foreach ($states as $value) {
            $local_name[] = [
                'name' => $value->state_name == 'ハリスコ州' ? $value->state_name . $value->local_name : $value->state_name,
                'value' => $value->state_name == 'ハリスコ州' ? $value->state_name . $value->local_name : $value->state_name,
            ];
        }

        // 生産地区プルダウン
        foreach (DB::table('areas')->get() as $value) {
            $area_name[] = [
                'name' => $value->name_kana,
                'value' => $value->name_kana,
            ];
        }

        /********** 各項目のプルダウンデータを$arrayに格納し整形 **********/
        $array = [
            'brand_name' => $brand_name,
            'aging_sort' => $aging_sort,
            'mix_degree' => $mix_degree,
            'alc_degree' => $alc_degree,
            'dest_name' => $dest_name,
            'local_name' => $local_name,
            'area_name' => $area_name,
        ];

        // 配列の先頭に空白項目を追加して順序整理
        foreach($array as $key => $value) {
            array_unshift($array[$key], [
                'name' => '',
                'value' => '',
            ]);
            if ($key == 'brand_name' || $key == 'dest_name' || $key == 'area_name') {
                asort($array[$key]);
            }
        }

        return view('form-input')->with($array);
    }

    /*
    |--------------------------------------------------------------------------
    | POST遷移時のform-input画面処理
    |--------------------------------------------------------------------------
    */
    public function postInput(Request $request)
    {
        // 入力に基づいてマスタテーブルから各IDを取得
        if (!empty($request->input('local_name_kana'))) {
            $split = explode('ハリスコ州', $request->input('local_name_kana'));
            $split[0] == '' ? $local_name = $split[1] : $local_name = $split[0];
            foreach (DB::table('locals')->get() as $value) {
                $value->name_kana == $local_name && $local_id = $value->id;
            }
        }
        if (!empty($request->input('brand_name'))) {
            foreach (DB::table('brands')->get() as $value) {
                $value->name == $request->input('brand_name') && $brand_id = $value->id;
            }
        }
        if (!empty($request->input('dest_name_kana'))) {
            foreach (DB::table('destiladors')->get() as $value) {
                $value->name_kana == $request->input('dest_name_kana') && $dest_nom = $value->nom;
            }
        }
        if (!empty($request->input('area_name_kana'))) {
            foreach (DB::table('areas')->get() as $value) {
                $value->name_kana == $request->input('area_name_kana') && $area_id = $value->id;
            }
        }

        // 入力値をセッションに保存
        $request->session()->put([
            'brand_id' => !empty($brand_id) ? $brand_id : '',
            'brand_name' => $request->input('brand_name'),
            'syouhin_id' => $syouhin_id = !empty($brand_id) ? $brand_id . '_' . $request->input('aging_id') : '',
            'syouhin_url' => $request->input('syouhin_url'),
            'aging_sort' => $request->input('aging_sort'),
            'aging_id' => $request->input('aging_id'),
            'aging_name' => $request->input('aging_name'),
            'alc_degree' => $request->input('alc_degree'),
            'mix_degree' => $request->input('mix_degree'),
            'min_price' => $request->input('min_price'),
            'dest_name_kana' => $request->input('dest_name_kana'),
            'dest_nom' => !empty($dest_nom) ? $dest_nom : '',
            'local_id' => !empty($local_id) ? $local_id : 'others',
            'local_name_kana' => $request->input('local_name_kana'),
            'area_id' => !empty($area_id) ? $area_id : '',
            'area_name_kana' => $request->input('area_name_kana'),
            'information' => $request->input('information'),
            'review_flavor' => $request->input('review_flavor'),
            'review_top' => $request->input('review_top'),
            'review_after' => $request->input('review_after'),
        ]);

        // バリデーション設定
        $rules = [
            'brand_id' => ['nullable', 'alpha_dash'],
            'brand_name' => ['required'],
            'syouhin_id' => ['nullable', 'alpha_dash'],
            'syouhin_url' => ['required', 'active_url'],
            'aging_sort' => ['required'],
            'aging_id' => ['required', 'regex:/^[0-9a-z_]+$/'],
            'aging_name' => ['required', 'regex:/^[0-9a-zA-Z ]+$/'],
            'alc_degree' => ['required'],
            'mix_degree' => ['required'],
            'min_price' => ['required', 'numeric'],
            'dest_name_kana' => ['required'],
            'dest_nom' => ['nullable', 'numeric'],
            'local_id' => ['nullable', 'alpha_dash'],
            'local_name_kana' => ['required'],
            'area_id' => ['nullable', 'alpha_dash'],
            'area_name_kana' => ['nullable'],
            'information' => ['required', 'max:30'],
            'review_flavor' => ['required', 'max:30'],
            'review_top' => ['required', 'max:30'],
            'review_after' => ['required', 'max:30'],
            'image' => ['required', 'image']
        ];
        $this->validate($request, $rules);

        // 商品IDの重複チェック
        if (!empty($syouhin_id)) {
            foreach (DB::table('syouhin')->get() as $value) {
                if ($value->syouhin_id == $syouhin_id) {
                    return redirect('form-input')->with('syouhin_id_check', 'ブランドと熟成度IDで自動作成される商品IDがマスタと重複しました。<br>熟成度IDを変更してください。');
                }
            }
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
            'min_price' => [
                'input' => session('min_price'),
                'name' => config('app_form_input.contents.min_price.title'),
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

        // アップロードファイル定義
        if (!empty($request->file('image'))) {
            $upload_file = $request->file('image');
        } else {
            $upload_file = null;
        }

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
        // 入力データを取得
        $file = session('syouhin_id') . '.jpg';
        $data = [
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
            'min_price' => session('min_price'),
            'dest_name_kana' => session('dest_name_kana'),
            'dest_nom' => session('dest_nom'),
            'local_id' => session('local_id'),
            'local_name_kana' => session('local_name_kana'),
            'area_id' => session('area_id'),
            'area_name_kana' => !empty(session('area_name_kana')) ? session('area_name_kana') : '',
            'information' => session('information'),
            'review_flavor' => session('review_flavor'),
            'review_top' => session('review_top'),
            'review_after' => session('review_after'),
        ];

        // DBにデータを挿入
        DB::table('syouhin')->insert($data);

        // 仮アップロードしたファイルを正規フォルダに移動
        File::move('./image/syouhin/sample/' . $file, './image/syouhin/' . $file);

        // サイトから追加したデータをテキストファイルに書き出す(PHP_EOLで改行を設定)
        $output_data = str_replace('),', '],', str_replace('array (', '[', var_export($data, true) . ',' . PHP_EOL));
        File::append('./syouhin_data_by_site.txt', $output_data);

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
