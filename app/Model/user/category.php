<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    function posts(){
    	return $this->belongstoMany('App\Model\user\post','category_posts')->paginate(3);
    }
    function getRouteKeyName(){
    	return 'slug';
    }
}
