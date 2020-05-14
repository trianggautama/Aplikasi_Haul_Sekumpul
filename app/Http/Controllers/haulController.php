<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class haulController extends Controller
{
    public function index(){
    
        return view('admin.haul.index');
    }

    public function detail(){
    
        return view('admin.haul.detail');
    }

    public function edit(){
    
        return view('admin.haul.edit');
    }
}
