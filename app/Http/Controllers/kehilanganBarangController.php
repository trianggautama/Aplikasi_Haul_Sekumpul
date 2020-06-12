<?php

namespace App\Http\Controllers;

use App\Kehilangan_barang;
use App\Posko;
use Illuminate\Http\Request;

class kehilanganBarangController extends Controller
{
    public function index()
    {
        $data = Kehilangan_barang::orderBy('id', 'desc')->get();
        $posko = Posko::orderBy('nama_posko', 'asc')->get();
        return view('admin.kehilanganBarang.index', compact('data', 'posko'));
    }

    public function store(Request $req)
    {
        $data = Kehilangan_barang::create($req->all());

        return redirect()->back()->withSuccess('Data berhasil disimpan');
    }

    public function show()
    {

        return view('admin.kehilanganBarang.show');
    }

    public function edit($uuid)
    {
        $data = Kehilangan_barang::where('uuid', $uuid)->first();
        $posko = Posko::orderBy('nama_posko', 'asc')->get();
        return view('admin.kehilanganBarang.edit', compact('data', 'posko'));
    }

    public function update(Request $req, $uuid)
    {
        $data = Kehilangan_barang::where('uuid', $uuid)->first();
        $data->fill($req->all())->save();

        return redirect()->route('kehilanganBarangIndex')->withSuccess('Data berhasil diubah');
    }

    public function destroy($uuid)
    {
        $data = Kehilangan_barang::where('uuid', $uuid)->first()->delete();
        return redirect()->back()->withSuccess('Data berhasil dihapus');
    }
}
