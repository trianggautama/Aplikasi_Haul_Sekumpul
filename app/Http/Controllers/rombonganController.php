<?php

namespace App\Http\Controllers;

use App\Haul_sekumpul;
use App\Informasi_rombongan;
use Illuminate\Http\Request;

class rombonganController extends Controller
{
    public function index()
    {
        $data = Informasi_rombongan::orderBy('id', 'desc')->get();
        $haul = Haul_sekumpul::orderBy('id', 'desc')->get();
        return view('admin.rombongan.index', compact('haul', 'data'));
    }

    public function store(Request $request)
    {
        $data = Informasi_rombongan::create($request->all());
        return redirect()->back()->withSuccess('Data berhasil disimpan');
    }

    public function edit($uuid)
    {
        $haul = Haul_sekumpul::orderBy('id', 'desc')->get();
        $data = Informasi_rombongan::where('uuid', $uuid)->first();
        return view('admin.rombongan.edit', compact('data', 'haul'));
    }

    public function update(Request $request, $uuid)
    {
        $data = Informasi_rombongan::where('uuid', $uuid)->first();
        $data->fill($request->all())->save();

        return redirect()->route('rombonganIndex')->withSuccess('Data berhasil diubah');
    }

    public function destroy($uuid)
    {
        $data = Informasi_rombongan::where('uuid', $uuid)->first()->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus data');

    }
}
