<?php

namespace App\Http\Controllers;

use App\Anggota_posko;
use App\Arraudah;
use App\Haul_sekumpul;
use App\Informasi_rombongan;
use App\Kehilangan_barang;
use App\Kehilangan_kendaraan;
use App\Kehilangan_orang;
use App\Ketua_posko;
use App\Pemasukan;
use App\Penemuan_barang;
use App\Penemuan_kendaraan;
use App\Penemuan_orang;
use App\Pengeluaran;
use App\Posko;
use Illuminate\Http\Request;

class adminController extends Controller
{


    public function depan(){

        $berita = Arraudah::where('kategori',3)->paginate(3);
        return view('welcome',compact('berita'));
    }

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

    public function beritaAll(){

        $berita = Arraudah::where('kategori',3)->get();
        return view('beritaAll',compact('berita'));
    }

    public function informasiDepan(){

        return view('informasiDepan');
    }

    public function beritaShow($uuid){
        $data = Arraudah::where('uuid',$uuid)->first();
        return view('beritaShow',compact('data'));
    }

    public function rombonganDepan(){
        $data = Informasi_rombongan::all();
        return view('rombonganDepan',compact('data'));
    }

    public function penutupanJalanDepan(){
        return view('penutupanJalanDepan');
    }

    public function kehilanganBarangDepan(){
        $data = Kehilangan_barang::all();
        return view('kehilanganBarangDepan',compact('data'));
    }

    public function penemuanBarangDepan(){
        $data = Penemuan_barang::all();
        return view('penemuanBarangDepan',compact('data'));
    }

    public function kehilanganOrangDepan(){
        $data = Kehilangan_orang::all();
        return view('kehilanganOrangDepan',compact('data'));
    }

    public function penemuanOrangDepan(){
        $data = Penemuan_orang::all();
        return view('penemuanOrangDepan',compact('data'));
    }

    public function kehilanganKendaraanDepan(){
        $data = Kehilangan_kendaraan::all();
        return view('kehilanganKendaraanDepan',compact('data'));
    }

    public function penemuanKendaraanDepan(){
        $data = Penemuan_kendaraan::all();
        return view('penemuanKendaraanDepan',compact('data'));
    }
}
