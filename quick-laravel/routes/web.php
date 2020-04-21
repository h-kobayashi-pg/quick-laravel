<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// ------------------------------
// Books関連
// ------------------------------
// Books一覧表示画面
Route::get('hello/list', 'HelloController@list');
// Books新規作成
Route::get('save/create', 'SaveController@create');
// Books新規保存
Route::post('save/store', 'SaveController@store');
// Books詳細画面
Route::get('save/{id}/edit', 'SaveController@edit');
// Books更新処理
Route::patch('save/{id}', 'SaveController@update');
// Books削除画面
Route::get('save/{id}', 'SaveController@show');
//Books削除処理
Route::delete('save/{id}', 'SaveController@destroy');
