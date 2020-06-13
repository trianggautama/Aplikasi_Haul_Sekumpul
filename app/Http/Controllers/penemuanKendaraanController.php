<?php

namespace App\Http\Controllers;

use App\Lokasi_parkir;
use App\Penemuan_kendaraan;
use App\Posko;
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

        return redirect()->back()->withSuccess('Data berhasil disimpan');
    }

    public function show()
    {

        return view('admin.penemuanKendaraan.show');
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
        // if ($req->foto_penyerahan != null) {
        //     $img = $req->file('foto_penyerahan');
        //     $FotoExt = $img->getClientOriginalExtension();
        //     $FotoName = 'Foto' . '-' . $data->id;
        //     $foto_penyerahan = $FotoName . '.' . $FotoExt;
        //     $img->move('images/penemuanKendaraan', $foto_penyerahan);
        //     $data->foto_penyerahan = $foto_penyerahan;
        // }
        // if ($req->ktp_penerima != null) {
        //     $img = $req->file('ktp_penerima');
        //     $FotoExt = $img->getClientOriginalExtension();
        //     $FotoName = 'KTP' . '-' . $data->id;
        //     $ktp_penerima = $FotoName . '.' . $FotoExt;
        //     $img->move('images/penemuanKendaraan', $ktp_penerima);
        //     $data->ktp_penerima = $ktp_penerima;
        // }
        // $data->update();

        return redirect()->route('penemuanKendaraanIndex')->withSuccess('Data berhasil diubah');
    }

    public function destroy($uuid)
    {
        $data = Penemuan_kendaraan::where('uuid', $uuid)->first();
        // File::delete('images/penemuanKendaraan/' . $data->foto_penyerahan);
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