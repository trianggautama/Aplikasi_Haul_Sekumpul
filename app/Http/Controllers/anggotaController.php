<?php

namespace App\Http\Controllers;

use App\Anggota_posko;
use App\Posko;
use App\User;
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

    public function editProfil($uuid)
    {
        $data = Anggota_posko::where('uuid', $uuid)->first();

        return view('anggota.edit', compact('data'));
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

        $user = User::findOrFail($data->user->id);
        $user->nama = $request->nama;
        if (isset($request->username)) {
            $user->username = $request->username;
        }
        if (isset($request->password)) {
            $user->password = Hash::make($request->password);
        }

        $user->no_hp = $request->no_hp;

        $user->update();

        return redirect()->route('poskoShow', ['uuid' => $data->posko->uuid])->with('success', 'Data Berhasil diubah');

    }

    public function updateProfil(Request $request, $uuid)
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

        $user = User::findOrFail($data->user->id);
        $user->nama = $request->nama;
        if (isset($request->username)) {
            $user->username = $request->username;
        }
        if (isset($request->password)) {
            $user->password = Hash::make($request->password);
        }

        $user->no_hp = $request->no_hp;

        $user->update();

        return redirect()->route('halamanAnggotaIndex')->with('success', 'Data Berhasil diubah');

    }

    public function destroy($uuid)
    {
        $data = Anggota_posko::where('uuid', $uuid)->first();
        File::delete('images/anggota/' . $data->foto);
        $data->delete();

        return redirect()->back()->withSuccess('Data berhasil dihapus');
    }

    public function filter()
    {
        $data = Posko::all();
        return view('admin.anggota.filter', compact('data'));
    }
}
