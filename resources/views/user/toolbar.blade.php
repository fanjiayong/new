<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-haeder">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class ="navbar-brand" href="/">one coin</a>

    </div>
    <div class="navbar-collapse collapse">
      <ul class "navbar-right  nav navbar-nav">
        @if(Auth::check())
        <li> <a href="#">hello,{{{Auth::user()->name }}}</a></li>
        <li><a href = "logout">登出</a></li>
        @else
        <li><a href="{{url('user/makeuser')}}">新規</a></li>
        <li><a href ="{{url('userlogin')}}">登録</a></li>
        @endif
      </ul>

    </div>

  </div>

</div>
