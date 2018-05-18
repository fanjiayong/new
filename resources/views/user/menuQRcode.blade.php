
{!! QrCode::encoding('UTF-8')->size(300)->generate($url)!!}

<a href="{{url('user/homepagedata')}}">戻る</a>
