<form action="{{url('/one_coin/shop_refresh')}}" method="post">
  {{ csrf_field() }}
  <table border="1">

    <tr>
      <td>shop_name:</td>
      <td><input type="text" name="shop_name" value=""></td>
    </tr>
    <tr>
      <td>address:</td>
      <td><input type="text" name="shopp_address" value=""></td>
    </tr>
    <tr>
      <td>phone:</td>
      <td><input type="text" name="shop_phone" value=""></td>
    </tr>
    <tr>
      <td>photo:</td>
      <td><input type="text" name="shop_photo" value=""></td>
    </tr>

  </table>
  <tr>
    <input type="submit" value="更新">
  </tr>
</form>
