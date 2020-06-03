<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kehilanganOrangController extends Controller
{
    public function index()
    {
        return view('admin.kehilanganOrang.index');
    }

    public function show()
    {

        return view('admin.kehilanganOrang.show');
    }

    public function edit()
    {
        return view('admin.kehilanganOrang.edit');
    }
}
