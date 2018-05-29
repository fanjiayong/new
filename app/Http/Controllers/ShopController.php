<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;

// use App\Http\Controllers\stdClass;


use App\Shop;

use App\Tag;

use App\Shop_tag;

use App\Menu;

class ShopController extends Controller
{

  //**************************店舗申請画面機能************************************************
    public function login(Request $request,Response $response){

        if($request->isMethod('get')) {

          $tags = Tag::all();

            return view('shop.login', [

              "tags" => $tags
            ]);

        }else{

            $this->validate($request,Shop::$validate_rules,Shop::$validate_messages);

            $shop = new Shop;

            $shop->shop_name = $request->shop_name;

            $shop->shop_password = Hash::make($request->shop_password);

            $shop->shop_address = $request->shop_address;

            $shop->shop_phone = $request->shop_phone;

            $shop->shop_photo = $request->file('shop_photo')->store('shop_photo');

            $shop->save();

            foreach ($request->tag_ids as $tag_id) {

              $tag = Tag::find($tag_id);

              $shop_tag = new Shop_tag;

              $shop_tag->shop_id = $shop->id;

              $shop_tag->tag_id = $tag->id;

              $shop_tag->save();

            }
            return view('shop.welcome');
        }
    }
    //******************店舗登録画面機能***********************************
    public function login_2(Request $request,Response $response){

      if($request->isMethod('get')) {

          return view('shop.login_2');

      }else{

          // $this->validate($request,Shop::$validate_rules);
          $name = $request->shop_name;

          $password = $request->shop_password;

          if(Auth::guard('shop')->attempt(['shop_name' => $name,'password' => $password])){
            // 认证通过...
              // return redirect()->intended('dashboard');
              // $shop = new Shop;

              // $item = DB::table('shops')->where('shop_name',$name)->first();
              $item = Shop::find(Auth::guard('shop')->user()->id);

              return view('shop.admin',['item' => $item]);
              // return redirect('shop/admin'['item' => $item])->with('message','成功登录');
            }
            else{
              return view("shop.login_2")
              ->with('message','用户名密码不正确')
              ->withInput();

            }
      }
    }
//******************************用户登出************************************************
    public function logout(Request $request)
    {
        Auth::guard('shop')->logout();
        return view('shop.login_2');
    }
//********************************店舗管理画面機能**************************************
    public function admin(Request $request,Response $response){
      // $sort = $request->sort;
      //
      // $item = Shop::orderBy('id','asc');
      // $param = ['item' => $item,'sort' => $sort];
      // $url = Storage::url('file.jpg');

      $item = Shop::find(Auth::guard('shop')->user()->id);

      
      // $sort2 = $request->sort2;
      // $item2 = Menu::orderBy('id','asc')->Paginate(3);
      // $param2 = ['items2' => $items2,'sort2' => $sort2];

      return view('shop.admin',['item' => $item]);
    }
//*******************************注目リスト画面****************************************
    public function order(Request $request,Response $response){
      if($request->isMethod('get')) {

        return view('shop.order');

      }else{

      }
    }
//****************************増加メニュー画面******************************************
    public function menu_add(Request $request,Response $response){

      if($request->isMethod('get')) {

        return view('shop.menu_add');

      }else{

        $this->validate($request,Menu::$validate_rules);

        $menu = new Menu;

        $menu->shop_id = Auth::guard('shop')->user()->id;

        $menu->menu_name = $request->menu_name;

        $menu->menu_price = $request->menu_price;

//
//       $path = $request->file('avatar')->storeAs(
//     'avatars', $request->user()->id
// );
        $menu->menu_photo = $request->file('menu_photo')->store('menu_photo');

        $menu->menu_content = $request->menu_content;

        $menu->save();
      }
      return view('shop.menu_welcome');

    }
//*****************************メニュー削除機能*********************************
    public function menu_del(Request $request,Response $response){

        $menu = Menu::find($request->id)->delete();

        return redirect('shop/admin');
    }
//*****************************メニュー編集画面*********************************
    public function menu_edit(Request $request,Response $response){

        $menu = Menu::find($request->id);

        return view('shop.menu_edit',['form' => $menu]);
    }
//******************************新しいメニュー挿入SQL*********************************
    public function menu_update(Request $request,Response $response){

      $this->validate($request,Menu::$validate_rules);

      $menu = Menu::find($request->id);

      $menu->menu_name = $request->menu_name;

      $menu->menu_price = $request->menu_price;

      $menu->menu_content = $request->menu_content;

      $menu->menu_photo = $request->file('menu_photo')->store('menu_photo');

      $menu->save();

      return redirect('shop/admin');
    }
//*******************************店舗情報編集画面************************************
    public function edit(Request $request,Response $response){

        $shop = Shop::find($request->id);

        $tags = Tag::all();

        return view('shop.edit',['form' => $shop,"tags" => $tags]);
    }
//******************************新しい店舗情報挿入SQL*********************************
    public function update(Request $request,Response $response){

      $shop = Shop::find($request->id);

      $shop->shop_name = $request->shop_name;

      $shop->shop_address = $request->shop_address;

      $shop->shop_phone = $request->shop_phone;

      $shop->shop_photo = $request->file('shop_photo')->store('shop_photo');

      $shop->save();

      foreach ($request->tag_ids as $tag_id){

        $tag = Tag::find($tag_id);

        $shop_tag = new Shop_tag;

        $shop_tag->shop_id = $shop->id;

        $shop_tag->tag_id = $tag->id;

        $shop_tag->save();

      return redirect('shop/admin');
    }
  }
}
