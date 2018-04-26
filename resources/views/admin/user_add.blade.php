<form action="{{ url('one_coin/user_add') }}" method="post">
  {{ csrf_field() }}
  <table>
    <tr>
      <td>UserName:</td>
      <td><input type="text" name="user_name" value="{{old('user_name')}}"></td>
    </tr>
    <tr>
      <td>password:</td>
      <td><input type="text" name="user_password" value="{{old('user_password')}}"></td>
    </tr>
    <tr>
      <td>password:</td>
      <td><input type="text" name="user_password_confirmation" value="{{old('user_password_confirmation')}}"></td>
    </tr>
    <tr>
      <td>phone:</td>
      <td><input type="text" name="user_phone" value="{{old('user_phone')}}"></td>
    </tr>
    <tr>
      <td>email:</td>
      <td><input type="text" name="user_email" value="{{old('user_email')}}"></td>
    </tr>
  </table>
  <tr>
    <input type="submit" value="提出">
  </tr>
</form>
