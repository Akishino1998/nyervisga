<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
    	return view('home.index'); 
    }

    public function index(){
    	return view('order');
    }

    public function index(){
    	return view('alamat_ambil');
    }

    public function index(){
    	return view('login');
    }

    public function index(){
    	return view('register');
    }

    public function index(){
    	return view('lupa_password');
    }
}
