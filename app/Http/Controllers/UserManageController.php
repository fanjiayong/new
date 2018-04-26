<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class UserManageController extends Controller
{
    //
    public function index(Request $requset){
      $items = user::all();
      return view('admin.user_manage',['items'=>$items]);
    }

    public function detail(Request $request){
      $items = user:all();

    }
}
