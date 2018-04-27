<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\user;

class UserManageController extends Controller
{
    //
    public function index(Request $requset){
      $items = user::all();
      return view('admin.user_manage',['items'=>$items]);
    }

    public function detail(Request $request){
      $items = User::all();
    }

    public function add(Request $request,Response $response){
      if($request->isMethod('get')) {

        return view("admin.user_add");

      } else {

        $this->validate($request, User::$validate_rules, User::$validate_messages);

        $user = new User;

        $user->user_name = $request->user_name;
        $user->user_password = $request->user_password;
        $user->user_phone = $request->user_phone;
        $user->user_email = $request->user_email;

        $user->save();

        return redirect("one_coin/user_manage");
      }
    }

    public function update(Request $request,Response $response){
      if($request->isMethod('get')){
        $user = User::find($request->id);
        return view('admin.user_refresh',['form'=>$user]);
      }else{


        $this->validate($request,User::$validate_edit_rules,User::$validate_edit_messages);
        $user = User::find($request->id);
        $user->user_name = $request->user_name;
        $user->user_phone = $request->user_phone;
        $user->user_email = $request->user_email;

        $user->save();
        return redirect("one_coin/user_manage");

      }
    }

    public function syosai(Request $request,Response $response){


        $user = User::find($request->id);
        $param = [
          'id'=>$user->id,
          'user_name'=>$user->user_name,
          'user_email'=>$user->user_email,
          'user_phone'=>$user->user_phone,
        ];
        return view('admin.user_detail',$param);


    }

    public function find(Request $request){

      if($request->isMethod('get')){
        return view('admin.user_find',['input'=>'']);
      }
      else{
        $item = User::find($request->input);


        $param =['input'=>$request->input,'item'=>$item];
        return redirect('admin.user_find',$param);
      }
    }
}
