<?php

namespace App\Http\Controllers;

use App\Haul_sekumpul;
use Illuminate\Http\Request;

class pengeluaranDonasiController extends Controller
{
    public function index()
    {
        $haul = Haul_sekumpul::orderBy('id', 'desc')->get();
        return view('admin.pengeluaranDonasi.index', compact('haul'));
    }

    public function show($uuid)
    {
        $haul = Haul_sekumpul::where('uuid',$uuid)->first();
        // $data = Donasi::where('haul_sekumpul_id', $haul->id)->get();
        return view('admin.pengeluaranDonasi.show', compact('haul'));
    }

    public function edit()
    {
       
        return view('admin.pengeluaranDonasi.edit');
    }
}
