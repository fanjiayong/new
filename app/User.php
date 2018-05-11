<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
  use SoftDeletes;
  use Notifiable;
  protected $fillable = ['user_email','user_password'];
  protected $table = 'users';
  public function getAuthPassword(){
    return $this->user_password;
  }

//注册用户
  public static $validate_rules = array(

    'user_name' => 'required',

    'user_password' => 'required|confirmed',

    'user_email' => 'required|email|unique:users,user_email',

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

    public function Histories(){
      return $this->hasMany('App\History');
    }


//关联店铺和显示menu
  class User extends Eloquent {

    // public function getData(){
    //   return $this->id
    // }



    protected $table = 'Shops';

    public function hasOneAccount()
  {
      return $this->hasOne('menus', 'menu_id', 'id');
  }
}
}
