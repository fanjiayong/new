<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

use App\Shop;

class ShopController extends Controller
{
  //**************************店舗申請画面機能************************************************
    public function login(Request $request,Response $response){
        if($request->isMethod('get')) {

            return view('shop.login');

        }else{

            $this->validate($request,Shop::$validate_rules,Shop::$validate_messages);

            $shop = new Shop;

            $shop->shop_name = $request->shop_name;

            $shop->shop_password = Hash::make($request->shop_password);



            // public function update(Request $request)
            //     {
            //         // 验证新密码长度...
            //
            //         $request->user()->fill([
            //             'password' => Hash::make($request->newPassword)
            //         ])->save();
            //     }

            $shop->shop_address = $request->shop_address;

            $shop->shop_phone = $request->shop_phone;

            $shop->shop_photo = $request->file('shop_photo')->store('shop_photo');



            // $shop->shop_photo = $request->shop_photo;

            $shop->save();

            return redirect('shop.login');
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

              return view('shop.admin');

            }
            else{
              return view("shop.login");

            }

      }
    }

//********************************店舗管理画面機能**************************************
    public function admin(Request $request,Response $response){
      if($request->isMethod('get')) {

          return view('shop.admin');

      }else{

      }
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

  }


}


}
