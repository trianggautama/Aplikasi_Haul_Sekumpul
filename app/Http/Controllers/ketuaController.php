<?php

namespace App\Http\Controllers;

use App\Ketua_posko;
use Illuminate\Http\Request;

class ketuaController extends Controller
{
    public function index()
    {
        $data = Ketua_posko::all();
        return view('admin.ketua.index',compact('data'));
    }

    public function show($uuid)
    {
        $data = Ketua_posko::where('uuid',$uuid)->first();
        return view('admin.ketua.show',compact('data'));
    }

    public function edit($uuid)
    {   
        $data = Ketua_posko::where('uuid',$uuid)->first();
        return view('admin.ketua.edit',compact('data'));
    }
}
