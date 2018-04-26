<!DOCTYPE html>
<html>
 <head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ URL::asset('css/onecoin_style.css') }}">
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
  <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.bootcss.com/popper.js/1.12.5/umd/popper.min.js"></script>
  <script src="https://cdn.bootcss.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
</head>
<body>
  {{ Form::open(array('url'=>'users/create', 'class'=>'form-signup')) }}
  <div class="container">
      <div class="row">
          <div class="col-md-4 col-md-offset-4">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h3 class="panel-title">欢迎注册</h3>
                  </div>
                  <div class="panel-body">
                  {{ Form::open(array('url'=>'users/create', 'class'=>'form-signup')) }}


                      <ul>
                          @foreach($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>

                      <fieldset>
                          <div class="form-group">
                              {{ Form::text('username', null, array('class'=>'form-control', 'placeholder'=>'用户名')) }}
                          </div>
                          <div class="form-group">
                          {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'邮箱')) }}
                         </div>
                          <div class="form-group">
                          {{ Form::text('password', null,array('class'=>'form-control', 'placeholder'=>'密码')) }}
                          </div>
                          <div class="form-group">
                          {{ Form::text('password_confirmation', null,array('class'=>'form-control', 'placeholder'=>'确认密码')) }}
                         </div>
                          {{ Form::submit('马上注册',array('class'=>'btn btn-large btn-success btn-block')) }}
                      </fieldset>
                  {{ Form::close() }}

                  </div>
              </div>
          </div>
      </div>
  </div>

<div class="container">
  <h4>新規ユーザー</h4>
  <form>
    <div class="form-group">
      <label for="name">名前:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="pwd">パスワード:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
    <div class="form-group">
      <label for="repwd">パスワード確認:</label>
      <input type="password" class="form-control" id="repwd" placeholder="Enter repassword">
    </div>
    <div class="form-group">
      <label for="repwd">メールアドレス:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="repwd">携帯電話:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter phone">
    </div>
    <div class="form-check">
    </div>
    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
    <button type="submit" class="btn btn-primary">新規作成</button>

  </form>
</div>

</body>
</html>
