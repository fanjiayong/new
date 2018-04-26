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
</table>
<a href="{{url('one_coin/shop_add')}}">新規</a>
</html>
