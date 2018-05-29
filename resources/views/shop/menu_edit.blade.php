<form  method="POST" action="{{url('shop/menu_edit')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
  <title>メニュー変更画面</title>
    <h1>メニュー変更画面</h1>
    <a href="{{url('shop/logout')}}">登出</a>
<table border="1">
  <input type="hidden" name="id" value="{{$form->id}}">
    <tr>
      <th>料理名</th>
      <td><input type="text" name="menu_name" value="{{old("menu_name",$form->menu_name)}}"></td>
      @if($errors->has('menu_name'))
      <tr  style="color:red"><th>ERROR</th><td>{{$errors->first('menu_name')}}</td></tr>
      @endif
    </tr>

    <tr>
        <th>価格（税込）</th>
        <td><input type="text" name="menu_price" value="{{old("menu_address",$form->menu_price)}}">円</td>
        @if($errors->has('menu_address'))
          <tr  style="color:red"><th>ERROR</th><td>{{$errors->first('menu_address')}}</td></tr>
        @endif
    </tr>
    <tr>
        <th>料理写真</th>
        <td>
          <img src="http://localhost/onecoin/storage/app/{{$form->menu_photo}}" width="150" height="150">
          <input type="file" name="menu_photo" value="{{old("menu_photo",$form->menu_photo)}}">
        </td>
        @if($errors->has('menu_photo'))
        <tr  style="color:red"><th>ERROR</th><td>{{$errors->first('menu_photo')}}</td></tr>
        @endif
    </tr>

    <tr>
        <th>説明</th>
        <td><input type="text" name="menu_content" value="{{old("menu_content",$form->menu_content)}}"></td>
        @if($errors->has('menu_content'))
        <tr  style="color:red"><th>ERROR</th><td>{{$errors->first('menu_content')}}</td></tr>
        @endif
    </tr>

</table>
<input type="submit" value="変更">

<br/>
<a href="{{url('shop/admin')}}">戻る</a>


</form>
