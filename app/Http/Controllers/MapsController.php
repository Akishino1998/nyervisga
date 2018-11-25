<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\OrderServisAddress;
use App\OrderServis;
class MapsController extends Controller
{
    public function index()
    {
        return view('home.map');
    }
    public function create(Request $request)
    {
        // $id = Session::get('id');
        $id = '12';
        $data=$request->all();
        OrderServis::create($data);
        $id_order = OrderServis::orderBy('id_order', 'desc')->get()->first();
        // dd($id_order);

        $id_order = $id_order['id_order'];
        // dd($id_order);
        $orderadd = OrderServisAddress::where('id_order',$id_order)->first();
        

        // dd($orderadd);
        $orderadd->latitude = $request->latitude;
        $orderadd->longtitude = $request->longtitude;
        $orderadd->alamat_lengkap = $request->alamat_lengkap;
        $orderadd->kode_pos = $request->kode_pos;
        // dd($request->kode_pos);
        $orderadd->catatan = $request->catatan;
        $orderadd->no_hp = $request->no_hp;
        $orderadd->save();
        
        return redirect("/elektronik/".$id_order."/".$request->kode_pos);
    }
}
