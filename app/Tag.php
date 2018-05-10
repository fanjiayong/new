<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Tag extends Model
{
    //

    use SoftDeletes;
    use Notifiable;

    public static $validate_rules = array(

      'tag_id' => 'required'

    );

    public function Shop_tags(){

      return $this->hasMany('App\Shop_tag');
    }
    protected $guarded = array('id');

}
