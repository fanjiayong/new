<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    //
    public function User(){
      return $this->belongsTo('App\User');
    }
    public function Menu(){
      return $this->belongsTo('App\Menu');
    }
    public function Shop(){
      return $this->belongsTo('App\Shop');
    }
}
