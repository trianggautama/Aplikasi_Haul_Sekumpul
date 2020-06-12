<?php

namespace App\Http\Controllers;

use App\Anggota_posko;
use App\Donasi;
use App\Haul_sekumpul;
use App\Ketua_posko;
use App\Lokasi_parkir;
use App\Pemasukan;
use App\Pengeluaran;
use App\posko;
use Carbon\Carbon;
use PDF;
use Illuminate\Http\Request;

class reportController extends Controller
{
    public function poskoCetak(){
        $data     = Posko::all();
        $tgl      = Carbon::now()->format('d-m-Y');
        $pdf      = PDF::loadView('formCetak.posko', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Posko Keseluruhan.pdf');
    }

    public function poskoFilter(Request $request){
        $haul = Haul_sekumpul::findOrFail($request->haul_sekumpul_id);
        $data = Posko::where('haul_sekumpul_id',$request->haul_sekumpul_id)->get();
        $tgl= Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.poskoFilter', ['data'=>$data,'tgl'=>$tgl,'haul'=>$haul]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Posko Filter.pdf');
    }

    public function poskoDetailCetak($uuid){
        $data = Posko::where('uuid',$uuid)->first();
        $tgl= Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.infoPosko', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Informasi Posko.pdf');
    }

    public function donasiCetak(){
        $data = Donasi::all();
        $tgl= Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.donasi', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Informasi Donasi Keseluruhan.pdf');
    }

    public function donasiFilter(Request $request){
        $haul = Haul_sekumpul::findOrFail($request->haul_sekumpul_id);
        $data = Donasi::where('haul_sekumpul_id',$request->haul_sekumpul_id)->get();
        $tgl= Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.donasiFilter', ['data'=>$data,'tgl'=>$tgl,'haul'=>$haul]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Informasi Donasi Filter.pdf');
    }

    public function pemasukanCetak(){
        $data = Pemasukan::all();
        $tgl= Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.pemasukan', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Informasi Pemasukan Mushola.pdf');
    }

    public function pengeluaranCetak(){
        $data = Pengeluaran::all();
        $tgl= Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.pengeluaran', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Informasi Pengeluaran Mushola.pdf');
    }

    public function ketuaPoskoCetak(){
        $data = Ketua_posko::all();
        $tgl= Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.ketuaPosko', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Informasi Kjetua Posko Keseluruhan.pdf');
    }

    public function parkiranCetak(){
        $data = Lokasi_parkir::all();
        $tgl= Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.parkiran', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Informasi Lokasi Parkir.pdf');
    }

    public function parkiranFilter(Request $request){
        $posko = posko::findOrFail($request->posko_id);
        $data = Lokasi_parkir::where('posko_id',$request->posko_id)->get();
        $tgl= Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.parkiranFilter', ['data'=>$data,'tgl'=>$tgl,'posko'=>$posko]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Lokasi Parkiran Filter posko.pdf');
    }

    public function anggotaCetak(){
        $data = Anggota_posko::all();
        $tgl= Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.anggota', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Informasi Anggota Posko.pdf');
    }

    public function anggotaFilter(Request $request){
        $posko = posko::findOrFail($request->posko_id);
        $data = Anggota_posko::where('posko_id',$request->posko_id)->get();
        $tgl= Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.anggotaFilter', ['data'=>$data,'tgl'=>$tgl,'posko'=>$posko]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Anggota Parkir Filter posko.pdf');
    }
}
