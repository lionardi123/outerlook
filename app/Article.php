<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table ="msarticles";
    protected $fillable =['article_title','article_body','admin_id'];

    public function user(){
    	return $this->belongsTo('App\User','admin_id','id');
    }
}
