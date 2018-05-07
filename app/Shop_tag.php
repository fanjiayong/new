<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop_tag extends Model
{

    protected $table = 'shops_tags';
    //
    public function shop(){
      return $this->belongsTo('App\Shop');
    }
    public function tag(){
      return $this->belongsTo('App\Tag');
    }
}
