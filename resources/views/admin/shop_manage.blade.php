<html>
<h1>ショップ管理画面</h1>
  <input type="text" name="shop_key" value="検索">
  <input type="button" name="shop_button" value="検索">
<table border="1">
  <tr>
    <th>ID</th>
    <th>shop_tag</th>
    <th>shop_name</th>
    <th>shop_address</th>
    <th>shop_phone</th>
    <th>shop_photo</th>
    <th><a href="{{url('one_coin/shop_detail')}}">詳細</a></th>
    <th><a href="{{url('one_coin/shop_menu')}}">メニュー</a></th>
    <th><a href="{{url('one_coin/shop_refresh')}}">更新</a></th>
  </tr>

@foreach($items as $item)
<tr>
  <td>{{$item->id}}</td>
  <td>
@foreach($item->shop_tags as $shop_tag)
{{$shop_tag->tag->tag_name}}
@endforeach
  </td>
  <td>{{$item->shop_name}}</td>
  <td>{{$item->shop_address}}</td>
  <td>{{$item->shop_phone}}</td>
  <td><img src="{{$item->shop_photo}}" width="75" height="75"></td>
  <td><a href="http://127.0.0.1/OneCoin/public/one_coin/shop_detail?id={{$item->id}}">詳細</a></td>
  <td><a href="http://127.0.0.1/OneCoin/public/one_coin/shop_menu?id={{$item->id}}">メニュー</a></td>
  <td><a href="http://127.0.0.1/OneCoin/public/one_coin/shop_refresh?id={{$item->id}}">更新</a></td>
</tr>
@endforeach

</table>
<a href="{{url('one_coin/shop_add')}}">新規</a>
</html>
