<html>
<h1>ユーザ詳細ページ</h1>

<table border="1">
  <tr>
    <th>{{$user->id}}</th>
    <th>{{$user->user_name}}</th>
    <th>{{$user->user_email}}</th>
    <th>{{$user->user_phone}}</th>
  </tr>
</table>
<br/>
<br/>

<table border="1">
  <tr>
    <th>shop_name</th>
    <th>shop_tag</th>
    <th>menu_name</th>
    <th>menu_price</th>
  </tr>
  <tr>
  @foreach($user->histories as $history)
  <td>{{$history->menu->shop->shop_name}}</td>
  <td>
    @foreach($history->menu->shop->shop_tags as $shop_tag)
    {{$shop_tag->tag->tag_name}}
    @endforeach
  </td>
  <td>{{$history->menu->menu_name}}</td>
  <td>{{$history->menu->menu_price}}</td>
  @endforeach
</tr>
</table>
<a href="{{url('one_coin/user_manage')}}">戻る</a>
</html>
