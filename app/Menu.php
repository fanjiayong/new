<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    public function Histories(){
      return $this->hasMany('App\History');
    }
    public function Shop(){
      return $this->belongsTo('App\Shop');
    }

}
