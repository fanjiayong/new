<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
  use SoftDeletes;

  public static $validate_rules = array(

    'user_name' => 'required',

    'user_password' => 'required|confirmed',

    'user_email' => 'email',

    'user_phone' => 'required'
  );
  public static $validate_messages = array(

    'user_name.required' => 'ユーザー名を入力してください。',

    'user_password.required' => 'パスワードを入力してください。',

    'user_password.confirmed' => 'パスワードが正しくないです。',

    'user_email.email' => 'メールアドレスを入力してください',

    'user_phone.required' => '携帯番号を入力してください。'
  );
  public static $validate_edit_rules = array(

    'user_name' => 'required',

    'user_email' => 'email',

      'user_phone' => 'required'
  );
  public static $validate_edit_messages = array(

    'user_name.required' => 'ユーザー名を入力してください。',

    'user_email.email' => '有効なメールアドレスを入力してください',

    'user_phone.required' => '携帯番号を入力してください。'
  );



    protected $guarded = array('id');
}
