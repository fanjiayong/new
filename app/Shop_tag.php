<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Shop_tag extends Model

{


  protected $table='shops_tags';
  public static $validate_rules = array(

    'tag_id' => 'required'

  );
  protected $guarded = array('id');




    public function shop(){

      return $this->belongsTo('App\Shop');
    }
    public function Tag(){
      return $this->belongsTo('App\Tag');
    }
}
