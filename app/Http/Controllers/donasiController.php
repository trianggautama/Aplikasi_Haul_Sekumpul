<?php

namespace App\Http\Controllers;
use App\Haul_sekumpul;
use Illuminate\Http\Request;

class donasiController extends Controller
{
    public function index()
    {
       $haul = Haul_sekumpul::all();
        return view('admin.donasi.index',compact('haul'));
    }

    

    public function show()
    {

        return view('admin.donasi.show');
    }

    public function edit()
    {
        $haul = Haul_sekumpul::all();
        return view('admin.donasi.edit',compact('haul'));
    }

}
