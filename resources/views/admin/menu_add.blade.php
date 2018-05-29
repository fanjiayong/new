<form action="{{url('/one_coin/menu_add')}}" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
  <table border="1">
    <input type="hidden" name="shop_id" value="{{$shop->id}}">

    <tr>
      <td>Menu_Name:</td>
      <td><input type="text" name="menu_name" value=""></td>
    </tr>
    <tr>
      <td>price:</td>
      <td><input type="text" name="menu_price" value=""></td>
    </tr>
    <tr>
      <td>description:</td>
      <td><input type="text" name="menu_content" value=""></td>
    </tr>
    <tr>
      <td>photo:</td>
      <td><input type="file" name="menu_photo" value=""></td>
    </tr>

  </table>
  <tr>
    <input type="submit" value="新規">
  </tr>
</form>
