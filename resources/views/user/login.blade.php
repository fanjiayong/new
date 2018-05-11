

<html>
 <head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
  <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.bootcss.com/popper.js/1.12.5/umd/popper.min.js"></script>
  <script src="https://cdn.bootcss.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
  <h2>ユーザー登録</h2>
  <form method="post" action="">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="name">E-mail:</label>
      <input type="text" class="form-control" id="user_email" name="user_email" >
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="user_password" name="user_password">
    </div>
    <div class="form-check">
    </div>
    <input type="submit" name="" value="ユーザー登録">
    <a href="{{url('user/makeuser')}}">新規作成</a>

  </form>
</div>

</body>
</html>  
