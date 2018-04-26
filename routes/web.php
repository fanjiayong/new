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

Route::get('one_coin/user_manage', 'UserManageController@index');
Route::get('one_coin/user_detail', function(){return view('admin.user_detail');});
Route::get('one_coin/user_refresh', function(){return view('admin.user_refresh');});
Route::get('one_coin/user_add', function(){return view('admin.user_add');});
Route::get('one_coin/shop_manage', function(){return view('admin.shop_manage');});
Route::get('one_coin/shop_detail', function(){return view('admin.shop_detail');});
Route::get('one_coin/shop_menu', function(){return view('admin.shop_menu');});
Route::get('one_coin/shop_refresh', function(){return view('admin.shop_refresh');});
Route::get('one_coin/shop_add', function(){return view('admin.shop_add');});
Route::get('one_coin/menu_refresh', function(){return view('admin.menu_refresh');});
Route::get('one_coin/menu_add', function(){return view('admin.menu_add');});
Route::get('one_coin/data_manage', function(){return view('admin.data_manage');});
