<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class anggotaController extends Controller
{
    public function index()
    {
        return view('admin.anggota.index');
    }

    public function show()
    {

        return view('admin.anggota.show');
    }

    public function edit()
    {
        return view('admin.anggota.edit');
    }
}
