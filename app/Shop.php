<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    //
    public function Histories(){
      return $this->hasMany('App\History');
    }
    public function shops_tag(){
      return $this->hsaOne('APP\Shops_tag');
    }
}
