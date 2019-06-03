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

// Route::get('/', function () {
//     return view('layout');
// });

Route::get('/', 'MaMeController@index')->name('mazui.index');

Route::group(['middleware' => 'auth'], function(){
//以下ログインしてないと見れない
Route::get('/mypage','MaMeController@mypage')->name('mazuies.mypage');

});

