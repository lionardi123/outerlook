<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makeupclass extends Model
{
    protected $table = 'msmakeupclass';

    protected $fillable = [
        'class_ownerid', 'class_name','class_quota','class_description','class_city','class_address','class_avatar',
    ];

    public function owner(){
        return $this->belongsTo('App\User','class_ownerid','id');
    }
}
