<?php

namespace App\Http\Controllers;

use App\Donasi;
use App\posko;
use Carbon\Carbon;
use PDF;
use Illuminate\Http\Request;

class reportController extends Controller
{
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
        $data = Donasi::where('haul_sekumpul_id',$request->haul_sekumpul_id)->get();
        $tgl= Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.donasiFilter', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Informasi Donasi Filter.pdf');
    }
}
