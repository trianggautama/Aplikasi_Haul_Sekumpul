<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class arraudahController extends Controller
{
    public function index(){

        return view('admin.arraudah.index');
    }

    public function edit(){

        return view('admin.arraudah.edit');
    }
}
