<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Tag;
use App\Shop_tag;
use Illuminate\Support\Facades\File;

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
      $param = [
        'id'=>$shop->id,
        'shop_name'=>$shop->shop_name,
        'shop_address'=>$shop->shop_address,
        'shop_phone'=>$shop->shop_phone,
        'shop_photo'=>$shop->shop_photo,

      ];
      return view('admin.shop_detail',$param);
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
}
