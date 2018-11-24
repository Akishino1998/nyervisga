<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\OrderServis;
use App\OrderServisAddress;


class MapsController extends Controller
{
    public function index()
    {
        return view('home.map');
    }
    public function create(Request $request)
    {
        
        return view('home.elektronik');
    }
}
