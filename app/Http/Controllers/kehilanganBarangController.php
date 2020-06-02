<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kehilanganBarangController extends Controller
{
    public function index()
    {
        return view('admin.kehilangan.index');
    }

    public function show()
    {

        return view('admin.kehilangan.show');
    }

    public function edit()
    {
        return view('admin.kehilangan.edit');
    }
}
