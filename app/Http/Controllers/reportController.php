<?php

namespace App\Http\Controllers;

use App\Anggota_posko;
use App\Donasi;
use App\Haul_sekumpul;
use App\Informasi_rombongan;
use App\Kehilangan_barang;
use App\Kehilangan_kendaraan;
use App\Kehilangan_orang;
use App\Ketua_posko;
use App\Lokasi_parkir;
use App\Pemasukan;
use App\Penemuan_barang;
use App\Penemuan_kendaraan;
use App\Penemuan_orang;
use App\Pengeluaran;
use App\Pengeluaran_donasi;
use App\posko;
use Carbon\Carbon;
use PDF;
use Illuminate\Http\Request;

class reportController extends Controller
{
    public function poskoCetak()
    {
        $data     = Posko::all();
        $tgl      = Carbon::now()->format('d-m-Y');
        $pdf      = PDF::loadView('formCetak.posko', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Posko Keseluruhan.pdf');
    }

    public function poskoFilter(Request $request)
    {
        $haul         = Haul_sekumpul::findOrFail($request->haul_sekumpul_id);
        $data         = Posko::where('haul_sekumpul_id',$request->haul_sekumpul_id)->get();
        $tgl          = Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.poskoFilter', ['data'=>$data,'tgl'=>$tgl,'haul'=>$haul]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Posko Filter.pdf');
    }

    public function poskoDetailCetak($uuid)
    {
        $data         = Posko::where('uuid',$uuid)->first();
        $tgl          = Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.infoPosko', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Informasi Posko.pdf');
    }

    public function donasiCetak($uuid)
    {
        $haul         = Haul_sekumpul::where('uuid',$uuid)->first();
        $data         = Donasi::where('haul_sekumpul_id',$haul->id)->get();
        $tgl          = Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.donasi', ['data'=>$data,'tgl'=>$tgl,'haul'=>$haul]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Informasi Donasi Keseluruhan.pdf');
    }

    public function donasiFilter(Request $request)
    {
        $haul         = Haul_sekumpul::findOrFail($request->haul_sekumpul_id);
        $data         = Donasi::where('haul_sekumpul_id',$request->haul_sekumpul_id)->get();
        $tgl          = Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.donasiFilter', ['data'=>$data,'tgl'=>$tgl,'haul'=>$haul]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Informasi Donasi Filter.pdf');
    }

    public function pemasukanCetak()
    {
        $data         = Pemasukan::all();
        $tgl          = Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.pemasukan', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Informasi Pemasukan Mushola.pdf');
    }

    public function pengeluaranCetak()
    {
        $data         = Pengeluaran::all();
        $tgl          = Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.pengeluaran', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Informasi Pengeluaran Mushola.pdf');
    }

    public function ketuaPoskoCetak()
    {
        $data         = Ketua_posko::all();
        $tgl          = Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.ketuaPosko', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Informasi Kjetua Posko Keseluruhan.pdf');
    }

    public function parkiranCetak()
    {
        $data         = Lokasi_parkir::all();
        $tgl          = Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.parkiran', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Informasi Lokasi Parkir.pdf');
    }

    public function parkiranFilter(Request $request)
    {
        $posko         = posko::findOrFail($request->posko_id);
        $data          = Lokasi_parkir::where('posko_id',$request->posko_id)->get();
        $tgl           = Carbon::now()->format('d-m-Y');
        $pdf           = PDF::loadView('formCetak.parkiranFilter', ['data'=>$data,'tgl'=>$tgl,'posko'=>$posko]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Lokasi Parkiran Filter posko.pdf');
    }

    public function anggotaCetak()
    {
        $data         = Anggota_posko::all();
        $tgl          = Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.anggota', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Informasi Anggota Posko.pdf');
    }

    public function anggotaFilter(Request $request)
    {
        $posko        = posko::findOrFail($request->posko_id);
        $data         = Anggota_posko::where('posko_id',$request->posko_id)->get();
        $tgl          = Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.anggotaFilter', ['data'=>$data,'tgl'=>$tgl,'posko'=>$posko]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Anggota Parkir Filter posko.pdf');
    }

    public function rombonganCetak()
    {
        $data         = Informasi_rombongan::all();
        $tgl          = Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.rombongan', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Rombongan.pdf');
    }

    public function filterRombongan(Request $request)
    {
        $haul         = Haul_sekumpul::findOrFail($request->haul_sekumpul_id);
        $data         = Informasi_rombongan::where('haul_sekumpul_id',$request->haul_sekumpul_id)->get();
        $tgl          = Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.rombonganFilter', ['data'=>$data,'tgl'=>$tgl,'haul'=>$haul]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Anggota Parkir Filter posko.pdf');
    }

    public function kehilanganBarangCetak()
    {
        $data         = Kehilangan_barang::all();
        $tgl          = Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.kehilanganBarang', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Kehilangan Barang.pdf');
    }

    public function penemuanBarangCetak()
    {
        $data         = Penemuan_barang::all();
        $tgl          = Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.penemuanBarang', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Penemuan Barang.pdf');
    }

    public function kehilanganOrangCetak()
    {
        $data         = Kehilangan_orang::all();
        $tgl          = Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.kehilanganOrang', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Kehilangan Orang.pdf');
    }

    public function kehilanganKendaraanCetak()
    {
        $data         = Kehilangan_kendaraan::all();
        $tgl          = Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.kehilanganKendaraan', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Kehilangan Kendaraan.pdf');
    }

    public function penemuanKendaraanCetak()
    {
        $data         = Penemuan_kendaraan::all();
        $tgl          = Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.penemuanKendaraan', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Penemuan Kendaraan.pdf');
    }

    public function kehilanganBarangFilter(Request $request)
    {
        $posko        = Posko::findOrFail($request->posko_id);
        $data         = Kehilangan_barang::where('posko_id',$request->posko_id)->get();
        $tgl          = Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.kehilanganBarangFilter', ['data'=>$data,'tgl'=>$tgl,'posko'=>$posko]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Kehilangan Barang Filter posko.pdf');
    }

    public function penemuanBarangFilter(Request $request)
    {
        $posko        = Posko::findOrFail($request->posko_id);
        $data         = Penemuan_barang::where('posko_id',$request->posko_id)->get();
        $tgl          = Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.penemuanBarangFilter', ['data'=>$data,'tgl'=>$tgl,'posko'=>$posko]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Penemuan Barang Filter posko.pdf');
    }

    public function kehilanganOrangFilter(Request $request)
    {
        $posko        = Posko::findOrFail($request->posko_id);
        $data         = Kehilangan_orang::where('posko_id',$request->posko_id)->get();
        $tgl          = Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.kehilanganOrangFilter', ['data'=>$data,'tgl'=>$tgl,'posko'=>$posko]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Kehilangan Orang Filter posko.pdf');
    }

    public function kehilanganKendaraanFilter(Request $request)
    {
        $posko        = Posko::findOrFail($request->posko_id);
        $data         = Kehilangan_kendaraan::where('posko_id',$request->posko_id)->get();
        $tgl          = Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.kehilanganKendaraanFilter', ['data'=>$data,'tgl'=>$tgl,'posko'=>$posko]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Kehilangan Kendaraan Filter posko.pdf');
    }

    public function penemuanKendaraanFilter(Request $request)
    {
        $posko        = Posko::findOrFail($request->posko_id);
        $data         = Penemuan_kendaraan::where('posko_id',$request->posko_id)->get();
        $tgl          = Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.penemuanKendaraanFilter', ['data'=>$data,'tgl'=>$tgl,'posko'=>$posko]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Penemuan Kendaraan Filter posko.pdf');
    }

    public function penemuanOrangCetak()
    {
        $data         = Penemuan_orang::all();
        $tgl          = Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.penemuanOrang', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Penemuan Orang.pdf');
    }

    public function penemuanOrangFilter(Request $request)
    {
        $posko        = Posko::findOrFail($request->posko_id);
        $data         = Penemuan_orang::where('posko_id',$request->posko_id)->get();
        $tgl          = Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.penemuanOrangFilter', ['data'=>$data,'tgl'=>$tgl,'posko'=>$posko]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Penemuan Orang Filter posko.pdf');
    }

    public function pengeluaranDonasiCetak($uuid)
    {
        $haul       = Haul_sekumpul::where('uuid',$uuid)->first();
        $data       = Pengeluaran_donasi::where('haul_sekumpul_id',$haul->id)->get();
        $donasi     = Donasi::where('haul_sekumpul_id',$haul->id)->get();
        $tgl        = Carbon::now()->format('d-m-Y');
        $pdf        = PDF::loadView('formCetak.pengeluaranDonasi', ['data'=>$data,'tgl'=>$tgl,'haul'=>$haul,'donasi'=>$donasi]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Pengeluaran Donasi.pdf');
    }

    public function katuaPoskoCetak()
    {
        $data         = Ketua_posko::all();
        $tgl          = Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.ketuaPosko', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Ketua Posko.pdf');
    }

    public function ketuaFilter(Request $request)
    {
        $haul         = Haul_sekumpul::findOrFail($request->haul_sekumpul_id);
        $posko        = Posko::where('haul_sekumpul_id',$request->haul_sekumpul_id)->get();
        $data         = $posko->map(function($item){
                         return   Ketua_posko::with('user')->where('posko_id',$item->id)->get();
                        });
        $tgl          = Carbon::now()->format('d-m-Y');
        $pdf          = PDF::loadView('formCetak.ketuaFilter', ['data'=>$data,'tgl'=>$tgl,'haul'=>$haul]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Ketua Posko Filter posko.pdf');
    }

    public function ketuaDetail($uuid)
    {
        $data       = Ketua_posko::where('uuid',$uuid)->first();
        $tgl        = Carbon::now()->format('d-m-Y');
        $pdf        = PDF::loadView('formCetak.detailKetua', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Detail Ketua.pdf');
    }

    public function anggotaDetail($uuid)
    {
        $data       = Anggota_posko::where('uuid',$uuid)->first();
        $tgl        = Carbon::now()->format('d-m-Y');
        $pdf        = PDF::loadView('formCetak.detailAnggota', ['data'=>$data,'tgl'=>$tgl]);
        $pdf->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Detail Anggota.pdf');
    }
}
