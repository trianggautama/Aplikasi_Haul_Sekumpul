<?php

namespace App\Http\Controllers;
use App\Haul_sekumpul;
use Illuminate\Http\Request;

class rombonganController extends Controller
{
    public function index()
    {
        $haul = Haul_sekumpul::orderBy('id', 'desc')->get();
        return view('admin.rombongan.index',compact('haul'));
    }

    public function show()
    {

        return view('admin.rombongan.show');
    }

    public function edit()
    {
        $haul = Haul_sekumpul::orderBy('id', 'desc')->get();
        return view('admin.rombongan.edit',compact('haul'));
    }
}
