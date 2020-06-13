<?php

namespace App\Http\Controllers;

use App\Kehilangan_orang;
use App\Posko;
use Illuminate\Http\Request;

class kehilanganOrangController extends Controller
{
    public function index()
    {
        $data = Kehilangan_orang::orderBy('id', 'desc')->get();
        $posko = Posko::orderBy('nama_posko', 'asc')->get();
        return view('admin.kehilanganOrang.index', compact('data', 'posko'));
    }

    public function store(Request $req)
    {
        $data = Kehilangan_orang::create($req->all());

        return redirect()->back()->withSuccess('Data berhasil disimpan');
    }

    public function show()
    {

        return view('admin.kehilanganOrang.show');
    }

    public function edit($uuid)
    {
        $data = Kehilangan_orang::where('uuid', $uuid)->first();
        $posko = Posko::orderBy('nama_posko', 'asc')->get();
        return view('admin.kehilanganOrang.edit', compact('data', 'posko'));
    }

    public function update(Request $req, $uuid)
    {
        $data = Kehilangan_orang::where('uuid', $uuid)->first();
        $data->fill($req->all())->save();

        return redirect()->route('kehilanganOrangIndex')->withSuccess('Data berhasil diubah');
    }

    public function destroy($uuid)
    {
        $data = Kehilangan_orang::where('uuid', $uuid)->first()->delete();
        return redirect()->back()->withSuccess('Data berhasil dihapus');
    }

    public function filter()
    {
        $posko = Posko::orderBy('nama_posko', 'asc')->get();
        return view('admin.kehilanganOrang.filter', compact('posko'));
    }
}
