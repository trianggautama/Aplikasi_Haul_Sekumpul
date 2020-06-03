<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class penemuanKendaraanController extends Controller
{
    public function index()
    {
        return view('admin.penemuanKendaraan.index');
    }

    public function show()
    {

        return view('admin.penemuanKendaraan.show');
    }

    public function edit()
    {
        return view('admin.penemuanKendaraan.edit');
    }
}
