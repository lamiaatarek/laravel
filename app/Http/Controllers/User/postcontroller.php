<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\post;

class postcontroller extends Controller
{
    //
    function index(post $post){
        
    	return view('user.post',compact('post'));
    }
}
