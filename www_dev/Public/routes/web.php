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
// */


// Route::get('/', function () {
//     return view('login');
// });

Route::get('/','PageController@index')->name('mazuimeshi.index');               // index.blade.php 表示

Route::get('/detail','PageController@detail')->name('mazuimeshi.detail');       // detail.blade.php 表示
Route::get('/mylogin','PageController@login')->name('mazuimeshi.login');        // login.blade.php 表示
Route::get('/signup','PageController@signup')->name('mazuimeshi.signup');       // signup.blade.php 表示
Route::get('/edit','PageController@edit')->name('mazuimeshi.edit');             // edit.blade.php 表示
Route::get('/mypage','PageController@mypage')->name('mazuimeshi.mypage');       // mypage.blade.php 表示


Route::get('/policy','PageController@policy')->name('mazuimeshi.policy');       // policy.blade.php 表示
Route::get('/about','PageController@about')->name('mazuimeshi.about');          // edit.blade.php 表示

Auth::routes();