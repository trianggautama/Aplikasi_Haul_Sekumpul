<?php

namespace App\Http\Controllers;

use App\Anggota_posko;
use App\Lokasi_parkir;
use Illuminate\Http\Request;

class parkiranController extends Controller
{
    public function index()
    {
        $data = Lokasi_parkir::orderBy('id', 'desc')->get();
        return view('admin.parkiran.index',compact('data'));
    } 

    public function store(Request $request)
    {
        $data = Lokasi_parkir::create($request->all());
        return redirect()->back()->withSuccess('Data berhasil disimpan');
    }

    public function show($uuid)
    {
        $data = Lokasi_parkir::where('uuid', $uuid)->first();
        return view('admin.parkiran.show', compact('data'));
    }

    public function edit($uuid)
    {
        $data = Lokasi_parkir::where('uuid', $uuid)->first();
        $anggota = Anggota_posko::where('posko_id', $data->posko->id)->get();
        return view('admin.parkiran.edit', compact('data', 'anggota'));
    }

    public function update(Request $request, $uuid)
    {
        $data = Lokasi_parkir::where('uuid', $uuid)->first();
        $data->fill($request->all())->save();
        $data->status = $request->status;
        $data->update();

        return redirect()->route('poskoShow', ['uuid' => $data->posko->uuid])->withSuccess('Data berhasil diubah');
    }

    public function destroy($uuid)
    {
        $data = Lokasi_parkir::where('uuid', $uuid)->first()->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus data');

    }
}
