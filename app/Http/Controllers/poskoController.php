<?php

namespace App\Http\Controllers;

use App\Posko;
use App\Haul_sekumpul;
use Illuminate\Http\Request;

class poskoController extends Controller
{
    public function index()
    {
        $data = Posko::orderBy('id', 'desc')->get();
        $haul = Haul_sekumpul::orderBy('id', 'desc')->get();
        return view('admin.posko.index', compact('data','haul'));
    }

    public function store(Request $request)
    {   
        $data = new Posko;
        $data->haul_sekumpul_id = $request->haul_sekumpul_id;
        $data->nama_posko = $request->nama_posko;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->jenis_posko = $request->jenis_posko;

        $data->save();

        return redirect()->route('poskoIndex')->with('success', 'Data Berhasil Disimpan');
    }

    public function show($uuid)
    {
        $data = Posko::where('uuid', $uuid)->first();
        return view('admin.posko.detail', compact('data'));
    }

    public function edit($uuid)
    {
        $data = Posko::where('uuid', $uuid)->first();
        $haul = Haul_sekumpul::orderBy('id', 'desc')->get();
        return view('admin.posko.edit', compact('data','haul'));
    }

    public function update(Request $request, $uuid)
    {
        $data = Posko::where('uuid', $uuid)->first();
        $data->haul_sekumpul_id = $request->haul_sekumpul_id;
        $data->nama_posko = $request->nama_posko;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->jenis_posko = $request->jenis_posko;

        $data->update();

        return redirect()->route('poskoIndex')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($uuid)
    {
        $posko = Posko::where('uuid', $uuid)->first()->delete();

        return redirect()->route('poskoIndex')->with('success', 'Berhasil menghapus data');

    }
}
