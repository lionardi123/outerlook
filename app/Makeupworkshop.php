<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makeupworkshop extends Model
{
    protected $table = 'msmakeupworkshop';

    protected $fillable = [
        'workshop_ownerid', 'workshop_name',
    ];

    public function owner(){
        return $this->belongsTo('App/User','workshop_ownerid','id');
    }
}
