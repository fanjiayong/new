<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class History extends Model
{
    protected $guarded = array('id');
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
