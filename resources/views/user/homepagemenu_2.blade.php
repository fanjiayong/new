<form  method="POST" action="{{url('user/homepagemenu_2')}}" enctype="multipart/form-data">

{{ csrf_field() }}

<table border="1">

  <input type="hidden" name="menu_id" value="{{$menu->id}}">

  <input type="hidden" name="user_id" value="{{$user->id}}">

  <input type="hidden" name="shop_id" value="{{$menu->shop_id}}">

  <tr><td align="center">料理名</td><td align="center">価格</td><td align="center">説明</td></tr>

<tr>

  <td>{{$menu->menu_name}}</td>

  <td>{{$menu->menu_price}}</td>

  <td>{{$menu->menu_content}}</td>

</tr>

</table>

<input type="submit" value="提交"><br/>

<a href="{{url('user/homepagedata')}}">戻る</a>

</form>
