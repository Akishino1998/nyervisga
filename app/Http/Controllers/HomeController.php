<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
    	return view('home.index'); 
    }

    public function order(){
    	return view('home.order');
    }

    public function alamat_ambil(){
    	return view('home.alamat_ambil');
    }

    public function login(){
    	return view('home.login');
    }

    public function register(){
    	return view('home.register');
    }

    public function lupa_password(){
    	return view('home.lupa_password');
    }
}
