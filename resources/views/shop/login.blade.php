
<form  method="POST" action="{{url('shop/login')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
  <title>店舗申請</title>
    <h1>店舗申請画面</h1>
<table border="3">
    <tr>
      <th>店舗名</th>
      <td><input type="text" name="shop_name" value="{{old("shop_name")}}"></td>
      @if($errors->has('shop_name'))
      <tr  style="color:red"><th>ERROR</th><td>{{$errors->first('shop_name')}}</td></tr>
      @endif
    </tr>

    <tr>
      <th>パスワード</th>
      <td><input type="password" name="shop_password" value="{{old("shop_password")}}"></td>
      @if($errors->has('user_password'))
      <tr  style="color:red"><th>ERROR</th><td>{{$errors->first('shop_password')}}</td></tr>
      @endif
    </tr>

    <tr>
      <th>パスワード確認</th>
      <td><input type="password" name="shop_password_confirmation" value="{{old("shop_password_confirmation")}}"></td>
      @if($errors->has('shop_password'))
      <tr  style="color:red"><th>ERROR</th><td>{{$errors->first('shop_password')}}</td></tr>
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
<br/>
  <input type="submit" value="提交">
</form>
