<?php

namespace App\Http\Controllers;

use App\Haul_sekumpul;
use App\Posko;
use File;
use Illuminate\Http\Request;

class HaulSekumpulController extends Controller
{
    public function index()
    {
        $data = Haul_sekumpul::orderBy('id', 'desc')->get();
        return view('admin.haul.index', compact('data'));
    }

    public function store(Request $request)
    {
        $data = new Haul_sekumpul;
        $data->informasi_acara = $request->informasi_acara;
        $data->tanggal_mulai = $request->tanggal_mulai;
        $data->tanggal_selesai = $request->tanggal_selesai;
        $data->ketua_panitia = $request->ketua_panitia;
        $data->no_hp_ketua = $request->no_hp_ketua;
        if ($request->foto != null) {
            $img = $request->file('foto');
            $FotoExt = $img->getClientOriginalExtension();
            $FotoName = 'Foto' . '-' . $data->id;
            $foto = $FotoName . '.' . $FotoExt;
            $img->move('images/Ketua', $foto);
            $data->foto = $foto;
        }

        $data->save();

        return redirect()->route('haulIndex')->with('success', 'Data Berhasil Disimpan');
    }

    public function show($uuid)
    {
        $data = Haul_sekumpul::where('uuid', $uuid)->first();
        $posko = Posko::where('haul_sekumpul_id', $data->id)->get();
        return view('admin.haul.detail', compact('data', 'posko'));
    }

    public function edit($uuid)
    {
        $data = Haul_sekumpul::where('uuid', $uuid)->first();

        return view('admin.haul.edit', compact('data'));
    }

    public function update(Request $request, $uuid)
    {
        $data = Haul_sekumpul::where('uuid', $uuid)->first();
        $data->informasi_acara = $request->informasi_acara;
        $data->tanggal_mulai = $request->tanggal_mulai;
        $data->tanggal_selesai = $request->tanggal_selesai;
        $data->ketua_panitia = $request->ketua_panitia;
        $data->no_hp_ketua = $request->no_hp_ketua;
        if ($request->foto != null) {
            $img = $request->file('foto');
            $FotoExt = $img->getClientOriginalExtension();
            $FotoName = 'Foto' . '-' . $data->id;
            $foto = $FotoName . '.' . $FotoExt;
            $img->move('images/Ketua', $foto);
            $data->foto = $foto;
        }

        $data->update();

        return redirect()->route('haulIndex')->with('success', 'Data Berhasil Diubah');

    }

    public function destroy($uuid)
    {
        $haul = haul_sekumpul::where('uuid', $uuid)->first();
        File::delete('images/Ketua/' . $haul->foto);

        $haul->delete();

        return redirect()->route('haulIndex')->with('success', 'Berhasil menghapus data');

    }

}
