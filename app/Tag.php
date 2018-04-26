<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public function Shops_tag(){
      return $this->hasOne('App\Shops_tag');
    }
}
