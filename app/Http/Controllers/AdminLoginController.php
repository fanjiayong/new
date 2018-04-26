<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    //
    public function login(Request $request){
      if($request->isMethod('get')) {
        $param = ['message'=>'login'];
        return view("admin.login",$param);

      }
      else {

        $this->validate($request, Admin::$validate_rules);
        $name = $request->name;
        $passwrod = $request->password;

        if(Auth::guard('Admin')->attempt(['name'=>$name,'password'=>$passwrod])){
          return view("admin.home");
        }else{
          return view("admin.login");
        }
      }
    }
}
