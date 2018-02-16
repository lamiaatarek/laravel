<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    function tags(){
    	return $this->belongstoMany('App\Model\user\tag','post_tags')->withtimestamps();
    }
     function categories(){
    	return $this->belongstoMany('App\Model\user\category','category_posts')->withtimestamps();
    }
    function getRouteKeyName(){
    	return 'slug';
    }
}
