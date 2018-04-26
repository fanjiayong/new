<form action="{{url('/one_coin/menu_refresh')}}" method="post">
  {{ csrf_field() }}
  <table border="1">

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
      <td><input type="text" name="menu_photo" value=""></td>
    </tr>

  </table>
  <tr>
    <input type="submit" value="更新">
  </tr>
</form>
