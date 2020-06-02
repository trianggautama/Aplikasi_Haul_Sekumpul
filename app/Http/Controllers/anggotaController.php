<?php

namespace App\Http\Controllers;

use App\Anggota_posko;
use Illuminate\Http\Request;

class anggotaController extends Controller
{
    public function index()
    {
        $data = Anggota_posko::all();
        return view('admin.anggota.index',compact('data'));
    }

    public function show($uuid)
    {
        dd($uuid);
        return view('admin.anggota.show');
    }

    public function edit()
    {
        return view('admin.anggota.edit');
    }
}
