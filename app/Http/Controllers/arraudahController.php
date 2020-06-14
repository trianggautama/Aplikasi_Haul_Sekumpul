<?php

namespace App\Http\Controllers;

use App\Arraudah;
use File;
use Illuminate\Http\Request;

class arraudahController extends Controller
{
    public function index()
    {
        $data = Arraudah::where('kategori', 3)->orderBy('id', 'desc')->get();
        return view('admin.arraudah.index', compact('data'));
    }

    public function store(Request $request)
    {
        $arraudah = new Arraudah;
        $arraudah->judul = $request->judul;
        $arraudah->isi = $request->isi;
        $arraudah->kategori = 3;
        $arraudah->save();

        if ($request->foto != null) {
            $img = $request->file('foto');
            $FotoExt = $img->getClientOriginalExtension();
            $FotoName = $arraudah->id;
            $foto = $FotoName . '.' . $FotoExt;
            $img->move('images/arraudah', $foto);
            $arraudah->foto = $foto;
        } else {
            $arraudah->foto = 'default.jpg';
        }
        $arraudah->update();

        return redirect()->route('arraudahIndex')->with('success', 'Data Berhasil Disimpan');
    }

    public function show($uuid)
    {
        $data = Arraudah::where('uuid', $uuid)->first();
        return view('admin.arraudah.show', compact('data'));
    }

    public function edit($uuid)
    {
        $data = Arraudah::where('uuid', $uuid)->first();
        return view('admin.arraudah.edit', compact('data'));
    }

    public function update(Request $request, $uuid)
    {

        $arraudah = Arraudah::where('uuid', $uuid)->first();
        $arraudah->judul = $request->judul;
        $arraudah->isi = $request->isi;
        if ($request->foto != null) {
            $img = $request->file('foto');
            $FotoExt = $img->getClientOriginalExtension();
            $FotoName = $arraudah->id;
            $foto = $FotoName . '.' . $FotoExt;
            $img->move('images/arraudah', $foto);
            $arraudah->foto = $foto;
        } else {
            $arraudah->foto = $arraudah->foto;
        }

        $arraudah->update();

        return redirect()->route('arraudahIndex')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($uuid)
    {
        $arraudah = Arraudah::where('uuid', $uuid)->first();
        File::delete('images/arraudah/' . $arraudah->foto);

        $arraudah->delete();

        return redirect()->route('arraudahIndex')->with('success', 'Berhasil menghapus data');

    }
}
