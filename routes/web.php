<?php
use App\Http\Middleware\ShopMiddleware;
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
Route::get('userlogin', 'UserController@getLogin');
Route::post('userlogin', 'UserController@postLogin');
//浏览器登陆成功
Route::get('profile','UserController@profile');


 //user新規作成
Route::get('user/makeuser',function(){
    return view('user/makeuser');
  });
Route::post('user/makeuser', 'UserController@makeuser');
  //--------------------------------------------------------------------------
//usermessage网页显示
Route::get('usermessage', function () {
  return view('user/usermessage');
  });

  //homepage
Route::get('user/homepagedata',function(){
  return view('user/homepagedata');
  });
//homepage制作
 Route::get('user/homepagedata','UserController@homepagedata');
//homepage_menu設定
 Route::get('user/homepagemenu/{id}', 'UserController@getmenudisplay');


//--------------------------------------------------------------------------
//menu ランチセット
Route::get('user/homepagemenu','UserController@homepagemenu');
//login
Route::get('manlogin',function(){
   return view('login/manlogin');
 });
 //-----------------------------------------
 //userdeit
 // Route::get('useredit',function(){
 //    return view('user/useredit');
 //  });
  //-----------------------------------------
  Route::get('user/menuQRcode','UserController@menuQRcode');

  Route::get('user/homepagemenu_2','UserController@homepagemenu_2');
  Route::post('user/homepagemenu_2','UserController@homepagemenu_2');

  Route::get('user/welcome','UserController@welcome');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





//*********************店舗申請画面******************************:
Route::get("shop/login","ShopController@login");
Route::post("shop/login","ShopController@login");
//*********************店舗登録画面******************************:
Route::get("shop/login_2","ShopController@login_2");
Route::post("shop/login_2","ShopController@login_2");
//*********************店舗管理画面******************************:
//---------------------进行登出-----------------------------------
Route::get('shop/logout', 'ShopController@logout');

Route::get("shop/admin","ShopController@admin")->middleware(ShopMiddleware::class);
Route::post("shop/admin","ShopController@admin")->middleware(ShopMiddleware::class);
//***********************注目リスト********************************
Route::get("shop/order","ShopController@order")->middleware(ShopMiddleware::class);
Route::post("shop/order","ShopController@order")->middleware(ShopMiddleware::class);
//************************増加料理メニュー画面*****************************

// Route::get("shop/menu_add","ShopController@menu_add");
// Route::post("shop/menu_add","ShopController@menu_add");



Route::get('onecoin/add','OnecoinController@add');
Route::post('onecoin/add','OnecoinController@add');

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



Route::get("shop/menu_add","ShopController@menu_add")->middleware(ShopMiddleware::class);
Route::post("shop/menu_add","ShopController@menu_add")->middleware(ShopMiddleware::class);
//*************************削除料理画面************************************
Route::get("shop/menu_del","ShopController@menu_del")->middleware(ShopMiddleware::class);
//*************************更新料理画面*************************************
Route::get("shop/menu_edit","ShopController@menu_edit")->middleware(ShopMiddleware::class);
Route::post("shop/menu_edit","ShopController@menu_update")->middleware(ShopMiddleware::class);
//*************************更新店铺画面**********************************************************
Route::get("shop/edit","ShopController@edit")->middleware(ShopMiddleware::class);
Route::post("shop/edit","ShopController@update")->middleware(ShopMiddleware::class);

//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::




Route::get("one_coin/login","AdminLoginController@login");
Route::post("one_coin/login","AdminLoginController@login");
Route::get("one_coin/home",function(){
   return view('admin.home');
 });

Route::get("one_coin/logout","AdminLoginController@logout")->middleware(AdminLogin::class);

Route::get('onecoin/add','OnecoinController@add')->middleware(AdminLogin::class);
Route::post('onecoin/add','OnecoinController@add')->middleware(AdminLogin::class);

Route::get('one_coin/user_manage', 'UserManageController@index')->middleware(AdminLogin::class);
// Route::get('one_coin/user_detail', function(){return view('admin.user_detail');})->middleware(AdminLogin::class);

Route::get('one_coin/user_refresh', 'UserManageController@update')->middleware(AdminLogin::class);
Route::post('one_coin/user_refresh', 'UserManageController@update')->middleware(AdminLogin::class);

Route::get('one_coin/user_detail', 'UserManageController@syosai')->middleware(AdminLogin::class);


Route::get('one_coin/user_add','UserManageController@add' )->middleware(AdminLogin::class);
Route::post('one_coin/user_add','UserManageController@add' )->middleware(AdminLogin::class);

Route::get('one_coin/shop_manage', 'ShopManageController@index')->middleware(AdminLogin::class);
Route::get('one_coin/shop_detail', 'ShopManageController@detail')->middleware(AdminLogin::class);

Route::get('one_coin/shop_menu', 'ShopManageController@menu_detail')->middleware(AdminLogin::class);

Route::get('one_coin/menu_add', 'ShopManageController@menu_add')->middleware(AdminLogin::class);
Route::post('one_coin/menu_add', 'ShopManageController@menu_add')->middleware(AdminLogin::class);

Route::get('one_coin/menu_refresh', 'ShopManageController@menu_refresh')->middleware(AdminLogin::class);
Route::post('one_coin/menu_refresh', 'ShopManageController@menu_refresh')->middleware(AdminLogin::class);

Route::get('one_coin/shop_refresh', 'ShopManageController@shop_refresh')->middleware(AdminLogin::class);
Route::post('one_coin/shop_refresh', 'ShopManageController@shop_refresh')->middleware(AdminLogin::class);




Route::get('one_coin/shop_add','ShopManageController@add' )->middleware(AdminLogin::class);
Route::post('one_coin/shop_add','ShopManageController@add' )->middleware(AdminLogin::class);

Route::get('one_coin/shop_refresh','ShopManageController@shop_refresh' )->middleware(AdminLogin::class);
Route::post('one_coin/shop_refresh','ShopManageController@shop_refresh' )->middleware(AdminLogin::class);

// Route::get('one_coin/data_manage','DataManageController@data_manage' )->middleware(AdminLogin::class);


// Route::get('one_coin/shop_manage', function(){return view('admin.shop_manage');})->middleware(AdminLogin::class);
// Route::get('one_coin/shop_detail', function(){return view('admin.shop_detail');})->middleware(AdminLogin::class);
// Route::get('one_coin/shop_menu', function(){return view('admin.shop_menu');})->middleware(AdminLogin::class);
// Route::get('one_coin/menu_add', function(){return view('admin.menu_add');})->middleware(AdminLogin::class);
// Route::get('one_coin/data_manage', function(){return view('admin.data_manage');})->middleware(AdminLogin::class);
// Route::get('one_coin/user_find', 'FindController@find')->middleware(AdminLogin::class);
Route::get('one_coin/data_manage', 'FindController@find_all')->middleware(AdminLogin::class);

Route::post('one_coin/user_manage', 'FindController@find_user')->middleware(AdminLogin::class);

Route::post('one_coin/shop_manage', 'FindController@find_shop')->middleware(AdminLogin::class);
