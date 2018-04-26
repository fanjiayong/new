<form action="{{url('one_coin/login')}}" method="post">
  {{ csrf_field() }}
  
  <table>
    name:<input type="text" name="name">
    password:<input type="password" name="password">
    <input type="submit">
  </table>
