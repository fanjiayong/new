
<form  method="POST" action="{{url('shop/edit')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
  <title>店舗情報変更</title>
    <h1>店舗情報変更画面</h1>
    <a href="{{url('shop/logout')}}">登出</a>
    <br/>

<table border="3">
  <input type="hidden" name="id" value="{{$form->id}}">
    <tr>
      <th>店舗名</th>
      <td>
        <input type="text" name="shop_name" value="{{old("shop_name",$form->shop_name)}}">
      </td>
      @if($errors->has('shop_name'))
      <tr  style="color:red"><th>ERROR</th><td>{{$errors->first('shop_name')}}</td></tr>
      @endif
    </tr>

    <tr>
      <th>アドレス</th>
      <td>
        <input type="text" name="shop_address" value="{{old("shop_address",$form->shop_address)}}">
      </td>
      @if($errors->has('shop_address'))
        <tr  style="color:red"><th>ERROR</th><td>{{$errors->first('shop_address')}}</td></tr>
      @endif
    </tr>

    <tr>
      <th>電話番号</th>
      <td>
        <input type="text" name="shop_phone" value="{{old("shop_phone",$form->shop_phone)}}">
      </td>
      @if($errors->has('shop_phone'))
      <tr  style="color:red"><th>ERROR</th><td>{{$errors->first('shop_phone')}}</td></tr>
      @endif
    </tr>
    <tr>
      <th>店舗写真</th>
      <td>
        <img src="http://localhost/onecoin/storage/app/{{$form->shop_photo}}" width="150" height="150">
        <input type="file" name="shop_photo" value="{{old("shop_photo",$form->shop_photo)}}">
      </td>
      @if($errors->has('shop_photo'))
      <tr  style="color:red"><th>ERROR</th><td>{{$errors->first('shop_photo')}}</td></tr>
      @endif
    </tr>

    <tr>
      <th>料理种类</th>
      <td>
        @foreach($tags as $tag)
          @php
            $checked = false;
          @endphp

          @foreach($form->shop_tags as $shop_tag)
            @if($shop_tag->tag_id == $tag->id)
              {{$tag->tag_name}}<input type="checkbox" name="tag_ids[]" value="{{$tag->id}}" checked="checked">
              @php
                $checked = true;
              @endphp
              @break
            @endif
          @endforeach

          @php
            if(!$checked){
          @endphp
              {{$tag->tag_name}}<input type="checkbox" name="tag_ids[]" value="{{$tag->id}}">
          @php
            }
          @endphp
        @endforeach
        </td>
    </tr>

</table>
<br/>
  <input type="submit" value="変更">
  <br/>
  <a href="{{url('shop/admin')}}">戻る</a>
</form>
