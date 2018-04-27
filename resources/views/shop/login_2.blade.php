
<form  method="POST" action="{{url('shop/login_2')}}">
    {{ csrf_field() }}
  <title>店舗登録</title>
    <h1>店舗登録画面</h1>
<table border="3">
    <tr>
      <th>店舗名</th>
      <td><input type="text" name="shop_name" value="{{old("shop_name")}}"></td>

    </tr>

    <tr>
      <th>パスワード</th>
      <td><input type="password" name="shop_password" value="{{old("shop_password")}}"></td>

    </tr>





</table>
<br/>
  <input type="submit" value="提交">
<br/>
  <a href="{{url('shop/login')}}">店舗新規</a>

</form>
