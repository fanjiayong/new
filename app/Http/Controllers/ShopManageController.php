<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Tag;
use App\Shop_tag;
use App\Menu;
use Illuminate\Support\Facades\File;
use DB;
use Illuminate\Support\Facades\Hash;

class ShopManageController extends Controller
{
    //
    public function index(Request $request){
      $items = Shop::all();
      return view('admin.shop_manage',['items'=>$items]);
    }

    public function detail(Request $request){
      $shop = Shop::find($request->id);
      // $tag_ids[] =Shop_tag::where('shop_id',$shop->id)->get();
      // $param = [
      //   'id'=>$shop->id,
      //   'shop_name'=>$shop->shop_name,
      //   'shop_address'=>$shop->shop_address,
      //   'shop_phone'=>$shop->shop_phone,
      //   'shop_photo'=>$shop->shop_photo,
      //   'tag_ids'=>$tag_ids
      //
      // ];
      return view('admin.shop_detail',['shop'=>$shop]);
    }

    public function add(Request $request){
      if($request->isMethod('get')) {

        $tags = Tag::all();
        return view('admin.shop_add',['tags'=>$tags]);
      }else{
              $this->validate($request,Shop::$validate_rules,Shop::$validate_messages);
              $shop = new Shop;
              $shop->shop_name = $request->shop_name;
              $shop->shop_password = Hash::make($request->shop_password);
              $shop->shop_address = $request->shop_address;
              $shop->shop_phone = $request->shop_phone;
              $shop->shop_photo = $request->file('shop_photo')->store('shop_photo');
              $shop->save();
              foreach($request->tag_ids as $tag_id){
                $tag = Tag::find($tag_id);
                $shop_tag = new Shop_tag();
                $shop_tag->shop_id = $shop->id;
                $shop_tag->tag_id = $tag->id;
                $shop_tag->save();
              }
              return redirect('one_coin/shop_manage');
       }
    }

    public function menu_detail(Request $request){
      $shop = Shop::find($request->id);
      return view('admin.shop_menu',['shop'=>$shop]);
    }

    public function menu_add(Request $request){

      if($request->isMethod('get')){
        $shop=Shop::find($request->id);
        return view('admin.menu_add',['shop'=>$shop]);
      }else{
        // $shop=Shop::find($request->id);
        // $shop_id=$shop->id;
        // var_dump($shop_id);
        // exit();

        $menu = new Menu;
        $menu->shop_id = $request->shop_id;
        $menu->menu_name = $request->menu_name;
        $menu->menu_price = $request->menu_price;
        $menu->menu_content = $request->menu_content;
        $menu->menu_photo = $request->file('menu_photo')->store('menu_photo');
        $menu->save();
        return redirect('one_coin/shop_manage');
      }
    }

    public function menu_refresh(Request $request){
      if($request->isMethod('get')){
        $menu = Menu::find($request->id);
        return view('admin.menu_refresh',['form'=>$menu]);
      }else{



        $menu = Menu::find($request->menu_id);
        $menu->menu_name = $request->menu_name;
        $menu->menu_price = $request->menu_price;
        $menu->menu_content = $request->menu_content;
        $menu->menu_photo = $request->file('menu_photo')->store('menu_photo');

        $menu->save();
        return redirect("one_coin/shop_manage");

      }
    }

    public function shop_refresh(Request $request){
      if($request->isMethod('get')){
        $tag = Tag::all();
        $shop = Shop::find($request->id);
        return view('admin.shop_refresh',['shop'=>$shop,'tags'=>$tag]);
      }else{



        $shop = Shop::find($request->shop_id);
        $shop->shop_name = $request->shop_name;

        $shop->shop_address = $request->shop_address;
        $shop->shop_phone = $request->shop_phone;
        $shop->shop_photo = $request->file('shop_photo')->store('shop_photo');
        $shop->save();
        DB::delete('delete from shops_tags where shop_id = ?',[$shop->id]);
        foreach($request->tag_ids as $tag_id){
          $tag = Tag::find($tag_id);
          $shop_tag = new Shop_tag();
          $shop_tag->shop_id = $shop->id;
          $shop_tag->tag_id = $tag->id;
          $shop_tag->save();
        }
        return redirect("one_coin/shop_manage");


      }
    }
}
