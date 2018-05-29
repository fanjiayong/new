<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\History;
use App\Shop;
use App\Tag;
use App\Shop_tag;
use App\Menu;
use DB;


class FindController extends Controller
{
    //

    public function find_user(Request $request){

      // if(!empty($request->id)){
      //   $user = User::where('id',$request->id)->get();
      //
      //   return view('admin.user_manage',['items'=>$user]);
      // }

      $query = User::query();

      if($request->user_id) {
        $query->where("id", $request->user_id);
      }

      if($request->user_name) {
        $query->where("user_name",$request->user_name);
      }


      if($request->user_phone){
        $query->where("user_phone",$request->user_phone);
      }
      if($request->user_email){
        $query->where("user_email",$request->user_email);
      }


      $user = $query->simplePaginate(5);


      return view('admin.user_manage',['items'=>$user]);
    }


    public function find_shop(Request $request){

      // if(!empty($request->id)){
      //   $user = User::where('id',$request->id)->get();
      //
      //   return view('admin.user_manage',['items'=>$user]);
      // }

      $query = Shop::query();

      if($request->shop_id) {
        $query->where("id", $request->shop_id);
      }

      if($request->shop_name) {
        $query->where("shop_name",'like','%'.$request->shop_name.'%');
      }


      if($request->shop_phone){
        $query->where("shop_phone",'like','%'.$request->shop_phone.'%');
      }
      // if($request->shop_tag){
      //   $tag = Tag::find()->where('tag_name',$request->shop_tag)->get();
      //   $shop_tag = Shop_tag::find()->where('tag_id',$tag->id)->get();
      //   $query->where("id",$shop_tag->shop_id);
      // }


      $shop = $query->get();


      return view('admin.shop_manage',['items'=>$shop]);
    }



    public function find_all(Request $request){

        $search = [];

        if($request->page){
            $search = $request->session()->get('Search');
            var_dump($search);
        }else{
            $search['user_name'] = $request->user_name;
            $search['user_phone'] = $request->user_phone;
            $search['user_email'] = $request->user_email;
            $search['shop_name'] = $request->shop_name;
            $search['shop_phone'] = $request->shop_phone;
            $request->session()->put('Search',$search);
        }
       DB::enableQueryLog();
       $query = History::query();
       $query->select(array('histories.id AS history_id','users.user_name','menus.menu_name','shops.id AS shop_id','shops.shop_name'));
       $query->join('users','histories.user_id','users.id');
       $query->join('menus','histories.menu_id','menus.id');
       $query->join('shops','shops.id','menus.shop_id');

       if(isset($search['user_name'])){
          $query->where('user_name','like','%'.$search['user_name'].'%');
       }
       if(isset($search['user_phone'])){
         $query->where('user_phone',$search['user_phone']);
       }
       if(isset($search['user_email'])){
         $query->where('user_email',$search['user_email']);
       }
       if(isset($search['shop_name'])){
         $query->where('shop_name',$search['shop_name']);
       }
       if(isset($search['shop_phone'])){
         $query->where('shop_phone',$search['shop_phone']);
       }

       $histories = $query->simplePaginate(5);

       
       // $shop_ids = [];
       // if($histories){
       //    foreach($histories as $history){
       //      $shop_ids[] = $history->shop_id;
       //    }
       // }
       // $tag_names = [];
       // if(!empty($shop_ids)){
       //    $shop_query = Shop::query();
       //    $shop_query->select(['shops.id','tags.tag_name']);
       //    $shop_query->join('shops_tags', 'shops.id', 'shops_tags.shop_id');
       //    $shop_query->join('tags', 'tags.id','shops_tags.tag_id');
       //    $shop_query->whereIn('shops.id',$shop_ids);
       //    $tag_names = $shop_query->get();
       // }
       // dd($tag_names);
       // exit();

    //
    //
    //   if($request->user_name) {
    //     // $user = User::where('user_name',$request->user_name)->first();
    //     // if($user!=null){
    //     //   $query->where("user_id",$user->id);
    //     // }
    //     $query->where('user_name','like','%'.$request->user_name.'%')
    //           ->rightjoin('users','users.id','histories.user_id');
    //
    //
    //   }
    //
    //
    //   if($request->user_phone){
    //     $query->where('user_phone',$request->user_phone)
    //           ->rightjoin('users','users.id','histories.user_id');
    //   }
    //   if($request->user_email){
    //     $query->where('user_email','like','%'.$request->user_email.'%')
    //           ->rightjoin('users','users.id','histories.user_id');
    //   }
    //   // $query = DB::table('histories');
    //   // if($request->shop_name) {
    //   //   // $shop = Shop::where('shop_name',$request->shop_name)->first();
    //   //   $query = DB::table('shops')
    //   //           ->where('shop_name',$request->shop_name)
    //   //           ->leftjoin('menus','shops.id','=','menus.shop_id')
    //   //           ->leftjoin('histories','menus.id','=','histories.menu_id')
    //   //           ->leftjoin('users','users.id','=','histories.user_id')
    //   //           ->get();
    //   //           print_r($query);
    //   //          exit();
    //   //
    //   //    foreach ($query as $history) {
    //   //
    //   //      $shop_id = $history->shop_id;
    //   //
    //   //      $tag_ids = DB::table('shops_tags')->select('tag_id')->where('shop_id',$shop_id)->get();
    //   //
    //   //      $tag_names = array();
    //   //      foreach ($tag_ids as $tag_id) {
    //   //        $tag_name = DB::table('tags')->where('id',$tag_id->tag_id)->first();
    //   //        array_push($tag_names,$tag_name->tag_name);
    //   //
    //   //      }
    //   //      $history->tag_names  = $tag_names;
    //   //   }
    //   //
    //   // }
    //
    //   // if($request->shop_phone) {
    //   //   $shop = Shop::where('shop_phone',$request->shop_phone)->first();
    //   //   if($shop!=null){
    //   //     $menu = Menu::where('shop_id',$shop->id)->first();
    //   //     $query->where("menu_id", $menu->id);
    //   //   }
    //   // }
    //   if($request->shop_name){
    //   // $shop = Shop::where('shop_name',$request->shop_name)->first();
    //   //
    //   // $menu = Menu::where('shop_id',$shop->id);
    //   $query->where('shop_name','like','%'.$request->shop_name.'%')
    //         ->leftjoin('menus','histories.menu_id','menus.id')
    //         ->leftjoin('shops','menus.shop_id','shops.id');
    //
    // }
    //
    //   if($request->shop_phone){
    //   // $shop = Shop::where('shop_name',$request->shop_name)->first();
    //   //
    //   // $menu = Menu::where('shop_id',$shop->id);
    //   $query->where('shop_phone','like','%'.$request->shop_phone.'%')
    //         ->leftjoin('menus','histories.menu_id','menus.id')
    //         ->leftjoin('shops','menus.shop_id','shops.id');
    //
    // }
    //
    //
    //   $histories = $query->simplePaginate(5);




      return view('admin.data_manage',['histories'=>$histories,'search' => $search]);



    }
}
