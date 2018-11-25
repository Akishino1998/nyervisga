<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ElektronikController extends Controller
{
    public function index($id_order, $kode_pos)
    {
        $data = array(
            'id_order'=>$id_order,
            'kode_pos'=>$kode_pos
        );
    	return view('home.elektronik')->with($data);
    }
}
