<?php

namespace App\Http\Controllers;

use App\Ketua_posko;
use App\User;
use Illuminate\Http\Request;

class ketuaController extends Controller
{
    public function index()
    {
        $data = Ketua_posko::all();
        return view('admin.ketua.index', compact('data'));
    }

    public function show($uuid)
    {
        $data = Ketua_posko::where('uuid', $uuid)->first();
        return view('admin.ketua.show', compact('data'));
    }

    public function edit($uuid)
    {
        $data = Ketua_posko::where('uuid', $uuid)->first();
        return view('admin.ketua.edit', compact('data'));
    }

    public function update(Request $request, $uuid)
    {
        $ketua = Ketua_posko::where('uuid', $uuid)->first();

        $data = User::findOrFail($ketua->user_id);
        $data->nama = $request->nama;
        $data->username = $request->username;
        if (isset($request->password)) {
            $data->password = Hash::make($request->password);
        }

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
        $data->update();

        $ketua->alamat = $request->alamat;
        $ketua->user_id = $data->id;
        $ketua->update();

        return redirect()->route('poskoShow', ['uuid' => $ketua->posko->uuid])->with('success', 'Data Berhasil diubah');

    }

    public function destroy($uuid)
    {
        $data = Ketua_posko::where('uuid', $uuid)->first();
        File::delete('images/user/' . $data->foto);
        $data->delete();

        return redirect()->back()->withSuccess('Data berhasil dihapus');
    }
}
