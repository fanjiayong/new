<form  method="POST" action="{{url('shop/admin')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
  <title>店舗管理</title>
    <h1>店舗管理画面</h1>
<a href="{{url('shop/order')}}">即時注文</a>
<a href="{{url('shop/login_2')}}">logout</a>
<table border="1">
  <h3>店舗情報</h3>
    <tr>
      <th>店舗名</th>
      <td><input type="text" name="shop_name" value="{{old("shop_name")}}"></td>
      @if($errors->has('shop_name'))
      <tr  style="color:red"><th>ERROR</th><td>{{$errors->first('shop_name')}}</td></tr>
      @endif
    </tr>

    <tr>
        <th>アドレス</th>
        <td><input type="text" name="shop_address" value="{{old("shop_address")}}"></td>
        @if($errors->has('shop_address'))
          <tr  style="color:red"><th>ERROR</th><td>{{$errors->first('shop_address')}}</td></tr>
        @endif
    </tr>

    <tr>
        <th>電話番号</th>
        <td><input type="text" name="shop_phone" value="{{old("shop_phone")}}"></td>
        @if($errors->has('shop_phone'))
        <tr  style="color:red"><th>ERROR</th><td>{{$errors->first('shop_phone')}}</td></tr>
        @endif
    </tr>
    <tr>
        <th>店舗写真</th>
        <td><input type="file" name="shop_photo" value="{{old("shop_photo")}}"></td>
        @if($errors->has('shop_photo'))
        <tr  style="color:red"><th>ERROR</th><td>{{$errors->first('shop_photo')}}</td></tr>
        @endif
    </tr>
</table>

<table border="1">
  <h3>メニューセット</h3>
  <tr>
    <th>料理１</th>
    <td><input type="text" name="menu_name" value="{{old("menu_name")}}"></td>
    @if($errors->has('menu_name'))
    <tr  style="color:red"><th>ERROR</th><td>{{$errors->first('menu_name')}}</td></tr>
    @endif
    <td><input type="button" name="button" value="編集"></td>
    <td><input type="button" name="button" value="削除"></td>
  </tr>

  <tr>
      <th>料理２</th>
      <td><input type="text" name="menu_name" value="{{old("menu_name")}}"></td>
      @if($errors->has('menu_name'))
        <tr  style="color:red"><th>ERROR</th><td>{{$errors->first('menu_name')}}</td></tr>
      @endif
      <td><input type="button" name="button" value="編集"></td>
      <td><input type="button" name="button" value="削除"></td>
  </tr>

  <tr>
      <th>料理３</th>
      <td><input type="text" name="menu_name" value="{{old("menu_name")}}"></td>
      @if($errors->has('menu_name'))
      <tr  style="color:red"><th>ERROR</th><td>{{$errors->first('menu_name')}}</td></tr>
      @endif
      <td><input type="button" name="button" value="編集"></td>
      <td><input type="button" name="button" value="削除"></td>
  </tr>

  <td><a href="{{url('shop/menu_add')}}">増加料理</a></td>
  <!-- <td><input type="button" name="button" value="増加料理" onclick="{{url('shop/menu_add')}}"></td> -->
</table>
<table border="1">
    <h3>歴史消費記録</h3>
    <tr>
      <td>料理名</td>
      <td>消費時間</td>
      <td>消費金額</td>
    </tr>

</table>
<br/>
<td><input type="button" name="button" value="戻る"></td>

</form>
