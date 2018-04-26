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

Route::get("one_coin/login","AdminLoginController@login");
Route::post("one_coin/login","AdminLoginController@login");
