<?php

namespace App\Http\Controllers;

use App\Penemuan_orang;
use App\Posko;
use File;
use Illuminate\Http\Request;

class penemuanOrangController extends Controller
{
    public function index()
    {
        $data = Penemuan_orang::orderBy('id', 'desc')->get();
        $posko = Posko::orderBy('nama_posko', 'asc')->get();
        return view('admin.penemuanOrang.index', compact('data', 'posko'));
    }

    public function store(Request $req)
    {
        $data = Penemuan_orang::create($req->all());
        if ($req->foto != null) {
            $img = $req->file('foto');
            $FotoExt = $img->getClientOriginalExtension();
            $FotoName = 'Foto' . '-' . $data->id;
            $foto = $FotoName . '.' . $FotoExt;
            $img->move('images/penemuanOrang', $foto);
            $data->foto = $foto;
        }
        $data->update();

        return redirect()->back()->withSuccess('Data berhasil disimpan');
    }

    public function show()
    {

        return view('admin.penemuanOrang.show');
    }

    public function edit($uuid)
    {
        $data = Penemuan_orang::where('uuid', $uuid)->first();
        $posko = Posko::orderBy('nama_posko', 'asc')->get();
        return view('admin.penemuanOrang.edit', compact('data', 'posko'));
    }

    public function update(Request $req, $uuid)
    {
        $data = Penemuan_orang::where('uuid', $uuid)->first();
        $data->fill($req->all())->save();
        if ($req->foto != null) {
            $img = $req->file('foto');
            $FotoExt = $img->getClientOriginalExtension();
            $FotoName = 'Foto' . '-' . $data->id;
            $foto = $FotoName . '.' . $FotoExt;
            $img->move('images/penemuanOrang', $foto);
            $data->foto = $foto;
        }
        $data->update();

        return redirect()->route('penemuanOrangIndex')->withSuccess('Data berhasil diubah');
    }

    public function destroy($uuid)
    {
        $data = Penemuan_orang::where('uuid', $uuid)->first();
        File::delete('images/penemuanPenemuan/' . $data->foto);
        // File::delete('images/penemuanKendaraan/' . $data->ktp_penerima);
        $data->delete();
        return redirect()->route('penemuanKendaraanIndex')->withSuccess('Data berhasil dihapus');
    }

    public function filter()
    {
        $posko = Posko::orderBy('nama_posko', 'asc')->get();
        return view('admin.penemuanOrang.filter', compact('posko'));
    }
}
