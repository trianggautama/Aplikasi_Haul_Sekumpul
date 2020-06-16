<?php

namespace App\Http\Controllers;

use App\Arraudah;
use App\Pemasukan;
use App\Pengeluaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pengeluaranController extends Controller
{
    public function index()
    {
        $data = Pengeluaran::orderBy('id', 'desc')->get();
        $pendapatan = Pemasukan::all();
        $pemasukan = $pendapatan->sum('besaran');
        return view('admin.pengeluaran.index', compact('data','pemasukan'));
    }

    public function store(Request $request)
    {
        $arraudah = new Arraudah;
        $arraudah->judul = $request->judul;
        $arraudah->isi = $request->isi;
        $arraudah->kategori = 2;
        $arraudah->save();

        $data = new pengeluaran;
        $data->arraudah_id = $arraudah->id;
        $data->besaran = $request->besaran;
        $data->keperluan = $request->keperluan;
        $data->user_id = Auth::id();

        $data->save();

        return redirect()->route('pengeluaranIndex')->with('success', 'Data Berhasil Disimpan');
    }

    public function show($uuid)
    {
        $data = pengeluaran::where('uuid', $uuid)->first();
        return view('admin.pengeluaran.show', compact('data'));
    }

    public function edit($uuid)
    {
        $data = pengeluaran::where('uuid', $uuid)->first();
        return view('admin.pengeluaran.edit', compact('data'));
    }

    public function update(Request $request, $uuid)
    {
        $data = pengeluaran::where('uuid', $uuid)->first();

        $data->besaran = $request->besaran;
        $data->keperluan = $request->keperluan;

        $data->update();

        $arraudah = Arraudah::where('id', $data->arraudah_id)->first();
        $arraudah->judul = $request->judul;
        $arraudah->isi = $request->isi;
        $arraudah->update();

        return redirect()->route('pengeluaranIndex')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($uuid)
    {
        $pengeluaran = pengeluaran::where('uuid', $uuid)->first();
        $arraudah = arraudah::where('id', $pengeluaran->arraudah_id)->first()->delete();

        $pengeluaran->delete();

        return redirect()->route('pengeluaranIndex')->with('success', 'Berhasil menghapus data');

    }
}
