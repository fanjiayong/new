
<form  method="POST" action="{{url('shop/login_2')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
  <title>店舗登録</title>
    <h1>店舗登録画面</h1>
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



</table>
<br/>
  <input type="submit" value="提交">
</form>
