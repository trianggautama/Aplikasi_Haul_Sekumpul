<?php

namespace App\Http\Controllers;

use App\Donasi;
use App\Haul_sekumpul;
use Illuminate\Http\Request;

class donasiController extends Controller
{
    public function index()
    {
        $haul = Haul_sekumpul::orderBy('id', 'desc')->get();
        return view('admin.donasi.index', compact('haul'));
    }

    public function store(Request $request)
    {
        $data = new donasi;
        $data->haul_sekumpul_id = $request->haul_sekumpul_id;
        $data->nama_donatur = $request->nama_donatur;
        $data->besaran = $request->besaran;
        $data->no_hp = $request->no_hp;
        $data->metode = $request->metode;

        $data->save();

        return redirect()->route('donasiIndex')->with('success', 'Data Berhasil Disimpan');
    }

    public function show($uuid)
    {
        $haul = Haul_sekumpul::where('uuid',$uuid)->first();
        $data = Donasi::where('haul_sekumpul_id', $haul->id)->get();
        return view('admin.donasi.show', compact('data','haul'));
    }

    public function edit($uuid)
    {
        $data = donasi::where('uuid', $uuid)->first();
        $haul = Haul_sekumpul::orderBy('id', 'desc')->get();
        return view('admin.donasi.edit', compact('data', 'haul'));
    }

    public function update(Request $request, $uuid)
    {
        $data = donasi::where('uuid', $uuid)->first();
        $data->haul_sekumpul_id = $request->haul_sekumpul_id;
        $data->nama_donatur = $request->nama_donatur;
        $data->besaran = $request->besaran;
        $data->no_hp = $request->no_hp;
        $data->metode = $request->metode;

        $data->update();

        return redirect()->route('donasiIndex')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($uuid)
    {
        $donasi = donasi::where('uuid', $uuid)->first()->delete();

        return redirect()->route('donasiIndex')->with('success', 'Berhasil menghapus data');

    }

    public function filter()
    {
        $haul = Haul_sekumpul::orderBy('id', 'desc')->get();
        return view('admin.donasi.filter', compact('haul'));
    }

}
