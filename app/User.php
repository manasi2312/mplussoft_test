<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
  
    public $primaryKey='user_id';

    public function post(){

        return $this->hasMany('App\Post','user_id','user_id');
    }
}

 