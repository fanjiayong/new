<form action="{{ url('one_coin/shop_add') }}" method="post">
  {{ csrf_field() }}
  <table>
    <tr>
      <td>shop_name:</td>
      <td><input type="text" name="shop_name" value="{{old('shop_name')}}"></td>
    </tr>
    <tr>
      <td>address:</td>
      <td><input type="text" name="shop_address" value="{{old('shop_address')}}"></td>
    </tr>
    <tr>
      <td>phone:</td>
      <td><input type="text" name="shop_phone" value="{{old('shop_phone')}}"></td>
    </tr>
    <tr>
      <td>photo:</td>
      <td><input type="file" name="shop_photo"></td>
    </tr>
  </table>
  <tr>
    <input type="submit" value="新規">
  </tr>
</form>
