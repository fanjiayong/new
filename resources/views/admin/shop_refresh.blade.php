
<form  method="POST" action="{{url('one_coin/shop_refresh')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
<input type="hidden" name="shop_id" value="{{$shop->id}}">
    <h1>店舗更新画面</h1>
<table border="3">
    <tr>
      <th>店舗名</th>
      <td><input type="text" name="shop_name" value="{{old('shop_name',$shop->shop_name)}}"></td>
    </tr>


    <tr>
        <th>アドレス</th>
        <td><input type="text" name="shop_address" value="{{old('shop_address',$shop->shop_address)}}"></td>
    </tr>

    <tr>
        <th>電話番号</th>
        <td><input type="text" name="shop_phone" value="{{old('shop_phone',$shop->shop_phone)}}"></td>

    </tr>
    <tr>
        <th>店舗写真</th>
        <td><input type="file" name="shop_photo" value="{{old('shop_photo',$shop->shop_photo)}}"/><img src="{{$shop->shop_photo}}"></td>
    </tr>
    <tr>
      <th>カテゴリ</th>
      <td>
        @foreach($tags as $tag)
          @php
          $should_be_checked = false;
          @endphp
          @foreach($shop->shop_tags as $shop_tag)
            @if($shop_tag->tag_id == $tag->id)
              {{$tag->tag_name}}<input type="checkbox" name="tag_ids[]" value="{{$tag->id}}" checked="checked">
              @php
              $should_be_checked = true;
              @endphp
              @break

            @endif

          @endforeach

          @php
          if(!$should_be_checked){
          @endphp
        {{$tag->tag_name}}  <input type="checkbox" name="tag_ids[]" value="{{$tag->id}}">
          @php
        }
          @endphp

        @endforeach
      </td>
    </tr>


</table>
<br/>
  <input type="submit" value="提交">
</form>
