<form method="get">
{{ csrf_field() }}
<table border="1">

  <tr><td align="center">料理名</td><td align="center">料理写真</td><td align="center">価格</td><td align="center">説明</td><td align="center">操作</td></tr>
@foreach($menus as $menu)
<tr>
  <td>{{$menu->menu_name}}</td>
  <td><img src="http://localhost/onecoin/storage/app/{{$menu->menu_photo}}" width="200" height="200"></td>
  <td>{{$menu->menu_price}}</td>
  <td>{{$menu->menu_content}}</td>
  <td><a href="http://localhost/onecoin/public/user/menuQRcode?id={{$menu->id}}">選択</a></td>
</tr>
@endforeach
</table>
<a href="{{url('user/homepagedata')}}">戻る</a>
</form>
