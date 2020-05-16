<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function index()
    {
        $data = User::orderBy('id', 'desc')->get();
        return view('admin.user.index', compact('data'));
    }

    public function store(Request $request)
    {
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
        $data->role = 2;

        $data->save();

        return redirect()->route('userIndex')->with('success', 'Data Berhasil Disimpan');
    }

    public function edit($uuid)
    {
        $data = User::where('uuid', $uuid)->first();
        return view('admin.user.edit', compact('data'));
    }

    public function update(Request $request, $uuid)
    {
        $data = User::where('uuid', $uuid)->first();
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
            $user->foto = $foto;
        } else {
            $user->foto = 'default.jpg';
        }
        $data->role = 2;

        $data->update();

        return redirect()->route('userIndex')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($uuid)
    {
        $user = User::where('uuid', $uuid)->first()->delete();

        return redirect()->route('userIndex')->with('success', 'Berhasil menghapus data');

    }
}
