
<tr>
  <td>{{$history->id}}</td>

  <td>
    @foreach($history->menu->shop->shop_tags as $shop_tag)
      {{$shop_tag->tag->tag_name}}
    @endforeach
  </td>
  <td>{{$history->menu->shop->shop_name}}</td>
  <td>{{$history->user->user_name}}</td>
  <td>{{$history->menu->menu_name}}</td>

</tr>
