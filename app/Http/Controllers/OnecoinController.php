<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;

use Illuminate\Support\Facades\DB;

use App\User;

class OnecoinController extends Controller
{
/**
*************************提取数据库的数据进行一览*********************************
**/
    public function index(Request $request,Response $response){

      $sort = $request->sort;
      $items = User::orderBy('id' ,'asc')->Paginate(5);
      $param = ['items' => $items,'sort' => $sort];
      return view('onecoin.select',$param);
      // $items = User::all();
      //
      // $items = DB::table('users')->simplePaginate(5);
      //
      // return view('onecoin.select',['items'=>$items]);
    }
/**
**************************进入新规画面进行数据填写****************************
**/
    public function add(Request $request,Response $response){

      if($request->isMethod('get')) {

        return view('add');

      }else{

        $this->validate($request,User::$validate_rules,User::$validate_messages);

        $user = new User;

        $user->user_name = $request->user_name;

        $user->user_password = $request->user_password;

        $user->user_email = $request->user_email;

        $user->user_phone = $request->user_phone;

        $user->save();

        return redirect('add');
      }
    }
/**
*******************使用model将填写好的数据插入数据库*************************
**/
    public function create(Request $request,Response $response){

      $user = new User;

      $form = $request->all();

      unset($form['_token']);

      $user->fill($form)->save();

      return view('onecoin.tijiao');

    }
/**
****************使用model 进行数据提取数据修改*******************************
**/
    public function edit(Request $request,Response $response){

      $user = User::find($request->id);

      return view('onecoin.edit',['form' => $user]);
    }
    /**
    * **************使用model 将修改好的数据对数据库进行更新***********************************
    **/
    public function update(Request $request,Response $response){

      $this->validate($request,User::$validate_edit_rules,User::$validate_edit_messages);

      $user = User::find($request->id);

      /**
      *-----从model提取信息有2种写法 ，1.此种方法是将信息一个个提取出来，进行保存--------
      *-----好处是model里的值和form里的值 可以不统一 ，而在此处进行关联配对------
      **/
      $user->user_name = $request->user_name;

      $user->user_email = $request->user_email;

      $user->user_phone = $request->user_phone;

      $user->save();
      /**
      *-----从model提取信息有2种写法 ，2.此种方法是将信息全部取出，进行保存--------
      *-----好处是方法简洁，页面干净。-----------------------------
      **/
      // $form = $request->all();
      //
      // unset($form['_token']);
      //
      // $user->fill($form)->save();

      return redirect('onecoin/select');
    }
/**
********************使用model 利用ID提取信息 进入form页面 进行单独删除**************************
**/
    // public function delete(Request $request){
    //
    //   $user = User::find($request->id);
    //
    //   return view('onecoin.del',['form' => $user]);
    // }
/**
****************将id提取的信息 从数据库删除********************************
**/
    public function remove(Request $request,Response $response){

      $user = User::find($request->id)->delete();

      return redirect('onecoin/select');
    }







}
