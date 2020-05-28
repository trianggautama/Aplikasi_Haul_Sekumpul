<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ketuaController extends Controller
{
    public function index()
    {
        return view('admin.ketua.index');
    }

    public function show()
    {

        return view('admin.ketua.show');
    }

    public function edit()
    {
        return view('admin.ketua.edit');
    }
}
