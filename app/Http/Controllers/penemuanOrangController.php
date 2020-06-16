<?php

namespace App\Http\Controllers;

use App\Posko;
use Illuminate\Http\Request;

class penemuanOrangController extends Controller
{
    public function index(){
        $posko = Posko::orderBy('nama_posko', 'asc')->get();
        return view('admin.penemuanOrang.index',compact('posko'));
    }

    public function edit(){
        $posko = Posko::orderBy('nama_posko', 'asc')->get();
        return view('admin.penemuanOrang.edit',compact('posko'));
    }
}
