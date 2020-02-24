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

Route::get('tequila', function () {
    return view('tequila/tequila');
});
Route::get('bunken', function () {
    return view('tequila/bunken');
});
Route::get('maker_intro', function () {
    return view('tequila/maker_intro');
});
Route::get('tenpo', function () {
    return view('tequila/tenpo');
});
Route::get('syouhin', 'SyouhinController@syouhin');
