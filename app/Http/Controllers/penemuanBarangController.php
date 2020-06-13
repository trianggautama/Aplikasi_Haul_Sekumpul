<?php

namespace App\Http\Controllers;

use App\Penemuan_barang;
use App\Posko;
use File;
use Illuminate\Http\Request;

class penemuanBarangController extends Controller
{
    public function index()
    {
        $data = Penemuan_barang::orderBy('id', 'desc')->get();
        $posko = Posko::orderBy('nama_posko', 'asc')->get();
        return view('admin.penemuanBarang.index', compact('data', 'posko'));
    }

    public function store(Request $req)
    {
        $data = Penemuan_barang::create($req->all());

        return redirect()->back()->withSuccess('Data berhasil disimpan');
    }

    public function show()
    {

        return view('admin.penemuanBarang.show');
    }

    public function edit($uuid)
    {
        $data = Penemuan_barang::where('uuid', $uuid)->first();
        $posko = Posko::orderBy('nama_posko', 'asc')->get();
        return view('admin.penemuanBarang.edit', compact('data', 'posko'));
    }

    public function update(Request $req, $uuid)
    {
        $data = Penemuan_barang::where('uuid', $uuid)->first();
        $data->fill($req->all())->save();
        if ($req->foto_penyerahan != null) {
            $img = $req->file('foto_penyerahan');
            $FotoExt = $img->getClientOriginalExtension();
            $FotoName = 'Foto' . '-' . $data->id;
            $foto_penyerahan = $FotoName . '.' . $FotoExt;
            $img->move('images/penemuanBarang', $foto_penyerahan);
            $data->foto_penyerahan = $foto_penyerahan;
        }
        if ($req->ktp_penerima != null) {
            $img = $req->file('ktp_penerima');
            $FotoExt = $img->getClientOriginalExtension();
            $FotoName = 'KTP' . '-' . $data->id;
            $ktp_penerima = $FotoName . '.' . $FotoExt;
            $img->move('images/penemuanBarang', $ktp_penerima);
            $data->ktp_penerima = $ktp_penerima;
        }
        $data->update();

        return redirect()->route('penemuanBarangIndex')->withSuccess('Data berhasil diubah');
    }

    public function destroy($uuid)
    {
        $data = Penemuan_barang::where('uuid', $uuid)->first();
        File::delete('images/penemuanBarang/' . $data->foto_penyerahan);
        File::delete('images/penemuanBarang/' . $data->ktp_penerima);
        $data->delete();
        return redirect()->route('penemuanBarangIndex')->withSuccess('Data berhasil dihapus');
    }

    public function filter()
    {
        $posko = Posko::orderBy('nama_posko', 'asc')->get();
        return view('admin.penemuanBarang.filter', compact('posko'));
    }
}
