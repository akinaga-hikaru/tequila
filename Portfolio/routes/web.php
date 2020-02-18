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

Route::get('/', function () {
    return view('portfolio_index');
});
Route::prefix('tequila')->name('tequila.')->group(function () {
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
    Route::get('syouhin_1', function () {
        return view('tequila/syouhin_1');
    });
});
