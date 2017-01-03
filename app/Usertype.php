<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usertype extends Model
{
    protected $table = "ltusertype";

    public function type()
    {
        return $this->hasMany('App\User','user_usertypeid','id');
    }
}
