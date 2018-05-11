<form method="get">
@foreach ( $users as $user )

<li>{{$user->user_name}}</li>
<li>{{$user->user_email}}</li>
<li>{{$user->user_phone}}</li>

@endforeach
</form>
