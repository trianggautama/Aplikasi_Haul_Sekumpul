<?php

namespace App\Http\Controllers;

use App\Kehilangan_kendaraan;
use App\Posko;
use Illuminate\Http\Request;

class kehilangankendaraanController extends Controller
{
    public function index()
    {
        $data = Kehilangan_kendaraan::orderBy('id', 'desc')->get();
        $posko = Posko::orderBy('nama_posko', 'asc')->get();
        return view('admin.kehilanganKendaraan.index', compact('data', 'posko'));
    }

    public function store(Request $req)
    {
        $data = Kehilangan_kendaraan::create($req->all());

        return redirect()->back()->withSuccess('Data berhasil disimpan');
    }

    public function show()
    {

        return view('admin.kehilanganKendaraan.show');
    }

    public function edit($uuid)
    {
        $data = Kehilangan_kendaraan::where('uuid', $uuid)->first();
        $posko = Posko::orderBy('nama_posko', 'asc')->get();
        return view('admin.kehilanganKendaraan.edit', compact('data', 'posko'));
    }

    public function update(Request $req, $uuid)
    {
        $data = Kehilangan_kendaraan::where('uuid', $uuid)->first();
        $data->fill($req->all())->save();

        return redirect()->route('kehilanganKendaraanIndex')->withSuccess('Data berhasil diubah');
    }

    public function destroy($uuid)
    {
        $data = Kehilangan_kendaraan::where('uuid', $uuid)->first()->delete();
        return redirect()->back()->withSuccess('Data berhasil dihapus');
    }
}
