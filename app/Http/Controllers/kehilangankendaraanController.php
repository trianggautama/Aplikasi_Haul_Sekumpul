<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kehilangankendaraanController extends Controller
{
    public function index()
    {
        return view('admin.kehilanganKendaraan.index');
    }

    public function show()
    {

        return view('admin.kehilanganKendaraan.show');
    }

    public function edit()
    {
        return view('admin.kehilanganKendaraan.edit');
    }
}
