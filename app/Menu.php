<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Menu extends Model
{
    use SoftDeletes;
    use Notifiable;

    public static $validate_rules = array(

        'menu_name' => 'required',
        'menu_price' => 'required',
        'menu_photo' => 'required',
        'menu_content' => 'required'
    );
    protected $guarded = array('id');

    public function Histories(){
      return $this->hasMany('App\History');
    }
    public function Shop(){

      return $this->belongsto('App\Shop');
    }

}
