<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    function posts(){
    	return $this->belongstoMany('App\Model\user\post','post_tags');
    }
}
