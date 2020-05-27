<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengeluaranController extends Controller
{
    public function index()
    {
        return view('admin.pengeluaran.index');
    }

    public function show()
    {

        return view('admin.pengeluaran.show');
    }

    public function edit()
    {
        return view('admin.pengeluaran.edit');
    }
}
