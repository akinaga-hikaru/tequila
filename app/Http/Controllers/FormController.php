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
        $input_contents = [
            $request->input('family-name'),
            $request->input('first-name'),
            $request->input('mail'),
            $request->input('tel-number'),
            $request->input('review'),
        ];

        return view('tequila.form-confirm')->with('input_contents', $input_contents);

    }

    public function confirm()
    {
        return view('tequila.form-confirm');
    }

}
