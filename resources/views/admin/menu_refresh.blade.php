<form action="{{url('/one_coin/menu_refresh')}}" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
  <table border="1">
<input type="hidden" name="menu_id" value="{{$form->id}}">
    <tr>
      <td>Menu_Name:</td>
      <td><input type="text" name="menu_name" value="{{old('menu_name',$form->menu_name)}}"></td>
    </tr>
    <tr>
      <td>price:</td>
      <td><input type="text" name="menu_price" value="{{old('menu_price',$form->menu_price)}}"></td>
    </tr>
    <tr>
      <td>description:</td>
      <td><input type="text" name="menu_content" value="{{old('menu_content',$form->menu_content)}}"></td>
    </tr>
    <tr>
      <td>photo:</td>
      <td><input type="file" name="menu_photo" value=""></td>
    </tr>

  </table>
  <tr>
    <input type="submit" value="更新">
  </tr>
</form>
