<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\post;
use App\Model\user\category;
class Homecontroller extends Controller
{
    //
    function index(){
       $posts=post::where('status',1)->paginate(4);
    	return view('user.welcome',compact('posts'));
    }
    function category(category $category){

    	$posts= $category->posts();
    	return view('user.welcome',compact('posts'));
    	
    }
}
