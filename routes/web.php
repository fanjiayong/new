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

//*********************店舗申請画面******************************:
Route::get("shop/login","ShopController@login");
Route::post("shop/login","ShopController@login");
//*********************店舗登録画面******************************:
Route::get("shop/login_2","ShopController@login_2");
Route::post("shop/login_2","ShopController@login_2");
//*********************店舗管理画面******************************:
Route::get("shop/admin","ShopController@admin");
Route::post("shop/admin","ShopController@admin");
//***********************注目リスト********************************
Route::get("shop/order","ShopController@order");
Route::post("shop/order","ShopController@order");
//************************増加料理メニュー画面*****************************
Route::get("shop/menu_add","ShopController@menu_add");
Route::post("shop/menu_add","ShopController@menu_add");



Route::get('onecoin/add','OnecoinController@add');
Route::post('onecoin/add','OnecoinController@add');
