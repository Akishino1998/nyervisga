<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Kurir;

class KurirController extends Controller
{
    public function index(Request $request){
        
        // $request = '75124';
        $data = '';
        $cek = Kurir::where('kode_pos',$request->kodepos)->get();
        // dd($cek);
        $data = $cek[0]->id_kurir;
        // return $data;
        return response()->json(array('msg'=> $data), 200);
    }
}
