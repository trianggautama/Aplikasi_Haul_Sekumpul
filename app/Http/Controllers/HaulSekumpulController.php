<?php

namespace App\Http\Controllers;

use App\Haul_sekumpul;
use Illuminate\Http\Request;

class HaulSekumpulController extends Controller
{
    public function index()
    {
        $data = Haul_sekumpul::orderBy('id', 'desc')->get();
        return view('admin.haul.index', compact('data'));
    }

    public function store(Request $request)
    {
        $data = new Haul_sekumpul;
        $data->informasi_acara = $request->informasi_acara;
        $data->tanggal_mulai = $request->tanggal_mulai;
        $data->tanggal_selesai = $request->tanggal_selesai;
        $data->ketua_panitia = $request->ketua_panitia;

        $data->save();

        return redirect()->route('haulIndex')->with('success', 'Data Berhasil Disimpan');
    }

    public function show($uuid)
    {
        $data = Haul_sekumpul::where('uuid', $uuid)->first();
        return view('admin.haul.detail', compact('data'));
    }

    public function edit($uuid)
    {
        $data = Haul_sekumpul::where('uuid', $uuid)->first();

        return view('admin.haul.edit', compact('data'));
    }

    public function update(Request $request, $uuid)
    {
        $data = Haul_sekumpul::where('uuid', $uuid)->first();
        $data->informasi_acara = $request->informasi_acara;
        $data->tanggal_mulai = $request->tanggal_mulai;
        $data->tanggal_selesai = $request->tanggal_selesai;
        $data->ketua_panitia = $request->ketua_panitia;

        $data->update();

        return redirect()->route('haulIndex')->with('success', 'Data Berhasil Diubah');

    }

    public function destroy($uuid)
    {
        $haul = haul_sekumpul::where('uuid', $uuid)->first()->delete();

        return redirect()->route('haulIndex')->with('success', 'Berhasil menghapus data');

    }

}
