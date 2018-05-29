<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop_tag extends Model
{

    protected $table = 'shops_tags';
    //
    public function Shop(){
      return $this->belongsTo('App\Shop');
    }
    public function Tag(){
      return $this->belongsTo('App\Tag');
    }
}
