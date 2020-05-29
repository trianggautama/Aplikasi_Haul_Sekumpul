<?php

namespace App\Http\Controllers;

use App\Arraudah;
use App\Pemasukan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pemasukanController extends Controller
{
    public function index()
    {
        $data = Pemasukan::orderBy('id', 'desc')->get();
        return view('admin.pemasukan.index', compact('data'));
    }

    public function store(Request $request)
    {
        $arraudah = new Arraudah;
        $arraudah->judul = $request->judul;
        $arraudah->isi = $request->isi;
        $arraudah->kategori = 1;
        $arraudah->save();

        $data = new pemasukan;
        $data->arraudah_id = $arraudah->id;
        $data->nama_donatur = $request->nama_donatur;
        $data->besaran = $request->besaran;
        $data->user_id = Auth::id();

        $data->save();

        return redirect()->route('pemasukanIndex')->with('success', 'Data Berhasil Disimpan');
    }

    public function show($uuid)
    {
        $data = pemasukan::where('uuid', $uuid)->first();
        return view('admin.pemasukan.show', compact('data'));
    }

    public function edit($uuid)
    {
        $data = pemasukan::where('uuid', $uuid)->first();
        return view('admin.pemasukan.edit', compact('data'));
    }

    public function update(Request $request, $uuid)
    {
        $data = pemasukan::where('uuid', $uuid)->first();

        $data->nama_donatur = $request->nama_donatur;
        $data->besaran = $request->besaran;

        $data->update();

        $arraudah = Arraudah::where('id', $data->arraudah_id)->first();
        $arraudah->judul = $request->judul;
        $arraudah->isi = $request->isi;
        $arraudah->update();

        return redirect()->route('pemasukanIndex')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($uuid)
    {
        $pemasukan = pemasukan::where('uuid', $uuid)->first();
        $arraudah = arraudah::where('id', $pemasukan->arraudah_id)->first()->delete();

        $pemasukan->delete();

        return redirect()->route('pemasukanIndex')->with('success', 'Berhasil menghapus data');

    }
}
