<?php

namespace App\Http\Controllers;

use App\Donasi;
use App\Haul_sekumpul;
use App\Pengeluaran_donasi;
use Illuminate\Http\Request;

class pengeluaranDonasiController extends Controller
{
    public function index()
    {
        $haul = Haul_sekumpul::orderBy('id', 'desc')->get();
        return view('admin.pengeluaranDonasi.index', compact('haul'));
    }

    public function show($uuid)
    {
        $haul = Haul_sekumpul::where('uuid', $uuid)->first();
        $data = Pengeluaran_donasi::where('haul_sekumpul_id', $haul->id)->orderBy('id', 'Desc')->get();
        $total_donasi = Donasi::where('haul_sekumpul_id', $haul->id)->get()->sum('besaran');
        $total_pengeluaran = Pengeluaran_donasi::where('haul_sekumpul_id', $haul->id)->get()->sum('besaran');

        return view('admin.pengeluaranDonasi.show', compact('haul', 'data', 'total_pengeluaran', 'total_donasi'));
    }

    public function store(Request $req)
    {

        if ($req->sisa - $req->besaran < 0) {
            return redirect()->back()->withWarning('Saldo donasi tidak mencukupi');
        } else {

            $data = Pengeluaran_donasi::create($req->all());

            return back()->withSuccess('Data berhasil disimpan');
        }
    }

    public function edit($uuid)
    {
        $data = Pengeluaran_donasi::where('uuid', $uuid)->first();
        $total_donasi = Donasi::where('haul_sekumpul_id', $data->haul_sekumpul_id)->get()->sum('besaran');
        $total_pengeluaran = Pengeluaran_donasi::where('haul_sekumpul_id', $data->haul_sekumpul_id)->get()->sum('besaran');

        return view('admin.pengeluaranDonasi.edit', compact('data', 'total_pengeluaran', 'total_donasi'));
    }

    public function update(Request $req, $uuid)
    {
        $data = Pengeluaran_donasi::where('uuid', $uuid)->first();

        if ($req->sisa - $req->besaran < 0) {
            return redirect()->back()->withWarning('Saldo donasi tidak mencukupi');
        } else {
            $data->fill($req->all())->save();
        }
        return redirect()->route('pengeluaranDonasiShow', ['uuid' => $data->haul_sekumpul->uuid])->withSuccess('Data berhasil diubah');

    }

    public function destroy($uuid)
    {
        $data = Pengeluaran_donasi::where('uuid', $uuid)->first();
        $data->delete();

        return back()->withSuccess('Data berhasil dihapus');
    }
}
