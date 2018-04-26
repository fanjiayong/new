<form  method="POST" action="{{url('shop/menu_add')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
  <title>メニュー増加画面</title>
    <h1>メニュー増加画面</h1>
<table border="1">
    <tr>
      <th>料理名</th>
      <td><input type="text" name="shop_name" value="{{old("shop_name")}}"></td>
      @if($errors->has('shop_name'))
      <tr  style="color:red"><th>ERROR</th><td>{{$errors->first('shop_name')}}</td></tr>
      @endif
    </tr>

    <tr>
        <th>価格（税込）</th>
        <td><input type="text" name="shop_address" value="{{old("shop_address")}}"></td>
        @if($errors->has('shop_address'))
          <tr  style="color:red"><th>ERROR</th><td>{{$errors->first('shop_address')}}</td></tr>
        @endif
    </tr>

    <tr>
        <th>原価</th>
        <td><input type="text" name="shop_phone" value="{{old("shop_phone")}}"></td>
        @if($errors->has('shop_phone'))
        <tr  style="color:red"><th>ERROR</th><td>{{$errors->first('shop_phone')}}</td></tr>
        @endif
    </tr>
    <tr>
        <th>料理写真</th>
        <td><input type="file" name="shop_photo" value="{{old("shop_photo")}}"></td>
        @if($errors->has('shop_photo'))
        <tr  style="color:red"><th>ERROR</th><td>{{$errors->first('shop_photo')}}</td></tr>
        @endif
    </tr>

    <tr>
        <th>説明</th>
        <td><input type="text" name="shop_photo" value="{{old("shop_photo")}}"></td>
        @if($errors->has('shop_photo'))
        <tr  style="color:red"><th>ERROR</th><td>{{$errors->first('shop_photo')}}</td></tr>
        @endif
    </tr>

</table>
<input type="button" name="button" value="提出">

<br/>
<a href="{{url('shop/admin')}}">戻る</a>


</form>
