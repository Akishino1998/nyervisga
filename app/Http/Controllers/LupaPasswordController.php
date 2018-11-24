<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LupaPasswordController extends Controller
{
    
    public function lupa_password(){
    	return view('home.lupa_password');
    }
}
