<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'TopController@index');
Route::get('bunken', function () {
    return view('bunken');
});

Route::get('tenpo', function () {
    return view('tenpo');
});
Route::get('syouhin', 'SyouhinController@syouhin');
Route::get('form-input', 'FormController@input');
Route::post('form-confirm', 'FormController@postInput');
Route::get('form-complete', 'FormController@postConfirm');
