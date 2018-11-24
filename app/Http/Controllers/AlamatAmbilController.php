<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlamatAmbilController extends Controller
{
    
    public function alamat_ambil(){
    	return view('home.alamat_ambil');
    }
}
