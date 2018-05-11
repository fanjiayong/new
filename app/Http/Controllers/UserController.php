<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Shop;

use Validator;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
  public function msg()
{
  $data = [
    'msg'=>'なにか違う',
  ];
  return view;
}
  //**************************ユーザー申請画面************************************************
  //GET 方式 ，只需要提供一个页面
    public function makeuser(Request $request,Response $response){
    if($request->isMethod('get')) {

        return view('user.makeuser');
 //POST方式，进行判断和save
    }else{
  //从POST方式得到的  $request  进行验证
        $Validator = Validator::make($request->all(),User::$validate_rules,User::$validate_messages);
//假如验证失败，返回原页面并带上错误信息
        if ($Validator->fails() ) {
          return redirect('user/makeuser')
          ->WithErrors($Validator)
          ->WithInput();
        }
//new  一个对象实例化
        $user = new User;
//把验证过的$request的数据插入对象
        $user->user_name = $request->user_name;
        $user->user_password = Hash::make($request->user_password);
        $user->user_email = $request->user_email;
        $user->user_phone = $request->user_phone;
        $user->save();
//跳转
        return redirect('user/homepage');
    }
}

    public function index(){
      return view('user.user');
    }

      //**************************user登録画面機能************************************************
    public function getLogin(Request $request){
      //提供一个页面 GET通过url的都是

        return view('user.login');

    }
    public function postLogin(Request $request){
      $email = $request->user_email;
      $password = $request->user_password;

      //如果登陆成功
      if(Auth::guard('user')->attempt(['user_email'=>$email,'password'=>$password])){
        return view("user.homepage");
      }else{
        return view("user.login");
      }

    }
    //homepagedata制作 菜单显示
    public function homepagedata(Request $request, Response $response ){

      $items = DB::table('shops')->simplePaginate(10);
      return view('user.homepagedata',['items'=>$items]);

    }
    //homepage menuページ

    //根据店铺id显示对应menu
    public function getmenudisplay($id){
      $menus = DB::table('menus')->select('menu_name','menu_photo','menu_price',
      'menu_content')->where('id', $id)->get();
      return view('user.homepagemenu',['menus'=>$menus]);


    }

    }

//var_dump($items);exit();



  //add





      // $name = $request->user_name;
      // $password = $request->user_password;
      // if(Auth::guard('user')->attemp(['user_name'=>$user_name,'password'=>$user_password])){
      //   return redirect('user/homepage');
      // }else{
      //   return view('user.user');['msg'=>'なにか違う'];
      // }
