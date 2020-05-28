<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class parkiranController extends Controller
{
    public function index()
    {
        return view('admin.parkiran.index');
    }

    public function show()
    {

        return view('admin.parkiran.show');
    }

    public function edit()
    {
        return view('admin.parkiran.edit');
    }
}
