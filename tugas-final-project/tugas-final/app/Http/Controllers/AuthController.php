<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('dashboard.register');
    }

    public function welcome(Request $request){
        $namaDepan = $request['first_name'];
        $namaBelakang = $request['last_name'];

        return view('dashboard.welcome', [
            'namaDepan' => $namaDepan, 
            'namaBelakang' => $namaBelakang
        ]);
    }
}
