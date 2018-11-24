<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Login;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
    	return view('home.login');
    }
    public function login(Request $request){
        $mahasiswa=Login::all();
        foreach ($mahasiswa as $mahasiswas) {
            if($mahasiswas->username == $request->username){
                session(['status' => 'login']);
                return redirect('/');
            }else{
                session(['status' => 'salah']);
                return redirect('login');
            }
        }
    }
}