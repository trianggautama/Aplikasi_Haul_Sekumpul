<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class penemuanBarangController extends Controller
{
    public function index()
    {
        return view('admin.penemuanBarang.index');
    }

    public function show()
    {

        return view('admin.penemuanBarang.show');
    }

    public function edit()
    {
        return view('admin.penemuanBarang.edit');
    }
}
