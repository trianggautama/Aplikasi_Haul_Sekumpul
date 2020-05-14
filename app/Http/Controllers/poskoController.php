<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class poskoController extends Controller
{
    public function index(){
        return view('admin.posko.index');
    }

    public function detail(){
    
        return view('admin.posko.detail');
    }

    public function edit(){
    
        return view('admin.posko.edit');
    }
}
