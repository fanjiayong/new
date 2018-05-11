<form action="{{url('/one_coin/user_refresh')}}" method="post">
  {{ csrf_field() }}
  <input type="hidden" name="id" value="{{$form->id}}">
  <table border="1">
    @if(count($errors)>0)
    <div>
      <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
      </ul>
    </div>
    @endif
    <tr>
      <td>UserName:</td>
      <td><input type="text" name="user_name" value="{{old('user_name',$form->user_name)}}"></td>
    </tr>
    <tr>
      <td>phone:</td>
      <td><input type="text" name="user_phone" value="{{old('user_name',$form->user_phone)}}"></td>
    </tr>
    <tr>
      <td>email:</td>
      <td><input type="text" name="user_email" value="{{old('user_name',$form->user_email)}}"></td>
    </tr>

  </table>
  <tr>
    <input type="submit" value="更新">
  </tr>
</form>
