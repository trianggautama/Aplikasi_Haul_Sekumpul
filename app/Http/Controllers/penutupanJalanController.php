<?php

namespace App\Http\Controllers;

use App\Haul_sekumpul;
use App\Penutupan_jalan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class penutupanJalanController extends Controller
{
    public function index()
    {
        $haul = Haul_sekumpul::latest()->get();
        $now = Carbon::now()->format('Y-m-d');
        $data = Penutupan_jalan::latest()->whereYear('created_at', $now)->get();
        return view('admin.penutupanJalan.index', compact('haul', 'data'));
    }

    public function store(Request $req)
    {
        $data = Penutupan_jalan::create($req->all());

        return redirect()->route('penutupanJalanIndex')->with('success', 'Data Berhasil Disimpan');
    }

    public function show($uuid)
    {

        return view('admin.haul.detail', compact('data', 'posko'));
    }

    public function edit($uuid)
    {
        $haul = Haul_sekumpul::latest()->get();
        $data = Penutupan_jalan::where('uuid', $uuid)->first();
        return view('admin.penutupanJalan.edit', compact('haul', 'data'));
    }

    public function update(Request $req, $uuid)
    {
        $data = Penutupan_jalan::where('uuid', $uuid)->first();
        $data->fill($req->all())->save();
        return redirect()->route('penutupanJalanIndex')->with('success', 'Data Berhasil Diubah');

    }

    public function destroy($uuid)
    {
        $data = Penutupan_jalan::where('uuid', $uuid)->first()->delete();
        return redirect()->route('penutupanJalanIndex')->with('success', 'Berhasil menghapus data');

    }
}
