<html>
<h1>ユーザ管理画面</h1>


  <form action="{{url('one_coin/user_find')}}" method="post">
    {{csrf_field()}}
    <input type="number" name="input" >
    <input type="submit" value="find">
  </form>
<table border="1">
  <tr>
    <th>ID</th>
    <th>user_name</th>
    <th>user_email</th>
    <th>user_phone</th>
    <th><a href="{{url('one_coin/user_detail')}}">詳細</a></th>
    <th><a href="{{url('one_coin/user_refresh')}}">更新</a></th>
  </tr>
  @foreach($items as $item)
  <tr>
    <td>{{$item->id}}</td>
    <td>{{$item->user_name}}</td>
    <td>{{$item->user_email}}</td>
    <td>{{$item->user_phone}}</td>
    <td><a href="http://127.0.0.1/OneCoin/public/one_coin/user_detail?id={{$item->id}}">詳細</a></td>
    <td><a href="http://127.0.0.1/OneCoin/public/one_coin/user_refresh?id={{$item->id}}">更新</a></td>
  </tr>
  @endforeach


</table>
<a href="{{url('one_coin/user_add')}}">新規</a>
</html>
