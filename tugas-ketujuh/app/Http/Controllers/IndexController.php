<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(){
        return view('dashboard.home');
    }

    public function dataTable(){
        return view('table.table');
    }
}
