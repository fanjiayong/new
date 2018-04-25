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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get("one_coin/login","AdminLoginController@login");
Route::post("one_coin/login","AdminLoginController@login");

Route::get('one_coin/user_manage', function(){return view('admin.user_manage');});
Route::get('one_coin/user_detail', function(){return view('admin.user_detail');});
Route::get('one_coin/user_refresh', function(){return view('admin.user_refresh');});
