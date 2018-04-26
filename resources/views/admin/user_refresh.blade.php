<form action="{{url('/one_coin/user_refresh')}}" method="post">
  {{ csrf_field() }}
  <table border="1">

    <tr>
      <td>UserName:</td>
      <td><input type="text" name="user_name" value=""></td>
    </tr>
    <tr>
      <td>phone:</td>
      <td><input type="text" name="user_phone" value=""></td>
    </tr>
    <tr>
      <td>email:</td>
      <td><input type="text" name="user_email" value=""></td>
    </tr>

  </table>
  <tr>
    <input type="submit" value="更新">
  </tr>
</form>
