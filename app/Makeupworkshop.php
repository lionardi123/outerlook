<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makeupworkshop extends Model
{
    protected $table = 'msmakeupworkshop';

    protected $fillable = [
        'workshop_ownerid', 'workshop_name','workshop_quota','workshop_price','workshop_description','workshop_city','workshop_address','workshop_duration','workshop_avatar',
    ];

    public function owner(){
        return $this->belongsTo('App\User','workshop_ownerid','id');
    }
}
