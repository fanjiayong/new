<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    //
    use Notifiable;
    protected $fillable = ['name','password'];
    public static $validate_rules = array(
      'name' => 'required',
      'password' => 'required',
    );
    protected $guarded = array('id');
}
