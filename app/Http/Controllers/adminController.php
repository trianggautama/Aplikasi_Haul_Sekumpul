<?php

namespace App\Http\Controllers;

use App\Anggota_posko;
use App\Haul_sekumpul;
use App\Ketua_posko;
use App\Pemasukan;
use App\Pengeluaran;
use App\Posko;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){

        $haul           = Haul_sekumpul::all();
        $posko          = Posko::all();
        $ketua          = Ketua_posko::all();
        $anggota        = Anggota_posko::all();
        $donasi         = Pemasukan::all();
        $pengeluaran    = Pengeluaran::all(); 
        return view('admin.index',compact('haul','posko','ketua','anggota','donasi','pengeluaran'));
    }

    public function poskoIndex(){

        return view('posko.index');
    }
}
