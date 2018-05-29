<html>
<h1>menu詳細ページ</h1>
<table border="1">

  <tr>
    <th>ID</th>
    <th>menu_name</th>
    <th>menu_price</th>
    <th>menu_content</th>
    <th>menu_photo</th>
    <th>更新</th>
  </tr>
  @foreach($shop->menus as $menu)
  <tr>
    <td>{{$menu->id}}</td>
    <td>{{$menu->menu_name}}</td>
    <td>{{$menu->menu_price}}</td>
    <td>{{$menu->menu_content}}</td>
    <td><img src='{{$menu->menu_photo}}'></td>
    <td><a href="http://127.0.0.1/OneCoin/public/one_coin/menu_refresh?id={{$menu->id}}">更新</a></td>

  </tr>
  @endforeach
</table>
<a href="http://127.0.0.1/OneCoin/public/one_coin/menu_add?id={{$shop->id}}">新規</a>
</html>
