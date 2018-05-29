<form  method="POST" action="{{url('shop/admin')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
  <title>店舗管理</title>
    <h1>店舗管理画面</h1>
    <!-- <a href="{{url('shop/order')}}">即時注文</a> -->
    <a href="{{url('shop/logout')}}">登出</a>

    <table border="1">
      <h3>店舗情報</h3>
      <tr>
        <th>店舗名</th>
        <td>
          <input type="text" name="shop_name" value="{{old("shop_name",$item->shop_name)}}">
        </td>
        @if($errors->has('shop_name'))
        <tr  style="color:red"><th>ERROR</th><td>{{$errors->first('shop_name')}}</td></tr>
        @endif
      </tr>

      <tr>
        <th>アドレス</th>
        <td>
          <input type="text" name="shop_address" value="{{old("shop_address",$item->shop_address)}}">
        </td>
        @if($errors->has('shop_address'))
          <tr  style="color:red"><th>ERROR</th><td>{{$errors->first('shop_address')}}</td></tr>
        @endif
      </tr>

      <tr>
        <th>電話番号</th>
        <td>
          <input type="text" name="shop_phone" value="{{old("shop_address",$item->shop_phone)}}">
        </td>
        @if($errors->has('shop_phone'))
        <tr  style="color:red"><th>ERROR</th><td>{{$errors->first('shop_phone')}}</td></tr>
        @endif
      </tr>

      <tr>
        <th>店舗写真</th>
        <td><img src="http://localhost/onecoin/storage/app/{{$item->shop_photo}}" width="200" height="200"></td>
        @if($errors->has('shop_photo'))
        <tr  style="color:red"><th>ERROR</th><td>{{$errors->first('shop_photo')}}</td></tr>
        @endif
      </tr>
    </table>
    <td>
      <a href="http://localhost/onecoin/public/shop/edit?id={{$item->id}}">店舗情報変更</a>
    </td>

    <table border="1">
      <h3>メニューセット</h3>
      <tr><td>料理写真</td><td>料理名</td><td>価格</td><td>説明</td><td>操作1</td><td>操作2</td></tr>

      @foreach($item->menus as $menu)
      <tr>
        <td><img src="http://localhost/onecoin/storage/app/{{$menu->menu_photo}}" width="130" height="130"></td>
        <td align="center">{{$menu->menu_name}}</td>
        <td align="center">{{$menu->menu_price}}円</td>
        <td align="center">{{$menu->menu_content}}</td>
        <td><a href="http://localhost/onecoin/public/shop/menu_edit?id={{$menu->id}}">変更</a></td>
        <td><a href="http://localhost/onecoin/public/shop/menu_del?id={{$menu->id}}">削除</a></td>
      </tr>
      @endforeach
    </table>

    <td><a href="{{url('shop/menu_add')}}">増加料理</a></td>
  </table>

  <table border="1">
    <h3>歴史消費記録</h3>
    <tr><td>料理名</td><td>消費金額</td><td>消費時間</td></tr>

    @foreach($item->menus as $menu)
      @foreach($menu->histories as $history)
      <tr>
        <td align="center">{{$menu->menu_name}}</td>
        <td align="center">{{$menu->menu_price}}円</td>
        <td align="center">{{$history->created_at}}</td>
      </tr>
      @endforeach
    @endforeach


  </table>

  <br/>
</form>
