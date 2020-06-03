<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kehilanganBarangController extends Controller
{
    public function index()
    {
        return view('admin.kehilanganBarang.index');
    }

    public function show()
    {

        return view('admin.kehilanganBarang.show');
    }

    public function edit()
    {
        return view('admin.kehilanganBarang.edit');
    }
}
