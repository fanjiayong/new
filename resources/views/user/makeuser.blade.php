<!DOCTYPE html>

<html>
 <head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
  <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.bootcss.com/popper.js/1.12.5/umd/popper.min.js"></script>
  <script src="https://cdn.bootcss.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
</head>
@if($errors)
@endif
<table>
  <form  action="{{ url('user/makeuser') }}" method="post">
      {{ csrf_field() }}
      <tr>
        <th>name:</th><td><input type="text" name="user_name" value="{{ old('user_name') }}"></td>
        <td><p class="alert alert-warning">{{$errors->first('user_name')}}</p></td>


      </tr>
      <tr>
        <th>password:</th><td><input type="text" name="user_password" value="{{ old('user_password') }}"></td>
        <td><p class="alert alert-warning">{{$errors->first('user_password')}}</p></td>

      </tr>
      <tr>
        <th>repassword:</th><td><input type="text" name="user_password_confirmation" value="{{ old('user_password_confirmation') }}"></td>
        <td><p class="alert alert-warning">{{$errors->first('user_password')}}</p></td>

      </tr>
      <tr>
        <th>email:</th><td><input type="text" name="user_email" value="{{ old('user_email') }}"></td>
        <td><p class="alert alert-warning">{{$errors->first('user_email')}}</p></td>

      </tr>
      <tr>
        <th>phone:</th><td><input type="text" name="user_phone" value="{{ old('user_phone') }}"></td>
        <td><p class="alert alert-warning">{{$errors->first('user_phone')}}</p></td>

      </tr>
      <tr>
        <th></th><td><input type="submit" value="作成"></td>
      </tr>

  </form>
</table>
