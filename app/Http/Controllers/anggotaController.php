<?php

namespace App\Http\Controllers;

use App\Anggota_posko;
use File;
use Illuminate\Http\Request;

class anggotaController extends Controller
{
    public function index()
    {
        $data = Anggota_posko::all();
        return view('admin.anggota.index', compact('data'));
    }

    public function show($uuid)
    {
        $data = Anggota_posko::where('uuid', $uuid)->first();

        return view('admin.anggota.show', compact('data'));
    }

    public function edit($uuid)
    {
        $data = Anggota_posko::where('uuid', $uuid)->first();

        return view('admin.anggota.edit', compact('data'));
    }

    public function update(Request $request, $uuid)
    {
        $data = Anggota_posko::where('uuid', $uuid)->first();
        $data->nama = $request->nama;
        $data->jabatan = $request->jabatan;
        $data->no_hp = $request->no_hp;
        $data->tugas = $request->tugas;
        if ($request->foto != null) {
            $img = $request->file('foto');
            $FotoExt = $img->getClientOriginalExtension();
            $FotoName = $request->nama;
            $foto = $FotoName . '.' . $FotoExt;
            $img->move('images/anggota', $foto);
            $data->foto = $foto;
        } else {
            $data->foto = $data->foto;
        }

        $data->update();

        return redirect()->route('poskoShow', ['uuid' => $data->posko->uuid])->with('success', 'Data Berhasil diubah');

    }

    public function destroy($uuid)
    {
        $data = Anggota_posko::where('uuid', $uuid)->first();
        File::delete('images/anggota/' . $data->foto);
        $data->delete();

        return redirect()->back()->withSuccess('Data berhasil dihapus');
    }
}
