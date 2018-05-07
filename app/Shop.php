<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Shop_tag;


use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Shop extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;
    protected $fillable = ['shop_name','shop_password'];
    protected $table = 'shops';
    public static $validate_rules = array(

        'shop_name' => 'required',

        'shop_password' => 'required|confirmed',

        'shop_address' => 'required',

        'shop_phone' => 'required',

        'shop_photo' => 'dimensions:min_width=200,min_height=200'

    );
    public static $validate_messages = array(

        'shop_name.required' => 'ユーザー名を入力してください。',

        'shop_password.required' => 'パスワードを入力してください。',

        'shop_password.confirmed' => 'パスワードが正しくないです。',

        'shop_address.required' => 'アドレスを入力してください',

        'shop_phone.required' => '電話番号を入力してください。',

        'shop_photo.dimensions' => '写真を選びください。'

    );
//    public static $validate_edit_rules = array(
//
//        'user_name' => 'required',
//
//        'user_email' => 'email',
//
//        'user_phone' => 'required'
//    );
//    public static $validate_edit_messages = array(
//
//        'user_name.required' => 'ユーザー名を入力してください。',
//
//        'user_email.email' => '有効なメールアドレスを入力してください',
//
//        'user_phone.required' => '携帯番号を入力してください。'
//    );


    protected $guarded = array('id');

    public function Histories(){
      return $this->hasMany('App\History');
    }
    public function shop_tags(){
      return $this->hasMany('App\Shop_tag');
    }


    public function getAuthPassword () {

      return $this->shop_password;

    }


}
