<form  method="POST" action="{{url('shop/order')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
  <title>注目画面</title>
    <h1>注文リスト管理画面</h1><a href="{{url('shop/login_2')}}">logout</a>
<br/>
<table border="3">
  <tr>
    <th>料理１</th>
    <td><input type="text" name="shop_name" value="{{old("shop_name")}}"></td>
    @if($errors->has('shop_name'))
    <tr  style="color:red"><th>ERROR</th><td>{{$errors->first('shop_name')}}</td></tr>
    @endif
    <td><input type="button" name="button" value="完成"></td>
    <td><input type="button" name="button" value="キャンセル"></td>
  </tr>

  <tr>
      <th>料理２</th>
      <td><input type="text" name="shop_address" value="{{old("shop_address")}}"></td>
      @if($errors->has('shop_address'))
        <tr  style="color:red"><th>ERROR</th><td>{{$errors->first('shop_address')}}</td></tr>
      @endif
      <td><input type="button" name="button" value="完成"></td>
      <td><input type="button" name="button" value="キャンセル"></td>
  </tr>

  <tr>
      <th>料理３</th>
      <td><input type="text" name="shop_phone" value="{{old("shop_phone")}}"></td>
      @if($errors->has('shop_phone'))
      <tr  style="color:red"><th>ERROR</th><td>{{$errors->first('shop_phone')}}</td></tr>
      @endif
      <td><input type="button" name="button" value="完成"></td>
      <td><input type="button" name="button" value="キャンセル"></td>
  </tr>
</table>

<br/>
<a href="{{url('shop/admin')}}">戻る</a>
</form>
