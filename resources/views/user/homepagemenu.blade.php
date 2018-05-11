<form method="get">
{{ csrf_field() }}
<table border="1">
@foreach($menus as $menu)
<tr>
  <td>{{$menu->menu_name}}</td>
  <td>{{$menu->menu_photo}}</td>
  <td>{{$menu->menu_price}}</td>
  <td>{{$menu->menu_content}}</td>

</tr>
@endforeach
<table>

</form>
