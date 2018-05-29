<html>
<h1>統計管理画面</h1>

<form action="{{url('one_coin/data_manage')}}" method="get">
  {{csrf_field()}}
  user_name<input type="text" name="user_name" value="{{$search['user_name']}}"></br>
  user_phone<input type="text" name="user_phone" value="{{$search['user_phone']}}"></br>
  user_email<input type="text" name="user_email" value="{{$search['user_email']}}"></br>
  shop_name<input type="text" name="shop_name" value="{{$search['shop_name']}}"></br>
  shop_phone<input type="text" name="shop_phone" value="{{$search['shop_phone']}}"></br>
  <input type="submit" value="find">



</form>

<table border="1">
  <tr>
    <th>ID</th>
    <th>tag_name</th>
    <th>shop_name</th>
    <th>user_name</th>
    <th>menu_name</th>

  </tr>

  @foreach($histories as $history)
  <tr>
    <td>{{$history->history_id}}</td>

    <td>

    </td>
    <td>{{$history->shop_name}}</td>
    <td>{{$history->user_name}}</td>
    <td>{{$history->menu_name}}</td>

  </tr>
  @endforeach
</table>
{{ $histories->links() }}
</br>


</html>
