<html>




    <input type="text" name="input"  value="{{$input}}">
    <input type="submit" value="find">
  </form>
<table border="1">
  <tr>
    <th>ID</th>
    <th>user_name</th>
    <th>user_email</th>
    <th>user_phone</th>
  </tr>

  <tr>
    <td>{{$item->id}}</td>
    <td>{{$item->user_name}}</td>
    <td>{{$item->user_email}}</td>
    <td>{{$item->user_phone}}</td>

  </tr>



</table>
</html>
