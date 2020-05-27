<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pemasukanController extends Controller
{
    public function index()
    {
        return view('admin.pemasukan.index');
    }

    public function show()
    {

        return view('admin.pemasukan.show');
    }

    public function edit()
    {
        return view('admin.pemasukan.edit');
    }
}
