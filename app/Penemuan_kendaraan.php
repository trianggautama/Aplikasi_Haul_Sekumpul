<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Penemuan_kendaraan extends Model
{
    use Uuid;
    //TABEL
    protected $table = 'penemuan_kendaraans';

    protected $fillable = [
        'posko_id', 'lokasi_parkir_id', 'plat_nomor', 'merk_kendaraan', 'warna',
        'nama_pelapor', 'no_hp_pelapor', 'status',
    ];

    //RElASI MODEL
    public function posko()
    {
        return $this->belongsTo('App\Posko');
    }

    public function lokasi_parkir()
    {
        return $this->belongsTo('App\Lokasi_parkir');
    }

}
