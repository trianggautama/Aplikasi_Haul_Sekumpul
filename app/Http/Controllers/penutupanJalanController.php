<?php

namespace App\Http\Controllers;

use App\Haul_sekumpul;
use Illuminate\Http\Request;

class penutupanJalanController extends Controller
{
    public function index()
    {
        $haul = Haul_sekumpul::latest()->get();
        return view('admin.penutupanJalan.index',compact('haul'));
    }

    public function store(Request $request)
    {
       

        return redirect()->route('haulIndex')->with('success', 'Data Berhasil Disimpan');
    }

    public function show($uuid)
    {
       
        return view('admin.haul.detail', compact('data', 'posko'));
    }

    public function edit($uuid)
    {
        $haul = Haul_sekumpul::latest()->get();
        return view('admin.penutupanJalan.edit', compact('haul'));
    }

    public function update(Request $request, $uuid)
    {
      
        return redirect()->route('haulIndex')->with('success', 'Data Berhasil Diubah');

    }

    public function destroy($uuid)
    {
        
        return redirect()->route('haulIndex')->with('success', 'Berhasil menghapus data');

    }
}
