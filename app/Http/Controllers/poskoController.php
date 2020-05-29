<?php

namespace App\Http\Controllers;

use App\Anggota_posko;
use App\Haul_sekumpul;
use App\Ketua_posko;
use App\Posko;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class poskoController extends Controller
{
    public function index()
    {
        $data = Posko::orderBy('id', 'desc')->get();
        $haul = Haul_sekumpul::orderBy('id', 'desc')->get();
        return view('admin.posko.index', compact('data', 'haul'));
    }

    public function store(Request $request)
    {
        $data = new Posko;
        $data->haul_sekumpul_id = $request->haul_sekumpul_id;
        $data->nama_posko = $request->nama_posko;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->jenis_posko = $request->jenis_posko;

        $data->save();

        return redirect()->route('poskoIndex')->with('success', 'Data Berhasil Disimpan');
    }

    public function show($uuid)
    {
        $data = Posko::where('uuid', $uuid)->first();
        $anggota = Anggota_posko::orderBy('id', 'desc')->get();

        return view('admin.posko.detail', compact('data', 'anggota'));
    }

    public function storeKetua(Request $request)
    {
        $id = Posko::where('uuid', $request->uuid)->first();
        $data = new User;
        $data->nama = $request->nama;
        $data->username = $request->username;
        $data->password = Hash::make($request->password);
        $data->no_hp = $request->no_hp;
        if ($request->foto != null) {
            $img = $request->file('foto');
            $FotoExt = $img->getClientOriginalExtension();
            $FotoName = $request->nama;
            $foto = $FotoName . '.' . $FotoExt;
            $img->move('images/user', $foto);
            $data->foto = $foto;
        } else {
            $data->foto = 'default.jpg';
        }

        $ketua = new Ketua_posko;
        $ketua->posko_id = $id->id;
        $ketua->alamat = $request->alamat;

        $data->save();
        $ketua->save();

        return redirect()->route('poskoShow', ['uuid' => $request->uuid])->with('success', 'Data Berhasil Disimpan');

    }

    public function storeAnggota(Request $request)
    {
        $id = Posko::where('uuid', $request->uuid)->first();

        $data = new Anggota_posko;
        $data->posko_id = $id->id;
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
            $data->foto = 'default.jpg';
        }

        $data->save();

        return redirect()->route('poskoShow', ['uuid' => $request->uuid])->with('success', 'Data Berhasil Disimpan');

    }

    public function edit($uuid)
    {
        $data = Posko::where('uuid', $uuid)->first();
        $haul = Haul_sekumpul::orderBy('id', 'desc')->get();
        return view('admin.posko.edit', compact('data', 'haul'));
    }

    public function update(Request $request, $uuid)
    {
        $data = Posko::where('uuid', $uuid)->first();
        $data->haul_sekumpul_id = $request->haul_sekumpul_id;
        $data->nama_posko = $request->nama_posko;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->jenis_posko = $request->jenis_posko;

        $data->update();

        return redirect()->route('poskoIndex')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($uuid)
    {
        $posko = Posko::where('uuid', $uuid)->first()->delete();

        return redirect()->route('poskoIndex')->with('success', 'Berhasil menghapus data');

    }
}
