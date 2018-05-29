<table border="3">
  <form  method="POST" action="{{url('shop/menu_del')}}">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{$form->id}}">
      <tr><th>料理名:</th><td>{{$form->menu_name}}</td></tr>
      <tr><th>料理写真:</th><td>{{$form->menu_photo}}</td></tr>
      <tr><th>価格:</th><td>{{$form->menu_price}</td></tr>
      <tr><th>説明:</th><td>{{$form->menu_content}}</td></tr>
      <tr><th></th><td><input type="submit" value="send"></td></tr>
  </form>
</table>
