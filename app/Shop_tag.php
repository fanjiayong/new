<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop_tag extends Model
{
    //
    public function Shop(){
      return $this->belongsTo('App\Shop');
    }
    public function tag(){
      return $this->belongsTo('App\Tag');
    }
}
