<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\ApplyInfo\ApplyInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helpers\Helper;
use Illuminate\View\View;

class FormController extends Controller
{
    public function input()
    {
        return view('tequila.form-input');
    }


    public function postInput(Request $request)
    {
        $input = [
            'title_id' => $request->input('title_id'),
            'title_name' => $request->input('title_name'),
            'alt_name' => $request->input('alt_name'),
            'url' => $request->input('url'),
            'image' => $request->input('image'),
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
        ];

        return view('tequila.form-confirm')->with('input', $input);

    }

    public function confirm()
    {
        return view('tequila.form-confirm');
    }

}
