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
use App\Http\Middleware\AdminLogin;

Route::get('/', function () {
    return view('welcome');
});
//user登録画面
Route::get('user',function(){
   return view('user/user');
 });

 //user新規作成
 Route::get('makeuser',function(){
    return view('user/makeuser');
  });
  //--------------------------------------------------------------------------
  //homepage
  Route::get('homepage',function(){
     return view('user/homepage');
   });
//--------------------------------------------------------------------------
//menu ランチセット
Route::get('menupage',function(){
   return view('user/menupage');
 });
//login
Route::get('manlogin',function(){
   return view('login/manlogin');
 });
 //-----------------------------------------
 //userdeit
 Route::get('useredit',function(){
    return view('user/useredit');
  });
  //-----------------------------------------


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




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
//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::



Route::get("one_coin/login","AdminLoginController@login");
Route::post("one_coin/login","AdminLoginController@login");

Route::get("one_coin/logout","AdminLoginController@logout")->middleware(AdminLogin::class);

Route::get('onecoin/add','OnecoinController@add')->middleware(AdminLogin::class);
Route::post('onecoin/add','OnecoinController@add')->middleware(AdminLogin::class);

Route::get('one_coin/user_manage', 'UserManageController@index')->middleware(AdminLogin::class);
Route::get('one_coin/user_detail', function(){return view('admin.user_detail');})->middleware(AdminLogin::class);

Route::get('one_coin/user_refresh', 'UserManageController@update')->middleware(AdminLogin::class);
Route::post('one_coin/user_refresh', 'UserManageController@update')->middleware(AdminLogin::class);

Route::get('one_coin/user_detail', 'UserManageController@syosai')->middleware(AdminLogin::class);


Route::get('one_coin/user_add','UserManageController@add' )->middleware(AdminLogin::class);
Route::post('one_coin/user_add','UserManageController@add' )->middleware(AdminLogin::class);

Route::get('one_coin/shop_manage', function(){return view('admin.shop_manage');})->middleware(AdminLogin::class);
Route::get('one_coin/shop_detail', function(){return view('admin.shop_detail');})->middleware(AdminLogin::class);
Route::get('one_coin/shop_menu', function(){return view('admin.shop_menu');})->middleware(AdminLogin::class);
Route::get('one_coin/shop_refresh', function(){return view('admin.shop_refresh');})->middleware(AdminLogin::class);
Route::get('one_coin/shop_add', function(){return view('admin.shop_add');})->middleware(AdminLogin::class);
Route::get('one_coin/menu_refresh', function(){return view('admin.menu_refresh');})->middleware(AdminLogin::class);
Route::get('one_coin/menu_add', function(){return view('admin.menu_add');})->middleware(AdminLogin::class);
Route::get('one_coin/data_manage', function(){return view('admin.data_manage');})->middleware(AdminLogin::class);
Route::get('one_coin/user_find', 'UserManageController@find')->middleware(AdminLogin::class);
Route::post('one_coin/user_find', 'UserManageController@find')->middleware(AdminLogin::class);
