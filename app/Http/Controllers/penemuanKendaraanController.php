<?php

namespace App\Http\Controllers;

use App\Lokasi_parkir;
use App\Penemuan_kendaraan;
use App\Posko;
use File;
use Illuminate\Http\Request;

class penemuanKendaraanController extends Controller
{
    public function index()
    {
        $data = Penemuan_kendaraan::orderBy('id', 'desc')->get();
        $posko = Posko::orderBy('nama_posko', 'asc')->get();
        $lokasi_parkir = Lokasi_parkir::orderBy('id', 'desc')->get();
        return view('admin.penemuanKendaraan.index', compact('data', 'posko', 'lokasi_parkir'));
    }

    public function store(Request $req)
    {
        $data = Penemuan_kendaraan::create($req->all());
        if ($req->foto != null) {
            $img = $req->file('foto');
            $FotoExt = $img->getClientOriginalExtension();
            $FotoName = 'Foto' . '-' . $data->id;
            $foto = $FotoName . '.' . $FotoExt;
            $img->move('images/penemuanKendaraan', $foto);
            $data->foto = $foto;
        }

        $data->update();

        return redirect()->back()->withSuccess('Data berhasil disimpan');
    }

    public function show($uuid)
    {
        $data = Penemuan_kendaraan::where('uuid', $uuid)->first();
        return view('admin.penemuanKendaraan.show', compact('data'));
    }

    public function edit($uuid)
    {
        $data = Penemuan_kendaraan::where('uuid', $uuid)->first();
        $posko = Posko::orderBy('nama_posko', 'asc')->get();
        $lokasi_parkir = Lokasi_parkir::orderBy('id', 'desc')->get();
        return view('admin.penemuanKendaraan.edit', compact('data', 'posko', 'lokasi_parkir'));
    }

    public function update(Request $req, $uuid)
    {
        $data = Penemuan_kendaraan::where('uuid', $uuid)->first();
        $data->fill($req->all())->save();
        if ($req->foto != null) {
            $img = $req->file('foto');
            $FotoExt = $img->getClientOriginalExtension();
            $FotoName = 'Foto' . '-' . $data->id;
            $foto = $FotoName . '.' . $FotoExt;
            $img->move('images/penemuanKendaraan', $foto);
            $data->foto = $foto;
        }

        return redirect()->route('penemuanKendaraanIndex')->withSuccess('Data berhasil diubah');
    }

    public function destroy($uuid)
    {
        $data = Penemuan_kendaraan::where('uuid', $uuid)->first();
        File::delete('images/penemuanKendaraan/' . $data->foto);
        // File::delete('images/penemuanKendaraan/' . $data->ktp_penerima);
        $data->delete();
        return redirect()->route('penemuanKendaraanIndex')->withSuccess('Data berhasil dihapus');
    }

    public function filter()
    {
        $posko = Posko::orderBy('nama_posko', 'asc')->get();
        return view('admin.penemuanKendaraan.filter', compact('posko'));
    }
}
