<html>
<h1>ショップ詳細ページ</h1>
<table border="1">
  <tr>
    <th>{{$shop->id}}</th>
    <th>
      @foreach($shop->shop_tags as $shop_tag)
      {{$shop_tag->tag->tag_name}}
      @endforeach
    </th>
    <th>{{$shop->shop_name}}</th>
    <th>{{$shop->shop_address}}</th>
    <th>{{$shop->shop_phone}}</th>
    <th><img src="{{$shop->shop_photo}}" width="75" height="75"></th>
  </tr>
</table>
<br/>
<br/>

<table border="1">
  <tr>
    <th>user_name</th>
    <th>menu_name</th>

  </tr>

  <tr>
    @foreach($shop->menus as $menu)
    @foreach($menu->histories as $history)
  <tr>
    <td>{{$history->user->user_name}}</td>
    <td>{{$history->menu->menu_name}}</td>
  </tr>
    @endforeach
    @endforeach
  </tr>
</table>
</html>
