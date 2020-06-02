<?php

namespace App\Http\Controllers;
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
}
