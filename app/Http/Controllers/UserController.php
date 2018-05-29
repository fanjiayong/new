<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Shop;
use App\Menu;
use App\History;
use Validator;
use Illuminate\Support\Facades\Auth;

use SimpleSoftwareIO\QrCode\BaconQrCodeGenerator;

use App\Http\Controllers\QrCode;


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

        $items = DB::table('shops')->simplePaginate(10);

        // $items = DB::table('histories')
        //         ->leftJoin('menus','histories.menu_id','=','menus.id')
        //         ->leftJoin('shops','menus.shop_id','=','shops.id')
        //         ->groupBy('menu_id')
        //         ->having('menu_id')
        //         ->get();
        //         count('Distinct','menu_id')
        //
        // var_dump($items);exit();

        return view('user.homepagedata',['items'=>$items]);

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
    public function getmenudisplay(Request $request){

      $menus = Menu::all()->where('shop_id',$request->id);

      return view('user.homepagemenu',['menus'=>$menus]);

    }

    public function menuQRcode(Request $request, Response $response ){
      //将请求的id代入到变量menu_id
      $menu_id = $request->id;
      //将atuh请求的id代入到变量user_id中
      $user_id = Auth::guard('user')->id();

      $url = "http://192.168.1.55/onecoin/public/user/homepagemenu_2?menu_id=$menu_id&user_id=$user_id";
      //
      return view('user.menuQRcode',['url'=>$url]);

    }
    public function homepagemenu_2(Request $request, Response $response){
      //如果是以GET方式进行de请求信息
      if($request->isMethod('get')){
        //从menu表单请求menu_id代入menu变量中
        $menu = Menu::find($request->menu_id);
        //从user表单请求user_id代入user变量中
        $user = User::find($request->user_id)->first();
        //   将请求的两个变量代入到user下的homepagemenu_2视图中；
        return view('user.homepagemenu_2',['menu'=>$menu, 'user'=>$user]);
      //如果是以post方式进行的请求
      }else{
        //将请求的menu_id代入到变量menu_id中
        $menu_id = $request->menu_id;
        //将请求的menu_id代入到变量menu_id中
        $user_id = $request->user_id;
        //从history表中提取menu_id和user_id的信息代入到histories变量中
        $shop_id = $request->shop_id;

        $histories = History::where('menu_id',$menu_id)->where("user_id",$user_id)->get();
        //使用count函数计算histories的值代入num变量中
        $num = count($histories);
        //如果变量num小于3
        $shopId = Auth::guard('shop')->id();
        var_dump($shopId);exit();
        if($num < 3 and $shop_id == $shop_id){
          //将history实例化 代入变量history中
          $history = new History;
          // 变量user_id 代入变量history中的user_id中
          $history->user_id = $user_id;
          //  变量menu_id 代入变量history中的menu_id中
          $history->menu_id = $menu_id;
          //进行保存
          $history->save();
          //保存成功后返回到视图user文件下的welcome中
          return view('user.welcome');
          //如果不小于3
        }else{
          //将直接返回报错页面
          return view('user.err');
        }
      }

    }
    public function welcome(Request $request, Response $response){


      return view('user.welcome');
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
