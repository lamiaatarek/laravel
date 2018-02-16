<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Homecontroller extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    function index(){
    return view ('admin.home');

    }
}
