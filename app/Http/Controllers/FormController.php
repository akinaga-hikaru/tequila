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
            'title_id' => $request->input('title_id'),
            'title_name' => $request->input('title_name'),
            'alt_name' => $request->input('alt_name'),
            'url' => $request->input('url'),
            'aging_sort' => $request->input('aging_sort'),
            'aging' => $request->input('aging'),
            'contents_alc' => $request->input('contents_alc'),
            'contents_dest' => $request->input('contents_dest'),
            'contents_nom' => $request->input('contents_nom'),
            'contents_local_id' => $request->input('contents_local_id'),
            'contents_local' => $request->input('contents_local'),
            'contents_area_id' => $request->input('contents_area_id'),
            'contents_area' => $request->input('contents_area'),
            'contents_info' => $request->input('contents_info'),
            'contents_review_flavor' => $request->input('contents_review_flavor'),
            'contents_review_top' => $request->input('contents_review_top'),
            'contents_review_after' => $request->input('contents_review_after'),
        ]);

        // アップロードファイル定義
        if (!empty($request->file('image'))) {
            $upload_file = $request->file('image');
        } else {
            $upload_file = null;
        }

        // インプット項目をセッションから取得
        $input = [
            'title_id' => [
                'input' => session('title_id'),
                'name' => config('app_form_input.contents.title_id.title'),
            ],
            'title_name' => [
                'input' => session('title_name'),
                'name' => config('app_form_input.contents.title_name.title'),
            ],
            'alt_name' => [
                'input' => session('alt_name'),
                'name' => config('app_form_input.contents.alt_name.title'),
            ],
            'url' => [
                'input' => session('url'),
                'name' => config('app_form_input.contents.url.title'),
            ],
            'image' => [
                'input' => session('alt_name') . '.jpg',
                'name' => config('app_form_input.contents.image.title'),
            ],
            'aging_sort' => [
                'input' => session('aging_sort'),
                'name' => config('app_form_input.contents.aging_sort.title'),
            ],
            'aging' => [
                'input' => session('aging'),
                'name' => config('app_form_input.contents.aging.title'),
            ],
            'contents_alc' => [
                'input' => session('contents_alc'),
                'name' => config('app_form_input.contents.contents_alc.title'),
            ],
            'contents_dest' => [
                'input' => session('contents_dest'),
                'name' => config('app_form_input.contents.contents_dest.title'),
            ],
            'contents_nom' => [
                'input' => session('contents_nom'),
                'name' => config('app_form_input.contents.contents_nom.title'),
            ],
            'contents_local_id' => [
                'input' => session('contents_local_id'),
                'name' => config('app_form_input.contents.contents_local_id.title'),
            ],
            'contents_local' => [
                'input' => session('contents_local'),
                'name' => config('app_form_input.contents.contents_local.title'),
            ],
            'contents_area_id' => [
                'input' => session('contents_area_id'),
                'name' => config('app_form_input.contents.contents_area_id.title'),
            ],
            'contents_area' => [
                'input' => session('contents_area'),
                'name' => config('app_form_input.contents.contents_area.title'),
            ],
            'contents_info' => [
                'input' => session('contents_info'),
                'name' => config('app_form_input.contents.contents_info.title'),
            ],
            'contents_review_flavor' => [
                'input' => session('contents_review_flavor'),
                'name' => config('app_form_input.contents.contents_review_flavor.title'),
            ],
            'contents_review_top' => [
                'input' => session('contents_review_top'),
                'name' => config('app_form_input.contents.contents_review_top.title'),
            ],
            'contents_review_after' => [
                'input' => session('contents_review_after'),
                'name' => config('app_form_input.contents.contents_review_after.title'),
            ],
        ];

        // アップロードファイルがあれば一時フォルダに格納（プレビュー表示させるため）
        if (!empty($request->file('image')) && !empty($input['alt_name']['input'])) {
            $file = $input['alt_name']['input'] . '.jpg';
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
        $file = session('alt_name') . '.jpg';
        DB::table('syouhin')->insert([
            'title_id' => session('title_id'),
            'title_name' => session('title_name'),
            'alt_name' => session('alt_name'),
            'url' => session('url'),
            'image' => $file,
            'aging_sort' => session('aging_sort'),
            'aging' => session('aging'),
            'contents_alc' => session('contents_alc'),
            'contents_dest' => session('contents_dest'),
            'contents_nom' => session('contents_nom'),
            'contents_local_id' => session('contents_local_id'),
            'contents_local' => session('contents_local'),
            'contents_area_id' => session('contents_area_id'),
            'contents_area' => session('contents_area'),
            'contents_info' => session('contents_info'),
            'contents_review_flavor' => session('contents_review_flavor'),
            'contents_review_top' => session('contents_review_top'),
            'contents_review_after' => session('contents_review_after'),
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
