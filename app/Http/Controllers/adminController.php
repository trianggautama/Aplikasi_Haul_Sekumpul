<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){

        return view('admin.index');
    }

    public function poskoIndex(){
    
        return view('admin.posko.index');
    }

    public function poskoDetail(){
    
        return view('admin.posko.detail');
    }
}
